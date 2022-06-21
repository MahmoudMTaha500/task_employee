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
        if(isset($this->_params[0])){
            $this->_data['documents'] =     DocumentModel::getBy(['employee_id'=>$this->_params[0]]);
        }  else{
        $this->_data['documents']=  DocumentModel::getAll();
                
        }
        $this->_view();
     }


   public function addAction()
   {
    $this->_data['employees']=  EmployeeModel::getAll();

        $this->_view();

    }
    public function storeAction()
    {
      
        if( $_POST['employee_id'] !== "" && $_POST['type']  !== "" && $_POST['number'] !== "" && $_FILES['file']['name'] !== "" ){
            $doc = new DocumentModel();
            $doc->employee_id = $this->filterInt($_POST['employee_id']);
            $doc->documentType = $this->filterString($_POST['type']);
            $doc->documentNumber = $this->filterString($_POST['number']);
            $doc->file = $this->filterString($_FILES['file']['name']);
            $fileName = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileTmpName  = $_FILES['file']['tmp_name'];
            $fileType = $_FILES['file']['type'];
            $fileExtension = strtolower(end(explode('.',$fileName)));
            $uploadPath = UPLODES_PATH . basename($fileName);
          
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            $doc->save();
            if($doc->save()){
                $_SESSION['success_massege'] = 'Documnet Added Successfully ';

                $this->redirect('/document');
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
        $doc = DocumentModel::getByPK($id);
        if($doc===false){
            $this->redirect('/document');
        }
        $this->_data['doc'] = $doc;
        $this->_data['employees']=  EmployeeModel::getAll();
         $this->_view();
     }

     public function updateAction()
     {
     
         $id = $this->_params[0];

         $doc = DocumentModel::getByPK($id);
         if($doc===false){
            $this->redirect('/document');
        }
        if( $_POST['employee_id'] !== "" && $_POST['type']  !== "" && $_POST['number'] !== "" && $_FILES['file']['name'] !== "" ){

            $doc->employee_id = $this->filterInt($_POST['employee_id']);
            $doc->documentType = $this->filterString($_POST['type']);
            $doc->documentNumber = $this->filterString($_POST['number']);
            $doc->file = $this->filterString($_FILES['file']['name']);
            $fileName = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileTmpName  = $_FILES['file']['tmp_name'];
            $fileType = $_FILES['file']['type'];
            $fileExtension = strtolower(end(explode('.',$fileName)));
            $uploadPath = UPLODES_PATH . basename($fileName);
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
             $doc->save();
             if($doc->save()){
                $_SESSION['success_massege'] = 'Document Updated Successfully ';
                 $this->redirect('/document');
             } else {
 
             }
 
         } else {
             $_SESSION['error_massege'] = 'Please Input All Data ';
             return  $this->redirect("/document/edit/$doc->id");
         }
      
 
     }
    

     public function deleteAction()
     {
        $id = $this->_params[0];

         $doc = DocumentModel::getByPK($id);

            if($doc===false){
            $this->redirect('/document');
            }
            $fullpath = UPLODES_PATH . $doc->file;
            unlink($fullpath);
        if($doc->delete()){

            
            $_SESSION['success_massege'] = 'Document Deleted  Successfully ';
            $this->redirect('/document');
        } else {
        

        }
     }



}