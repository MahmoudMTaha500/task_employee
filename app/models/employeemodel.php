<?php
namespace PHPMVC\Models;


class EmployeeModel extends AbstractModel
{
public $id;
public $name;
public $birthDate;
public $hiringDate;
public $gender;
public $status;
protected static  $tableName = 'employees';

protected  static $tableSchema = array(
'name'=>self::DATA_TYPE_STR,
'birthDate'=>self::DATA_TYPE_STR,
'hiringDate'=>self::DATA_TYPE_STR,
'gender'=>self::DATA_TYPE_STR,
'status'=>self::DATA_TYPE_INT

);
protected static $primaryKey='id';



}