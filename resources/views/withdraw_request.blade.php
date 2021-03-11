@include('links')
  <body class="bg-white" >
     
    <div class="row">
        <div class="col-4 sidbar_height bg-dark col-lg-2 collapse show d-md-flex  pt-2 pl-0  min-vh-100 bg_blue" id="sidebar">
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
					<div class="col text-center">
						<h1>Withdraw Requests</h1>
					</div>
                </div>

                <!-- table data -->
				<div class="mr-2 ml-2 text_blue">
                    <div class="table-responsive" style="max-height: 475px;"> 
                    <table class="table bg-white text-center table-bordered table-hover table_border" >
                        
                        <thead>
                            <tr >
                            <th scope="col">User Id</th>
                            <th scope="col">username</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Request Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">Pay</th>
                            <th scope="col">Reject</th>                           
                            </tr>
                        </thead>
                        <tbody>
                        
                    @foreach($user as $u)
                            <tr>
                            <th scope="row ">{{$u->user_id}}</th>
                            <td>{{$u->user_name}}</td>
                            <td>{{$u->mobile}}</td>
                            <td>{{$u->Request_amount}}</td>
                            <td>{{$u->created_at}}</td>
                            <td><a class="btn btn-success btn-sm btn-block button_border" href="#" role="button">Pay</a></td>
                            <td><button type="button" class="btn bg_red text-white btn-sm btn-block button_border" data-toggle="modal" data-target="#myModal{{$u->id}}">
                                  Reject
                            </button></td>
                            </tr>

                            <!-- model -->
                                                            <!-- The Modal -->
                                <div class="modal" id="myModal{{$u->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                    
                                            <!-- Modal body -->
                                                <div class="modal-body ">
                                                        <button type="button" class=" close " data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Reject Withdraw Request</h4>
                                                        <a type="button" href="{{url('/confirm_reject/'.$u->id)}}" class="btn btn-success button_border mt-2">Confirm</a>
                                                        <button type="button" class="btn btn-danger button_border mt-2" data-dismiss="modal">Close</button>
                                                </div>

                                            <!-- Modal footer -->
                                        

                                        </div>
                                    </div>
                                </div>
                            <!-- model -->
                        
                        @endforeach
                        
                        </tbody>
                    </table>
                </div> 
				</div>
                <!-- close table data -->
            
            
          

            

           
            <!--page content close--->
        </div>
    </div>

      








@include('jslinks')
  </body>
</html>