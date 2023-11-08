<?php
session_start();
 include '../connection.php';
$id = $_GET['id'];
 $sql = mysqli_query($conn,"delete from stock2 where Id = '$id'")or die(mysqli_error($conn));
 if($sql){
    header("location:./viewRecord2.php");
 }else{
    echo"not deleted";
 }
?>