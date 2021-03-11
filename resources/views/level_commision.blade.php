@include('links')
  <body >
     
    <div class="row">
        <div class="col-4 sidbar_height bg_blue col-lg-2 collapse show d-md-flex  pt-2 pl-0 min-vh-100" id="sidebar">
           @include('sidebar')
        </div>
        <div class="col pl-0">
            <!---navbar-->
           @include('navbar')


            <!--navbar-->

            <!----hidden icon--->
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none text-secondary"><i class="fa fa-bars"></i></a>  
            </h2>
            <!----hidden icon close--->

            <!--page content--------->
                <form action="{{url('/level_commision')}}" method="post">
                    @csrf
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="card" style="">
                                <div class="card-body">

                                    <h5 class="card-title text-center text_blue">Set Level Commision</h5>
                                    @if(session()->has("message"))
                                        <lable class="text-danger">{{session()->get('message')}}</lable>
                                    @endif
                                    @if(session()->has("success"))
                                        <lable class="text-success">{{session()->get('success')}}</lable><br>
                                    @endif
                                   

                                    <label>Level 1 Commission:</label>
                                    <input type="text" class="form-control" id="level_1" name="level_1" value="{{$commision->level_1}}" Required>
                                    @if($errors->has('level_1'))
                                         <lable class="text-danger">{{$errors->first('level_1')}}</lable>
                                    @endif
                                    <label>Level 2 Commission:</label>
                                    <input type="text" class="form-control" id="level_2" name="level_2" value="{{$commision->level_2}}" Required>
                                    @if($errors->has('level_2'))
                                         <lable class="text-danger">{{$errors->first('level_2')}}</lable>
                                    @endif
                                    <label>Level 3 Commission:</label>
                                    <input type="text" class="form-control" id="level_3" name="level_3" value="{{$commision->level_3}}" Required>
                                    @if($errors->has('level_3'))
                                         <lable class="text-danger">{{$errors->first('level_3')}}</lable>
                                    @endif
                                    <label>Level 4 Commission:</label>
                                    <input type="text" class="form-control" id="level_4" name="level_4" value="{{$commision->level_4}}" Required>
                                    @if($errors->has('level_4'))
                                         <lable class="text-danger">{{$errors->first('level_4')}}</lable>
                                    @endif
                                    <label>Level 5 Commission:</label>
                                    <input type="text" class="form-control" id="level_5" name="level_5" value="{{$commision->level_5}}" Required>
                                    @if($errors->has('level_5'))
                                         <lable class="text-danger">{{$errors->first('level_5')}}</lable>
                                    @endif
                                    <label>Level 6 Commission:</label>
                                    <input type="text" class="form-control" id="level_6" name="level_6" value="{{$commision->level_6}}" Required>
                                    @if($errors->has('level_6'))
                                         <lable class="text-danger">{{$errors->first('level_6')}}</lable>
                                    @endif
                                    <label>Level 7 Commission:</label>
                                    <input type="text" class="form-control" id="level_7" name="level_7" value="{{$commision->level_7}}" Required>
                                    @if($errors->has('level_7'))
                                         <lable class="text-danger">{{$errors->first('level_7')}}</lable><br>
                                    @endif
                                    
                                    <button type="submit" class="btn bg_blue text-white mt-2 button_border ">Submit </buttton>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            

           
            <!--page content close--->
        </div>
    </div>
</div>
      








@include('jslinks')
  </body>
</html>