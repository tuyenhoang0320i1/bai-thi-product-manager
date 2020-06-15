<h1>Bạn có chắc chắn muốn xóa sản phẩm này ?</h1>
<h3><?php echo $product->getProductName() ; ?></h3>
<form action="./index.php?page=delete-product" method="post">
    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
    <div class="form-group">
        <input class="btn btn-danger" type="submit" value="Delete">
        <a class="btn btn-primary" href="index.php">Cancel</a>
    </div>
</form>