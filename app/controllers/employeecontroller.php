<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\AbstractModel;
use PHPMVC\Models\EmployeeModel;


class EmployeeController extends AbstractController
 {
    use InputFilter;
    use Helper;

    public function defaultAction (){
        $this->_data['employees']=  EmployeeModel::getAll();
        $this->_view();
    }


   public function addAction()
   {
        $this->_view();

    }
    public function storeAction()
    {
        
        if($_POST['name'] !== "" && $_POST['birth_date'] !== "" && $_POST['hiring_date']  !== "" && $_POST['gender'] !== "" ){
            $emp = new EmployeeModel();
            $emp->name = $this->filterString($_POST['name']);
            $emp->birthDate = $this->filterString($_POST['birth_date']);
            $emp->hiringDate = $this->filterString($_POST['hiring_date']);
            $emp->gender = $this->filterString($_POST['gender']);
            $emp->status = $this->filterString($_POST['status']);
            $emp->save();
            if($emp->save()){
                $_SESSION['success_massege'] = 'Employee Added Successfully ';

                $this->redirect('/employee');
            } else {
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
         $this->_view();
     }

     public function updateAction()
     {
         
         $id = $this->_params[0];
         $emp = EmployeeModel::getByPK($id);
         if($emp===false){
            $this->redirect('/employee');
        }
         if($_POST['name'] !== "" && $_POST['birth_date'] !== "" && $_POST['hiring_date']  !== "" && $_POST['gender'] !== "" ){
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
             }
 
         } else {
             $_SESSION['error_massege'] = 'Please Input All Data ';
             return  $this->redirect("/employee/edit/$emp->id");

         }
      
 
     }
    

     public function deleteAction()
     {
        $id = $this->_params[0];

        $emp = EmployeeModel::getByPK($id);
            if($emp===false){
            $this->redirect('/employee');
            }

        if($emp->delete()){
            $_SESSION['success_massege'] = 'Employee Deleted  Successfully ';
            $this->redirect('/employee');
        } else {

        }
     }

}