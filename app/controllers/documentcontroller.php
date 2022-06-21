<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\AbstractModel;
use PHPMVC\Models\DocumentModel;
use PHPMVC\Models\EmployeeModel;


class DocumentController extends AbstractController
{
    use InputFilter;
    use Helper;

     public function defaultAction(){
        $this->_data['documents']=  DocumentModel::getAll();
        $this->_view();
     }


   public function addAction()
   {
    $this->_data['employees']=  EmployeeModel::getAll();

        $this->_view();

    }
    public function storeAction()
    {
        
        // print_r($_POST);
        // print_r($_FILES);
        // die;
        if( $_POST['employee_id'] !== "" && $_POST['type']  !== "" && $_POST['number'] !== "" && $_FILES['file']['name'] !== "" ){
            $doc = new DocumentModel();
            $doc->employee_id = $this->filterInt($_POST['employee_id']);
            $doc->documentType = $this->filterString($_POST['type']);
            $doc->documentNumber = $this->filterString($_POST['number']);
            $doc->file = $this->filterString($_FILES['file']['name']);
            file_put_contents(UPLODES_PATH,$_FILES['file']['full_path']);
            $doc->save();
            if($doc->save()){
                $_SESSION['success_massege'] = 'Documnet Added Successfully ';

                $this->redirect('/employee');
            } else {
                //  var_dump($emp);

            }

        } else {
            $_SESSION['error_massege'] = 'Please Input All Data ';
            return  $this->redirect('/employee/add');;
        }
     

    }

    public function editAction()
    {
        $id = $this->_params[0];
        $emp = EmployeeModel::getByPK($id);
        if($emp===false){
            $this->redirect('/employee');
        }
        $this->_data['objEmp'] = $emp;

        // print_r($emp->name); 

         $this->_view();
 
     }

     public function updateAction()
     {
         
        //  var_dump($_POST);
        //  die;
         $id = $this->_params[0];

         $emp = EmployeeModel::getByPK($id);
            // var_dump($emp);
        //  die;
         if($emp===false){
            $this->redirect('/employee');
        }
         if($_POST['name'] !== "" && $_POST['birth_date'] !== "" && $_POST['hiring_date']  !== "" && $_POST['gender'] !== "" ){
            //  $emp = new EmployeeModel();
             $emp->name = $this->filterString($_POST['name']);
             $emp->birthDate = $this->filterString($_POST['birth_date']);
             $emp->hiringDate = $this->filterString($_POST['hiring_date']);
             $emp->gender = $this->filterString($_POST['gender']);
             $emp->status = $this->filterString($_POST['status']);
             $emp->save();
             if($emp->save()){
                $_SESSION['success_massege'] = 'Employee Updated Successfully ';
                 $this->redirect('/employee');
             } else {
                 //  var_dump($emp);
 
             }
 
         } else {
             $_SESSION['error_massege'] = 'Please Input All Data ';
             return  $this->redirect('/employee/add');;
         }
      
 
     }
    

     public function deleteAction()
     {
        $id = $this->_params[0];

        $emp = EmployeeModel::getByPK($id);
           // var_dump($emp);
       //  die;
            if($emp===false){
            $this->redirect('/employee');
            }

        if($emp->delete()){
            $_SESSION['success_massege'] = 'Employee Deleted  Successfully ';
            $this->redirect('/employee');
        } else {
            //  var_dump($emp);

        }
     }



}