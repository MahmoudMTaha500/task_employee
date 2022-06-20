<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Filter </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('place.index')}}" method="GET">
                             @csrf 
                            <input type="hidden" name="filter" value="1">
                         
                            <div class="modal-body">
                                
                               
                               
                                <div class="row">
                                    <div class="col-12">
                                      <div class="form-group">
                                        <label for="" class="control-label mb-1"> Name:</label>
                                      <input   class="form-control" type="text" name="name" placeholder="Type Name Of user ">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" value="Confirm"  class="btn btn-primary">
                                {{-- <button type="button"  class="btn btn-primary">Confirm</button> --}}
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- end modal medium -->
                <div class="row">
                    <div class="col-1">
                        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                            Filter
                        </button>
                    </div>
                   
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>#ID</th>

                                    <th>Name</th>
                                    <th>Birth Date</th>
                                    <th>Hiring Date</th>
                                    <th>Gender</th>
                                    <th>Status</th>

                                    <th class="text-right">Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($employees as $emp)
                               {?>
                                <tr>
                                    <td><?php echo $emp->id ?></td>
                                    <td><?php echo $emp->name ?></td>
                                    <td><?php echo $emp->birthDate ?></td>
                                    <td><?php echo $emp->hiringDate ?></td>
                                    <td><?php echo $emp->gender ?></td>
                                    <td><?php echo ($emp->status == 0) ? 'Active' : 'Stopped' ?></td>

                                    
                                  <td>
                                    <div class="table-data-feature">
                                       
                                        <a href="/employee/edit/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a
                                        onclick="return confirm('Are u Sure For Delete This Employee')"
                                        href="employee/delete/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Edit">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                        <!-- <form action="" method="POST">
                                           


                                        <button href="" class="item" data-toggle="tooltip" data-empment="top" title="Delete" 
                                        onclick="return confirm('Are u Sure For Delete This Employee')"
                                        >
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </form> -->

                                        
                                    </div>

                                    </td>
                                </tr>
                             <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
               

            </div>