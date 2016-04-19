<?php
session_start();
$_SESSION['name']='';
if(strcmp($_SESSION['name'],'')==0){
header("location:index.php");

}
?>