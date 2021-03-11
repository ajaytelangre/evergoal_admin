@include('links')
  <body >
     
    <div class="row">
        <div class="col-4 sidbar_height bg_blue col-lg-2 collapse show d-md-flex  pt-2 pl-0 min-vh-100" id="sidebar">
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
            
            <div class="row justify-content-center"> <!--  row -->
                <div class="col-12 col-lg-6 col-md-6"> <!--  col-6 -->
                <div class="card">
                            <div class="card-header text-center text-white bg_blue">
                                <h3> Transaction History</h3>
                            </div>
                            <div class="card-body text_blue ">
                                <blockquote class="blockquote mb-0">
                                <label>Name: {{$name}}</label> <br>
                                <label>User Id: {{$id}}</label>
                            </div>
                    </div>

                </div> <!--  col-6 -->
            </div><!--  row -->

            <div class="row justify-content-center">
                
                <p class="text-danger">
                @if(Session::has('message'))
                {{Session::get('message')}}
                @endif
                <p>
            </div>
            
			<div class="mr-3 ml-3">
            <div class="table-responsive" style="max-height: 475px;"> <!-----table--->
                <table class="table bg-white  table-bordered table-hover text_blue" >
                    
                     <thead >
                        <tr >
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Date</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=1 ?>
                    @foreach($users as $user)
                   
                        <tr>
                        <th scope="row ">{{$a}}</th>
                        <td>{{$user->Request_amount}}</td>
                        <td>{{$user->paid_status}}</td>
                        <td>{{$user->updated_at}}</td>
                    

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