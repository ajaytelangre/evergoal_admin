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
            <div class="row justify-content-center text_blue">
                
                <h3>Account List</h3>
            </div>
            <div class="row justify-content-center">
                
                <p class="text-danger">
                @if(Session::has('message'))
                {{Session::get('message')}}
                @endif
                <p>
            </div>
            <div class="ml-2 mr-2">
            <div class="table-responsive" style="max-height: 475px;"> <!-----table--->
                <table class="table bg-white  table-bordered table-hover text_blue" >
                    
                     <thead >
                        <tr >
                        <th scope="col">Sr. No.</th>
                        <th scope="col">User Id</th>
                        <th scope="col">username</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Ifsc Number</th>
                        <th scope="col">Pan</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=1 ?>
                    @foreach($users as $user)
                   
                        <tr>
                        <th scope="row ">{{$a}}</th>
                        <td>{{$user->id }}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->account_type}}</td>
                        <td>{{$user->account_no}}</td>
                        <td>{{$user->bank}}</td>
                        <td>{{$user->branch_name}}</td>
                        <td>{{$user->ifsc}}</td>
                        <td>{{$user->pan}}</td>
                      

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