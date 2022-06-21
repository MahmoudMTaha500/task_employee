<?php
use PHPMVC\Models\EmployeeModel;

?>
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

                                    <th>Employee Name</th>
                                    <th>Document Type</th>
                                    <th>Document Number</th>
                                    <th>Attached File</th>

                                    <th class="text-right">Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($documents as $doc)
                               {?>
                                <tr>
                                    <td><?php echo $doc->id ?></td>
                                    <td><?php
                                    $emp = EmployeeModel::getByPK($doc->employee_id);
                                    
                                    echo  $emp->name?></td>
                                    <td><?php echo $doc->documentType ?></td>
                                    <td><?php echo $doc->documentNumber ?></td>
                                    <td><?php echo $doc->file ?></td>
                                

                                    
                                  <td>
                                    <div class="table-data-feature">
                                       
                                        <a href="/document/edit/<?php echo $doc->id?>" class="item" data-toggle="tooltip" data-docment="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a
                                        onclick="return confirm('Are u Sure For Delete This Document')"
                                        href="document/delete/<?php echo $doc->id?>" class="item" data-toggle="tooltip" data-docment="top" title="Edit">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                        <!-- <form action="" method="POST">
                                           


                                        <button href="" class="item" data-toggle="tooltip" data-docment="top" title="Delete" 
                                        onclick="return confirm('Are u Sure For Delete This docloyee')"
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