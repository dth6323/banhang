<style type="text/css">
    .tung_san_pham{
        width: 33%;
        border: 1px solid black;
        height: 240px;
        float: left;
    }
</style>
<?php
$id = $_GET['id'];
require 'admin/conect.php';
$sql = "select * from products where id = $id";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<div id="giua">
    <h1>
        <?php echo $each['name'] ?>
    </h1>
    <img src="admin/product/photos/<?php echo $each['photo'] ?>" height='100'>
    <p><?php echo $each['price']?></p>
    <p><?php echo $each['descreption'] ?></p>
</div>