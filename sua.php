<?php
include './inc/header.php';
?>

<?php
require_once '../f8-anime-web/assets/database/connect.php';
?>


<?php


if(isset($_GET['fix'])){
    
    $fix= $_GET['fix'];
    $query = "SELECT * FROM dangnhap WHERE taiKhoan = $fix";
    // $result = mysqli_query($con, $query);
    // $sql = "SELECT * FROM dangnhap WHERE taiKhoan = $fix";
    $res = mysqli_query($con, $query);
    echo(is_array($res)); 
    
// if(count($res)==1){
    $row = $res->fetch_array();
        $taiK = $row['taiKhoan'];
        $matK = $row['matKhau'];   


             

    
}

if(isset($_POST['adder'])){
    $tkup= $_POST['main-inputUser'];
    $mkup= $_POST['main-inputPass'];

    $query= "UPDATE dangnhap SET taiKhoan = $tkup,  matKhau= $mkup WHERE taiKhoan = $fix";
    if(mysqli_query($con, $query)){
        echo "<script> alert ('update thanh cong'); window.location= 'quanLyTK.php' </script>";
        
    }else{
        echo "update thanh cong";
    }



}

?> 
      
<div class="main">
<form method="POST" action="">
    <div class="main-input">
        <div class="main-input-box">          
            <div class="main-input-titleName"><p>Đăng nhập</p></div>
        </div>

        <div class="main-input-form">
            <p class="main-input-lable">Email</p>
            <input type="text" name="main-inputUser" value="<?php echo $taiK; ?>">
        </div>

        <div class="main-input-form">
            <p class="main-input-lable">mật khẩu</p>
            <input type="text" placeholder="mật khẩu" name="main-inputPass" value="<?php echo $matK; ?>">
        </div>

        <button type="submit" name="adder" >them</button>

        <div class="main-input-button"><a href="" class="main-input-btnColorYellow">đăng nhập</a></div>
        
        
    </div>
</form>
</div>
<?php
include './inc/foot.php';
?>