<style type="text/css">
    .tung_san_pham{
        width: 33%;
        border: 1px solid black;
        height: 240px;
        float: left;
    }
</style>
<?php
require 'admin/conect.php';
$sql = "select * from products";
$result = mysqli_query($connect, $sql);

?>
<div id="giua">
    <?php foreach ($result as $each): ?>

        <div class="tung_san_pham"> 
            <h1>
                <?php echo $each['name'] ?>
            </h1>
            <img src="admin/product/photos/<?php echo $each['photo'] ?>" height='100'>
            <p><?php echo $each['price']?></p>
            <p><a href="product.php?id=<?php echo $each['id'] ?>">Xem chi tiết</a></p>
        </div>

     <?php endforeach ?>
</div>