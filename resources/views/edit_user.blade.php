@include('links')
  <body >
     <div class="container-fluid">
    <div class="row">
        <div class="col-4 sidbar_height bg_blue col-lg-2 collapse show d-md-flex  pt-2 pl-0 min-vh-100" id="sidebar">
           @include('sidebar')
        </div>
        <div class="col	pl-0">
            <!---navbar-->
           @include('navbar')


            <!--navbar-->

            <!----hidden icon--->
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none text-secondary"><i class="fa fa-bars"></i></a>  
            </h2>
            <!----hidden icon close--->

            <!--page content--------->
            <div class="bg-light mr-2 ml-2">
            <div class="row  d-flex justify-content-center text_blue">
                    
                    <h3>Edit User Info </h3>
                   
            </div>
            <div class="row  d-flex justify-content-center">
                   <span class="text-success"> {{Session::get('message')}}</span>
            </div>
		
            @foreach($users as $user)
            <form method="post"  action="{{url('/update_user')}}">
             @csrf
             <input type="hidden" name='id' value="{{$user->id}}">
                <div class="row mt-1 d-flex justify-content-center">
                    <div class="col-12 col-lg-2 ">
                    <label>Name: </label>
                   
                    </div>
                    <div class="col-12 col-lg-5">
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$user->name}}">
                    </div>
                        @if($errors->has('name'))
                            <span class="text-danger"> {{$errors->first('name')}} </span>
                        @endif
                </div>
                <div class="row mt-1 d-flex justify-content-center ">
                        <div class="col-12 col-lg-2">
                            <label>Email:<label>
                        </div>
                        <div class="col-12 col-lg-5">
                            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{$user->email}}">
                        </div>
                        @if($errors->has('email'))
                            <span class="text-danger"> {{$errors->first('email')}} </span>
                        @endif
                </div>
                <div class="row mt-1 d-flex justify-content-center ">
                        <div class="col-12 col-lg-2">
                            <label>Mobile:<label>
                        </div>
                        <div class="col-12 col-lg-5">
                            <input type="mobile" class="form-control" placeholder="Enter Mobile Number" name="mobile" value="{{$user->mobile}}">
                        </div>
                        @if($errors->has('mobile'))
                            <span class="text-danger">{{$errors->first('mobile')}} </span>
                        @endif
                </div>
                <div class="row mt-1 d-flex justify-content-center ">
                        <div class="col-12 col-lg-2">
                            <label>Sponser Id:<label>
                        </div>
                        <div class="col-12 col-lg-5">
                            <input type="text" class="form-control" placeholder="Enter sponserid" name="sponserid" value="{{$user->sponserid}}">
                        </div>
                        @if($errors->has('sponserid'))
                            <span class="text-danger">{{$errors->first('sponserid')}} </span>
                        @endif
                </div>
                <div class="row mt-1 d-flex justify-content-center ">
                        <div class="col-12 col-lg-2">
                            <label>Status:<label>
                        </div>
                        <div class="col-12 col-lg-5">
                                <label class="form-check-label ml-3 mr-2">
                                    <input type="radio" class="form-check-input" name="status" value="active" <?php if($user->status=="active"){echo "checked";} ?> >
                                    Active
                                    
                                </label>
                                <label class="form-check-label ml-3">
                                    <input type="radio" class="form-check-input" name="status" value="deactive" <?php if($user->status=="deactive"){echo "checked";} ?> >Deactive
                                </label>
                        </div>
                        @if($errors->has('status'))
                            <span class="text-danger">{{$errors->first('status')}} </span>
                        @endif
                     
                </div>
                <div class="row d-flex justify-content-center mt-1 pb-5">
                    <div class="col-12 col-lg-7">
                                <button type="submit" class="btn bg_blue text-white btn-block">Submit</button>
                     </div>
                </div>
            </form>
            @endforeach
		

            </div>
            <!--page content close--->
        </div>
    </div>
</div>
      








@include('jslinks')
  </body>
</html>