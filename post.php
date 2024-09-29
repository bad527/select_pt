<?php
require_once("dbtools.inc.php");
$link=create_connection();
$name=$_POST["name"];
$age=$_POST["age"];
$country=$_POST["country"];
$gender=$_POST["gender"];

$languages=$_POST["languages"];
$language="";
foreach ($languages as $row) {
    $language .=$row .",";
}
$sql="INSERT INTO `tb_data` VALUES ('','$name','$age','$country','$gender','$language')";
$result=execute_sql($link,"data",$sql);
?>