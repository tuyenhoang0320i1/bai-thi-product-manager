<body>
<h3>Chỉnh sửa mặt hàng</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" action="index.php?page=update-product">
            <label for="exampleFormControlTextarea1">ID </label>
            <input class="form-control" type="text" name="id"  value="<?php echo $product->getId(); ?>">
            <label for="exampleFormControlTextarea1">Product Code </label>
            <input class="form-control" type="text" name="productcode"  value="<?php echo $product->getProductCode(); ?>">
            <label for="exampleFormControlTextarea1">Product Name </label>
            <input class="form-control" type="text" name="productname"  value="<?php echo $product->getProductName(); ?>">
            <label for="exampleFormControlTextarea1">Product Line </label>
            <select class="custom-select custom-select-lg mb-3" name="productline">
                <?php foreach ($products as $key => $product): ?>
                    <option ><?php echo $product->getProductLine() ;?></option>
                <?php endforeach; ?>
            </select>
            <input class="form-control" type="text" name="productprice"  value=<?php echo $product->getProductPrice(); ?>>
            <label for="exampleFormControlTextarea1">Quantity In Stock </label>
            <input class="form-control" type="text" name="quantity"  value=<?php echo $product->getQuantity(); ?>>
            <label for="exampleFormControlTextarea1">Date Create </label>
            <input class="form-control" type="text" name="date"  value=<?php echo $product->getDateCreate(); ?>>
            <label for="exampleFormControlTextarea1">Description </label>
            <input class="form-control" type="text" name="description"  value="<?php echo $product->getDescription(); ?>">
            <div>
                <button class="btn btn-primary" type="submit">Update</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>
