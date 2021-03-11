@include('links')
  <body class="bg-white" >
    
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
			
            <div class="row justify-content-center ml-2 mr-1"> <!--card---->
				<a href="{{url('/users_list')}}" style="text-decoration:none;">
					<div class="col-lg-4  col-md-4 mt-4 ">
						<div class="card  card_background text_blue">
							<div class="card-body">
								<div class="row">
									<div class="col-7">
										<p class="card-title ">Total Users</p>
										<h5 class="card-text " >{{$users}}</h5>
									</div>
									<div class="col-5">
											<i class="fa fa-users symbol_size" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						 </div>
					</a>
                 </div>
                 
                 <div class="col-lg-4  col-md-4 mt-4">
                    <div class="card card_background text_blue">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <p class="card-title ">Total Active</p>
                                    <h5 class="card-text " >{{$active}}</h5>
                                </div>
                                <div class="col-5">
                                        <i class="fa fa-check text-success symbol_size" aria-hidden="true"></i>
                                </div>
                            </div>
                            
                        </div>
                     </div>
                 </div>

                 <div class="col-lg-4  col-md-4 mt-4">
                    <div class="card card_background text_blue">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <p class="card-title ">Total Deactive</p>
                                    <h5 class="card-text " >{{$deactive}}</h5>
                                </div>
                                <div class="col-5">
                                        <i class="fa fa-times-circle text-danger symbol_size" aria-hidden="true"></i>
                                </div>
                            </div>
                            
                        </div>
                     </div>
                 </div>
				 
				 
				 <div class="col-lg-4  col-md-4 mt-4">
				 <a href="{{url('/withdraw_request')}}" style="text-decoration:none;">
                    <div class="card card_background text_blue">
                        <div class="card-body">
                            <div class="row">
								
                                <div class="col-7">
                                    <p class="card-title ">Wihdraw Requests</p>
                                    <h5 class="card-text " >{{$requests}}</h5>
                                </div>
                                <div class="col-5 ">
                                        <i class="fa fa-download text-dark symbol_size" aria-hidden="true"></i>
                                </div>
                            </div>
                            
                        </div>
                     </div>
					  </a>
                 </div>
              

                 
            </div> <!--card close---->

          

           
            <!--page content close--->
        </div>
    </div>

      







@include('jslinks')
  </body>
</html>