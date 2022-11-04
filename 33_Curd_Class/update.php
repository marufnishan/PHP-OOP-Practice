<?php
include 'database.php';

$obj = new database();
$obj->update('students',['name'=>'Tusar','age'=>'20','city'=>'Dhakha'],'id="3"');
echo "update result is :";
print_r($obj->getReasult());
?>