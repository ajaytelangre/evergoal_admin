<ul class="nav nav-pills text-light  flex-column flex-nowrap overflow-hidden">
				<li class="nav-item bg-white set_logo">
                    <a class="nav-link " href="{{url('/home')}}"><img src="{{asset('img/logo.png')}}" class="img-fluid bg-white logo"></a>
                </li>
				<div class="ml-2">
                <li class="nav-item">
                    <a class="nav-link text-truncate text-light" href="{{url('/home')}}"><i class="fa fa-home"></i> <span class=" d-sm-inline">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate text-light" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class=" d-sm-inline">Report Managment</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-4 nav">
                                 
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="#">
                                            <i class="fa fa-chevron-circle-right"></i> Rank Achiver Report </a>
                                </li>
                            
                     
                                <!--  <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="#">
                                            <i class="fa fa-chevron-circle-right"></i> Recent Transaction Report </a>
                                </li> -->
                            
                        </ul>
                    </div>
                </li>
                <!-- commision setting -->
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate text-light" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-money"></i> <span class=" d-sm-inline">Commision setting</span></a>
                    <div class="collapse" id="submenu2" aria-expanded="false">
                        <ul class="flex-column pl-4 nav">
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="{{url('/direct_commision')}}">
                                            <i class="fa fa-chevron-circle-right"></i> Set Direct Refferal Commision </a>
                                </li>
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="{{url('/level_commision')}}">
                                            <i class="fa fa-chevron-circle-right"></i> Set Level Commision </a>
                                </li>
                                <!-- <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="#">
                                            <i class="fa fa-chevron-circle-right"></i> Set Mattrix Commision </a>
                                </li> -->
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="#">
                                            <i class="fa fa-chevron-circle-right"></i> Set Rank Commision </a>
                                </li>

                        </ul>
                    </div>
                </li>


                <!-- commision settion close -->

                <!-- payout managment -->
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate text-light" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><i class="fa fa-credit-card"></i> <span class=" d-sm-inline">Payout Managment</span></a>
                    <div class="collapse" id="submenu3" aria-expanded="false">
                        <ul class="flex-column pl-4 nav">
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="{{url('/withdraw_request')}}">
                                            <i class="fa fa-chevron-circle-right"></i> Withdraw Request </a>
                                </li>
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="#">
                                            <i class="fa fa-chevron-circle-right"></i> Pay  </a>
                                </li>
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="{{url('/paid_transactions')}}">
                                            <i class="fa fa-chevron-circle-right"></i> Paid Transaction </a>
                                </li>
                                <li class="nav-item">
                                            <a class="nav-link text-light p-1" href="{{url('/unpaid_transactions')}}">
                                            <i class="fa fa-chevron-circle-right"></i> Unpaid Transaction</a>
                                </li>

                        </ul>
                    </div>
                </li>
                <!-- payout managment close -->
                
                <li class="nav-item"><a class="nav-link text-truncate text-light" href="{{url('/downline')}}"><i class="fa fa-arrow-down"></i> <span class=" d-sm-inline">Downline</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate text-light" href="{{url('/users_list')}}"><i class="fa fa-users"></i> <span class=" d-sm-inline">User list</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate text-light" href="{{url('/account_list')}}"><i class="fa fa-list"></i> <span class=" d-sm-inline">Account list</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate text-light" href="{{url('/add_user')}}"><i class="fa fa-plus"></i> <span class=" d-sm-inline">Add user</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate text-light" href="{{url('/task_list')}}"><i class="fa fa-download"></i> <span class=" d-sm-inline">Task List</span></a></li>
                </div>
            </ul>