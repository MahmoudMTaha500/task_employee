
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                    <?php 
              if(isset($_SESSION['success_massege'])){  ?>
            <div class="alert alert-success">
                    <ul>

                         <li class="text-dark h5"> <?php echo $_SESSION['success_massege'] ?></li>

                    </ul>
            </div>
            <?php    }
                unset($_SESSION['success_massege']);
               ?>
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
                                       
<<<<<<< HEAD
                                    <a href="/document/default/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Document">
                                            <i class="zmdi zmdi-file"></i>
                                        </a>
=======
>>>>>>> a5c90005626b1971b598adad7d377253a55b962d
                                        <a href="/employee/edit/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a
                                        onclick="return confirm('Are u Sure For Delete This Employee')"
<<<<<<< HEAD
                                        href="employee/delete/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Delete">
=======
                                        href="employee/delete/<?php echo $emp->id?>" class="item" data-toggle="tooltip" data-empment="top" title="Edit">
>>>>>>> a5c90005626b1971b598adad7d377253a55b962d
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