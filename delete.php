<?php
  include 'connection.php';
  if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from crud where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "Deleted Success";
      header('location:index.php');
    }else{
      die(mysqli_error($con));
    }
  }
