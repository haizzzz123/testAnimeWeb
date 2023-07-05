<?php
include './inc/header.php';
?>
<?php
require_once '../f8-anime-web/assets/database/connect.php';
?>

<?php
echo ("da click");
if(isset($_POST['adder'])){
    
    $tk = $_POST['main-inputUser'];
    $mk = $_POST['main-inputPass'];

    if($con->query("INSERT INTO dangnhap(taiKhoan, matKhau) VALUES (N'$tk', N'$mk')")){
        echo ("them thanh cong");
    }else{
        echo ("them that bai");
    }
    
}
$con->close();
?> 
      
<div class="main">
<form method="POST" action="">
    <div class="main-input">
        <div class="main-input-box">          
            <div class="main-input-titleName"><p>Đăng nhập</p></div>
        </div>

        <div class="main-input-form">
            <p class="main-input-lable">Email</p>
            <input type="text" name="main-inputUser">
        </div>

        <div class="main-input-form">
            <p class="main-input-lable">mật khẩu</p>
            <input type="text" placeholder="mật khẩu" name="main-inputPass">
        </div>

        <button type="submit" name="adder" >them</button>

        <div class="main-input-button"><a href="" class="main-input-btnColorYellow">đăng nhập</a></div>
        
        
    </div>
</form>
</div>
<?php
include './inc/foot.php';
?>