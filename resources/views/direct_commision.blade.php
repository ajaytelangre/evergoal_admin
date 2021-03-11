@include('links')
  <body class="bg-white" >

    <div class="row">
	
        <div class="col-4 sidbar_height bg_blue  col-lg-2 collapse show d-md-flex pt-2  pl-0 min-vh-100" id="sidebar">
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
                <form action="{{url('/direct_commision')}}" method="post">
                    @csrf
                    <div class="row justify-content-center ml-2 mr-2 mt-5">
                        <div class="col-12 col-lg-6 col-md-6">
                            <div class="card" style="">
                                <div class="card-body">

                                    <h5 class="card-title text-center text_blue">Direct Refferel Commision</h5>
                                    @if(session()->has("message"))
                                        <lable class="text-danger">{{session()->get('message')}}</lable>
                                    @endif
                                    @if(session()->has("success"))
                                        <lable class="text-success">{{session()->get('success')}}</lable>
                                    @endif
                                    @if($errors->has('daily_commision'))
                                         <lable class="text-danger">{{$errors->first('daily_commision')}}</lable>
                                    @endif


                                    <input type="text" class="form-control" id="daily_commision" name="daily_commision" value="{{$commision->daily_commision}}" Required>
                                    <button type="submit" class="btn bg_blue text-white button_border mt-2 ">Submit </buttton>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            

           
            <!--page content close--->
        </div>
    </div>

      








@include('jslinks')
  </body>
</html>