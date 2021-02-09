<?php
include 'conn.php';
$id=$_GET['id'];
// $q="delete from 'submit_task' where id=$id";
$q="DELETE FROM `submit_task` WHERE id=$id";
mysqli_query($conn,$q);
header('location:display.php');
?>