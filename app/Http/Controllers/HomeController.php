<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use Validator;
use App\Models\User;
use App\Models\Withdraw_request;
use App\Models\Commision;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['users']=count(DB::table('users')
                        ->where('user_type','user')
                        ->get('id'));
        
        $data['active']=count(DB::table('users')
                        ->where('user_type','user')
                        ->where('status','active')
                        ->get('id'));
        
        $data['deactive']=count(DB::table('users')
                        ->where('user_type','user')
                        ->where('status','deactive')
                        ->get('id'));

        $data['requests']=count(DB::table('withdraw_requests')
                        ->where('paid_status','unpaid')
                        ->get('id'));
       

        return view('dashboard',$data);
    }

    public function approve_task($id)
    {
        $task=Task::find($id);
        $task->status="approved";
        $task->save();
        return Redirect::back();
    }

    public function reject_task($id)
    {
        $task=Task::find($id);
        $task->status="reject";
        $task->save();
        return Redirect::back();
    }

    public function transaction_history($id)
    {
        $data["users"] = DB::table('withdraw_requests')
                ->where('user_id',$id)
                ->orderBy('updated_at', 'desc')
                ->get();
        foreach($data["users"] as $us)
        {
            $data["name"]=$us->user_name;
        }
        $data['id']=$id;
       // return $data['name'];
         return view('transaction_history',$data);
    }



    
    public function downline_list($id)
    {
        

        //$id=session()->get('id');
        $user_id=DB::select(DB::raw('SELECT t1.id as lev1, t2.id as lev2, t3.id as lev3,t4.id as lev4,t5.id as
        lev5,t6.id as lev6,t7.id as lev7, t8.id as lev8 from users as t1 left join users as t2 on (t2.sponserid=t1.id) left join users as t3 on(t3.sponserid=t2.id) 
        left join users as t4 on(t4.sponserid=t3.id) left join users as t5 on(t5.sponserid=t4.id) left join users as t6 on(t6.sponserid=t5.id) left join users as t7
         on(t7.sponserid=t6.id) left join users as t8 on(t8.sponserid=t7.id) where t1.id=:id'),array(
            'id'=>$id,
        ));
     
      // return $user_id;
       $lev1=$lev2=$lev3=$lev4=$lev5=$lev6=$lev7=$lev8=array();
       $c=0;
       foreach($user_id as $x=>$y)
       {
          // $lev1[$c++]=explode(" ",$y->lev1); 
           array_push($lev1,$y->lev1);
           array_push($lev2,$y->lev2);
           array_push($lev3,$y->lev3);
           array_push($lev4,$y->lev4);
           array_push($lev5,$y->lev5);
           array_push($lev6,$y->lev6);
           array_push($lev7,$y->lev7);
           array_push($lev8,$y->lev8);
         
       }
    

       $users_data['count_level21']=array_filter(array_unique($lev2));
       $users_data['count_level31']=array_filter(array_unique($lev3));
       $users_data['count_level41']=array_filter(array_unique($lev4));
       $users_data['count_level51']=array_filter(array_unique($lev5));
       $users_data['count_level61']=array_filter(array_unique($lev6));
       $users_data['count_level71']=array_filter(array_unique($lev7));
       $users_data['count_level81']=array_filter(array_unique($lev8));
       $list_count=(array_merge($users_data['count_level21'],$users_data['count_level31'],$users_data['count_level41'],$users_data['count_level51'],$users_data['count_level61'],$users_data['count_level71'],$users_data['count_level81']));
      

      $list_users_count='';
      $level2_active_users_count=count(DB::table('users')  //second level active user count
                   ->whereIn('id', $users_data['count_level21'])
                   ->where('status','active')
                   ->select('id')
                  ->get());

     $level3_active_users_count=count(DB::table('users')  //3 level active user count
                     ->whereIn('id', $users_data['count_level31'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

     $level4_active_users_count=count(DB::table('users')  //4 level active user count
                     ->whereIn('id', $users_data['count_level41'])
                     ->where('status','active')
                     ->select('id')
                    ->get());

      $level5_active_users_count=count(DB::table('users')  //5 level active user count
                     ->whereIn('id', $users_data['count_level51'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
    
      $level6_active_users_count=count(DB::table('users')  //6 level active user count
                     ->whereIn('id', $users_data['count_level61'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
      
      $level7_active_users_count=count(DB::table('users')  //7 level active user count
                     ->whereIn('id', $users_data['count_level71'])
                     ->where('status','active')
                     ->select('id')
                    ->get());
     
        

       $users_data['data1'] = DB::table('users')
                    ->whereIn('id', $list_count)
                    ->get();
            
   
       return view('downline_list',$users_data);
    }
















    public function downline()
    {
        $data['users'] = DB::table('users')
                        ->where('user_type','user')
                        ->where('status','active')
                        ->get();
        //return $data;
        return view('downline',$data);
    }

    public function task_list()
    {
        $data["task"] = DB::table('tasks')
                            ->leftJoin('users', 'tasks.user_id', '=', 'users.id')
                            ->select('users.id','users.name', 'tasks.*')
                            ->where('tasks.status','pending')
                            ->orderBy('updated_at', 'desc')
                             ->get();

       // return $data;
        return view("task_list",$data);
    }
    public function account_list()
    {
        $data["users"] = DB::table('banks')
            ->leftJoin('users', 'banks.id', '=', 'users.id')
            ->select('users.id','users.name', 'banks.*')
            ->get();

            return view('account_list',$data);
    }
    public function paid_transactions()
    {
        $data["users"] = DB::table('withdraw_requests')
                ->where('paid_status','paid')
                ->orderBy('updated_at', 'desc')
                ->get();
        return view('paid_transactions',$data);
    }
    public function unpaid_transactions()
    {
        $data["users"] = DB::table('withdraw_requests')
                ->where('paid_status','unpaid')
                ->orderBy('updated_at', 'desc')
                ->get();
        return view('unpaid_transaction',$data);
    }

    public function level_commision()
    {
        $data['commision']=Commision::find(1);
        return view('level_commision',$data);
    }

    public function set_level_commision(Request $request)
    {
        $validateData=Validator::make($request->all(),[
            'level_1'=>'required|numeric',
            'level_2'=>'required|numeric',
            'level_3'=>'required|numeric',
            'level_4'=>'required|numeric',
            'level_5'=>'required|numeric',
            'level_6'=>'required|numeric',
            'level_7'=>'required|numeric',

           
        ]);
        if($validateData->fails())
        {
            return Redirect::back()->withErrors($validateData);
        }
        else
        {   
           
            $commision=Commision::find(1);
            $commision->level_1=$request->level_1;
            $commision->level_2=$request->level_2;
            $commision->level_3=$request->level_3;
            $commision->level_4=$request->level_4;
            $commision->level_5=$request->level_5;
            $commision->level_6=$request->level_6;
            $commision->level_7=$request->level_7;
            $data=$commision->save();
            if($data)
            {
                return Redirect::back()->with("success","Data Updated");

            }
            else{
                return Redirect::back()->with('message',"Data Updation Failed");

            }

        }
       
    }
    
    public function direct_commision_view()
    {
        $data['commision']=Commision::find(1);
        return view('direct_commision',$data);
    }
    public function direct_commision(Request $request)
    {
        $validateData=Validator::make($request->all(),[
            'daily_commision'=>'required|numeric',
           
        ]);
        if($validateData->fails())
        {
            return Redirect::back()->withErrors($validateData);
        }
        else
        {   
            $amount=$request->daily_commision;
            $commision=Commision::find(1);
            $commision->daily_commision=$amount;
            $data=$commision->save();
            if($data)
            {
                return Redirect::back()->with("success","Data Updated");

            }
            else{
                return Redirect::back()->with('message',"Data Updation Failed");

            }

        }
       
    }

    public function confirm_reject($id)
    {
        $withdraw=Withdraw_request::find($id);
        $withdraw->paid_status="Rejected";
        $withdraw->save();
        return Redirect::back();
      

    }

    public function withdraw_request()
    {
        $data["user"]=DB::table('withdraw_requests')
                        ->where('paid_status','unpaid')
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        return view('withdraw_request',$data);
    }

    public function users_list()
    {
        $data['users'] = DB::table('users')
                        ->where('user_type','user')
                        ->get();
        //return $data;
        return view('customer_list',$data);
    }

    public function add_user()
    {
        return view('add_user');
    }

    public function delete_user($id)
    {
        $data['id']=$id;
        return view('delete_user',$data);
    }

    public function confirm_delete_user($id)
    {
        DB::table('users')->where('id', $id)->delete();
        DB::table('amounts')->where('id', $id)->delete();
        return Redirect::to('users_list')->with('message', 'User deleted Succesfully.');
    }

    public function edit_user($id)
    {
        $data['users'] = DB::table('users')
                ->where('id',$id)
                ->get();
        return view('edit_user',$data);

    }

    public function update_user(Request $request)
    {
        $validateData=Validator::make($request->all(),[
            'name'=>'required',
            'mobile'=>'required|max:10|min:10',
            'email'=>'required',
            'sponserid'=>'required',
            'status'=>'required'
        ]);

        if($validateData->fails())
        {
            return Redirect::back()->withErrors($validateData);
        }
        else{
            $id=$request->id;
            $user=User::find($id);
            $user->name=$request->name;
            $user->mobile=$request->mobile;
            $user->email=$request->email;
            $user->sponserid=$request->sponserid;
            $user->status=$request->status;
            $user->save();

            return Redirect::back()->with('message','Data Updated');


            
        }
        
    }


    public function register_user(Request $request)
    {
        //return $request->all();

        $validatedData = Validator::make($request->all(), [
                
            'name' => 'required',
            'mobile'=>'required|unique:users|max:10|min:10',
            'email'=>'required|unique:users',
            'sponserid'=>'required|unique:users',
            'password'=>'required',
            'confirm_password'=>'required'
        ]);
        if($validatedData->fails())
        {
            
        // echo "validation fail";
            return Redirect::back()->withErrors($validatedData);
        }
        else{
            $name=$request->name;
            $sponserid=$request->sponserid;
            $mobile=$request->mobile;
            $email=$request->email;
            $password=$request->password;
            $password1=$request->confirm_password;
            $pimg="";
            //return $pimg;
            if($password==$password1)
            {
                if($request->hasFile('pimg'))
                {
                    $pimg= $request->pimg->getClientOriginalName();
                    // if(auth()->user()->pimg)
                    // {
                    //     Storage::delete('public/user/'.auth()->user()->pimg);
                    // }
                    $request->pimg->storeAs('user',$pimg,'public');
                    auth()->user()->update(['pimg'=>$pimg]);
                }
                


                DB::table('users')->insert([
                    'email'=>$email,
                    'password'=>Hash::make($password),
                    'name'=>$name,
                    'mobile'=>$mobile,
                    'sponserid'=>$sponserid,
                    'pimg'=>$pimg,
                    'user_type'=>'user',
                    'created_at'=>Carbon::now(),
                ]);
                Session::flash('message','Data uploaded');
                return Redirect::back()->withErrors($validatedData);
            }
            else{
                Session::flash('message','Both Passwords does not match');
                return Redirect::back()->withErrors($validatedData);
                //echo "password is diff";
            }
            
        }

    }
}
