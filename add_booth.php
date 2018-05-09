<?php

include_once 'connect.php';

$mysqli = new mysqli('localhost', 'root', '', 'projectdb'); //เชื่อมฐานข้อมูล
$mysqli->query("set names utf8"); //กำหนดภาษา

for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
if(isset($_POST["b_name$i"]))
{
if($_POST["b_name$i"] != "" &&
$_POST["size$i"] != "" &&
$_POST["price$i"] != "" &&	
$_POST["status$i"] != "" && 
$_POST["zone_id$i"] != "" && 
$_POST["create_by$i"] != "")

{
$sql = "INSERT INTO booths (zone_id, b_name,size,price,status,create_by)
VALUES ('".$_POST["zone_id$i"]."',
'".$_POST["b_name$i"]."',
'".$_POST["size$i"]."',
'".$_POST["price$i"]."',
'".$_POST["status$i"]."',
'".$_POST["create_by$i"]."')";
            if($mysqli->query($sql) == true)
            {

            }
            else{

            }
}
}
}
Header("Location: admin_status_add_event.php");

?>
