@include('links')
  <body >
     
    <div class="row">
        <div class="col-4 sidbar_height bg_blue col-lg-2 collapse show d-md-flex  pt-2 pl-0 min-vh-100" id="sidebar">
           @include('sidebar')
        </div>
        <div class="col-8 col-lg-10 pl-0">
            <!---navbar-->
           @include('navbar')


            <!--navbar-->

            <!----hidden icon--->
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none text-secondary"><i class="fa fa-bars"></i></a>  
            </h2>
            <!----hidden icon close--->

            <!--page content--------->
            <div class="row justify-content-center text_blue">
                
                <h3>Users list</h3>
            </div>
            <div class="row justify-content-center">
                
                <p class="text-danger">
                @if(Session::has('message'))
                {{Session::get('message')}}
                @endif
                <p>
            </div>
            
			<div class="mr-2 ml-2">
            <div class="table-responsive" style="max-height: 475px;"> <!-----table--->
                <table class="table bg-white  table-bordered table-hover text_blue" >
                    
                     <thead >
                        <tr >
                        <th scope="col">id</th>
                        <th scope="col">username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Sponser id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Child Status</th>
                        <th scope="col">Edit User</th>
                        <th scope="col">Delete user</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data1 as $user)
                   
                        <tr>
                        <th scope="row ">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->sponserid}}</td>
                        <td>{{$user->status}}</td>
                        <td>{{$user->child_status}}</td>
                        <td ><a class="text-success" href="{{url('/edit_user/'.$user->id)}}"><i class="fa fa-pencil-square-o mr-2" aria-hidden="true"></i><label>Edit<label></a></td>
                        <td ><a class="text-danger" href="{{url('/delete_user/'.$user->id)}}"><i class="fa fa-trash-o mr-2" aria-hidden="true"></i><label>Delete<label></a></td>

                        </tr>
                     
                    
                    @endforeach
                    </tbody>
                </table>
            </div> <!-----table close--->
			</div>

        
            <!--page content close--->
        </div>
    </div>

      







@include('jslinks')
  </body>
</html>