<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\AbstractModel;
use PHPMVC\Models\DocumentModel;
use PHPMVC\Models\EmployeeModel;


class UplodeController extends AbstractController
{
    use InputFilter;
    use Helper;

     public function showAction(){
       $id = $this->_params[0]; 
        $doc = DocumentModel::getByPK($id);
        $file =UPLODES_PATH . $doc->file;
        header("Content-type: application/pdf"); 
        header("Content-Length: " . filesize($file)); 
        readfile($file); 
     }


   
 


}