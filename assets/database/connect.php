<?php
$severname = 'localhost';
$username = 'root';
$password= '';
$database= 'netTruyen';



$con = mysqli_connect($severname, $username, $password, $database);
// echo("ket noi thanh con");
// $tk = $_GET['delete'];
// echo($tk);
//mysqli_set_charset($con, 'UTF8');

// if(isset($_GET['delete'])){
    
//     $tk = $_GET['delete'];
//    $sql = "DELETE FROM dangnhap WHERE taiKhoan = '$tk'";
//    echo(is_string($tk));

//     //mysqli_query($con, $sql);
//     $con->query("DELETE FROM dangnhap WHERE taiKhoan = $tk");

//     header("Location: http://localhost:3000/quanLyTK.php");
       
    
// }
?>