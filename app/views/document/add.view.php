<div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">Section Documents </div>

    <div class="card-body">
    <div class="card-title">
    <h3 class="text-center title-2">Add New Document</h3>
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
  
    <form action="/document/store" method="post"  enctype="multipart/form-data">
      
       
       
        <div class="row">
          <div class="col-6">
            <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Employees:</label>
               <select class="custom-select" required name="employee_id" id="">
                   <option selected>Select one</option>
                   <?php
                   foreach($employees as $emp){ ?>
                   <option value="<?= $emp->id?>"> <?= $emp->name?></option>

                 <?php  }
                   ?>
               </select>
              </div>
          </div>
          <div class="col-6">
            <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Document Type:</label>
               <select class="custom-select" required name="type" id="">
                   <option selected>Select one</option>
                   <option value="ID">ID</option>
                   <option value="Passport">Passport</option>
                   <option value="Iqama">Iqama</option>
               </select>
              </div> 

          </div>
       
               </div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1"> Document Number:</label>
              <input type="number" class="form-control" required name="number" id="" placeholder="type  Document Number">


              </div> 

          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Attached File:</label>
              <input type="file" class='form-control' name="file" id="">
              </div> 
          </div>
       
         </div>

      

            
        
            
           


    <button id="button" type="submit" class="btn btn-lg btn-info btn-block">
    Save
    </button>
    </div>
    </form>
    </div>

    </div>
    </div>

    </div>