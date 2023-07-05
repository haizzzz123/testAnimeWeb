<?php
include './inc/header.php';
?>
<!-- ./assets/database/connect.php -->
<?php
require_once './assets/database/connect.php';
?>

<?php
$sql = "SELECT taiKhoan, matKhau FROM dangnhap";

$result = mysqli_query($con, $sql);
?>

<div class="main">

    <div class="main-input">
    <table border="1">
    <tr>
        <th scope="col">tai khoan</th>
        <th scope="col">mat khau</th>
        <th scope="col">chinh sua</th>
        
    </tr>

<?php
while($row = mysqli_fetch_assoc($result)):?>  
    <tr>
        <th scope="col"><?php echo $row['taiKhoan'] ?> </th>
        <th scope="col"><?php echo $row['matKhau'] ?></th>
        <th scope="col"><a href="delete.php?delete= <?php echo $row['taiKhoan']; ?>">xoa</a>
        / <a href="sua.php?fix= <?php echo $row['taiKhoan']; ?>">sua</a>
    </th>
        
    </tr>

    <?php endwhile ?>
 
</table>
        
        
    </div>

</div>

<?php
include './inc/foot.php';
?>