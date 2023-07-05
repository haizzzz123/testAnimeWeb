<?php
require_once '../f8-anime-web/assets/database/connect.php';
?>

<?php


if(isset($_GET['delete'])){
    
    $tk = $_GET['delete'];
   $sql = "DELETE FROM dangnhap WHERE taiKhoan = '$tk'";
   echo(is_string($tk));

    //mysqli_query($con, $sql);
    $con->query("DELETE FROM dangnhap WHERE taiKhoan = $tk");

    header("Location: http://localhost:3000/quanLyTK.php");
       
    
}
?>