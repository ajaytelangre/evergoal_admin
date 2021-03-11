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
                
                <h3>Task List</h3>
            </div>
            <div class="row justify-content-center">
                
                <p class="text-danger">
                @if(Session::has('message'))
                {{Session::get('message')}}
                @endif
                <p>
            </div>
            <div class="mr-2 ml-2">
            <div class="table-responsive" style="max-height: 475px;"> <!-----table--->
                <table class="table bg-white  table-bordered table-hover text_blue" >
                    
                     <thead >
                        <tr >
                        <th scope="col">Sr. No.</th>
                        <th scope="col">User Id</th>
                        <th scope="col">username</th>
                        <th scope="col">Screen Shot</th>
                        <th scope="col">view</th>
						<th scope="col">approve</th>
						<th scope="col">reject</th>
                        <th scope="col">Task Status</th>
                        <th scope="col">Date</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                    <?php $a=1 ?>
                    @foreach($task as $task)
                   
                        <tr>
                        <th scope="row ">{{$a}}</th>
                        <td>{{$task->user_id }}</td>
                        <td>{{$task->name}}</td>
                        <td>{{$task->task_img}}</td>
                        <td>
                             <button type="button" class="btn bg_blue text-white" data-toggle="modal" data-target="#viewtask{{$a}}">
                                 view
                            </button>
                         </td>
						  <td>
                             <a type="button" value="approve" href="{{url('/approve_task/'.$task->id)}}" class="btn bg_blue text-white" >
                                 approve
                            </a>
                         </td>
						  <td>
                             <a type="button" href="{{url('/reject_task/'.$task->id)}}" class="btn bg_red text-white" >
                                 reject
                            </a>
                         </td>
                        <td>{{$task->status}}</td>
                        <td>{{$task->created_at}}</td>
                       
                      

                        </tr>
                        <!-- model -->
                        <div class="modal fade" id="viewtask{{$a}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
										
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="modal-body">
                                        <img src="file:///G:/laravel/Evergoal/public/storage/{{$task->task_img}}" class="img-fluid">
                                    </div>
                            
                                </div>
                            </div>
                        </div>





                         <!-- model -->
                     
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