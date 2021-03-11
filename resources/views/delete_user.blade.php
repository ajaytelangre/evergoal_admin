@include('links')
  <body >
     <div class="container-fluid">
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
            <div class="bg-light  ">
                <div class="row justify-content-center pt-5 pr-3 pl-3 mt-5">
                    <h3>Plese Confirm User Id Deletion {{$id}} </h3>
                    
                </div>
                <div class="row justify-content-center pb-5">
                    <a type="button" href="{{url('/confirm_delete_user/'.$id)}}" class="btn btn-danger mr-2 text-white">Confirm Delete</a>
                    <a type="button" href="{{url()->previous()}}" class="btn btn-success text-white">Cancel</a>
                <div>
            <div>
         


        
            <!--page content close--->
        </div>
    </div>
</div>
      









@include('jslinks')
  </body>
</html>