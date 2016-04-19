<?php
session_start();
$_SESSION['sname']='';
if(strcmp($_SESSION['sname'],'')==0){
header("location:index.php");

}
?>

