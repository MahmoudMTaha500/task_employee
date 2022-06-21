<?php
namespace PHPMVC\Models;


class DocumentModel extends AbstractModel
{
public $id;
public $employee_id ;
public $documentType;
public $documentNumber;
public $file;

protected static  $tableName = 'documents';

protected  static $tableSchema = array(
'employee_id'=>self::DATA_TYPE_INT,
'documentType'=>self::DATA_TYPE_STR,
'documentNumber'=>self::DATA_TYPE_INT,
'file'=>self::DATA_TYPE_STR,


);
protected static $primaryKey='id';



}