@include('links')
  <body >
    
    <div class="row">
        <div class="col-4 bg_blue col-lg-2 collapse show d-md-flex  pt-2 pl-0 min-vh-100" id="sidebar">
           @include('sidebar')
        </div>
        <div class="col  pl-0">
            <!---navbar-->
           @include('navbar')


            <!--navbar-->

            <!----hidden icon--->
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none text-secondary"><i class="fa fa-bars"></i></a>  
            </h2>
            <!----hidden icon close--->

            <!--page content--------->
            <div class="bg-white mr-2 ml-2">
            <div class="row justify-content-center">
                <h3>Add User</h3>
            </div>
            <div class="row justify-content-center">
                    @if(Session::has('message'))
                                <div class="alert alert-danger">
                                    <ul>
                                        
                                            <li>{{ Session::get('message') }}</li>
                                        
                                    </ul>
                                </div>
                        @endif
                <div class="col-lg-6 col-md-6 col-12">
                    <form method="post" action="{{url('/register_user')}}">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" value="{{ old('name')}}">
                            @if ($errors->has('name')) 
                                <div class="error alert alert-danger ">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email"  class="form-control" placeholder="Enter Email" id="email" value="{{old('email')}}">
                            @if ($errors->has('email')) 
                                <div class="error alert alert-danger ">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No" id="mobile" value="{{old('mobile')}}">
                            @if ($errors->has('mobile')) 
                                <div class="error alert alert-danger ">{{ $errors->first('mobile') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="sponserid">Sponser Id:</label>
                            <input type="text" name="sponserid" class="form-control" placeholder="Enter Sponser Id" id="sponserid" value="{{old('sponserid')}}">
                            @if ($errors->has('sponserid')) 
                                <div class="error alert alert-danger ">{{ $errors->first('sponserid') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pimg">Photo:</label>
                            <input type="file" name="pimg" class="form-control" placeholder="Enter Sponser Id" id="pimg" value="{{old('pimg')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Email" id="password" value="{{old('password')}}" >
                            @if ($errors->has('password')) 
                                <div class="error alert alert-danger ">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" id="confirm_password" value="{{old('confirm_password')}}">
                            @if ($errors->has('confirm_password')) 
                                <div class="error alert alert-danger ">{{ $errors->first('confirm_password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            
                            <input type="submit" class=" btn bg_blue text-white btn-block">
                        </div>
                    </form>
                </div>
            
            </div>
          
            </div>
        
            <!--page content close--->
        </div>
    </div>

      








@include('jslinks')
  </body>
</html>