
<?php
//  echo 12345;
//  var_dump($this->_data['objEmp']);die;
 ?>
<div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">Section Employees </div>
    <div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">Edit Employee  <?= $objEmp->name ?></h3>
    </div>
    <hr>
    <?php 
              if(isset($_SESSION['error_massege'])){  ?>
            <div class="alert alert-danger">
                    <ul>

                         <li class="text-dark h5"> <?php echo $_SESSION['error_massege'] ?></li>

                    </ul>
            </div>
            <?php    }
                unset($_SESSION['error_massege']);
                
   ?>
  
    <form action="/employee/update/<?php echo $objEmp->id?>" method="post" novalidate="novalidate">
      
       
       
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="" class="control-label mb-1"> Name:</label>
              <input  name="name" type="text" required='required' class="form-control"  placeholder="type your place name" value="<?= $objEmp->name ?>">
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Birth Date:</label>
              <input type="date" class="form-control" required name="birth_date" id="" value="<?= $objEmp->birthDate ?>">
              </div> 

          </div>
       
               </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Hiring Date:</label>
              <input type="date" class="form-control" required name="hiring_date" id="" value="<?= $objEmp->hiringDate ?>">


              </div> 

          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Gender:</label>
               <select class="custom-select" required name="gender" id="">
                   <option selected>Select one</option>
                   <option  <?php if($objEmp->gender== 'Male')   echo 'selected'; ?> value="Male">Male</option>
                   <option  <?php if($objEmp->gender== 'Female')   echo 'selected'; ?> value="Female">Female</option>
               </select>
              </div> 
          </div>
       
               </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <!-- <label for="cc-payment" class="control-label mb-1">Hiring Date:</label> -->
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                <input type="radio" name="options" id="option1" autocomplete="off" <?php if($objEmp->status== 0)   echo 'checked="checked"'; ?> value="0"> Active
                </label>
                <label class="btn btn-secondary">
                <input type="radio" name="options" id="option2" autocomplete="off" <?php if($objEmp->status== 1)   echo 'checked="checked"'; ?>  value="1"> stopped
                </label>
                
                </div>


              </div> 

          </div>
        
          
       
               </div>

            
        
            
           


    <div>
    <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
    Save
    </button>
    </div>
    </form>
    </div>

    </div>
    </div>

    </div>