@include('links')
  <body class="bg-white">
    
    <div class="row">
        <div class="col-4 sidbar_height bg-dark col-lg-2 bg_blue collapse show d-md-flex  pt-2 pl-0   min-vh-100" id="sidebar">
           @include('sidebar')
        </div>
        <div class="col-8 col-lg-10 pl-0 ">
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
						<h3>Paid Transactions</h3>
					</div>
                </div>
         
            <div class="row justify-content-center">
                
                <p class="text-danger">
                @if(Session::has('message'))
                {{Session::get('message')}}
                @endif
                <p>
            </div>
            <div class="mr-3 ml-3">
            <div class="table-responsive " style="max-height: 475px; "> <!-----table--->
                <table class="table bg-white  table-bordered table-hover text_blue text-center" >
                    
                     <thead >
                        <tr >
                        <th scope="col">Sr. No.</th>
                        <th scope="col">User Id</th>
                        <th scope="col">username</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">Payment History</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=1 ?>
                    @foreach($users as $user)
                   
                        <tr>
                        <th scope="row ">{{$a}}</th>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->Request_amount}}</td>
                        <td>{{$user->paid_status}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td><a href="{{url('/transaction_history/'.$user->user_id)}}" type="button" class="btn bg_red text-white btn-block">History</a></td>

                        </tr>
                     
                    <?php $a++ ?>
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