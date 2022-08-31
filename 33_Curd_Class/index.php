<?php
include 'database.php';

$obj = new database();
$obj->insert('students',['name'=>'Redoy','age'=>'23','city'=>'Tangail']);
echo "Insert reasult is :";
print_r($obj->getReasult());
?>