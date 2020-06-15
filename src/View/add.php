<body>
<h3>Thêm sản phẩm </h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <label for="exampleFormControlTextarea1">Id</label>
            <input class="form-control" type="text" name="id"  >
            <label for="exampleFormControlTextarea1">Product Code </label>
            <input class="form-control" type="text" name="productcode">
            <label for="exampleFormControlTextarea1">Product Name </label>
            <input class="form-control" type="text" name="productname">
            <label for="exampleFormControlTextarea1">Product Line </label>
            <select class="custom-select custom-select-lg mb-3" name="productline">
                <?php foreach ($products as $key => $product): ?>
                    <option ><?php echo $product->getProductLine() ;?></option>
                <?php endforeach; ?>
            </select>
            <label for="exampleFormControlTextarea1">Product Price </label>
            <input class="form-control" type="text" name="productprice">
            <label for="exampleFormControlTextarea1">Quantity </label>
            <input class="form-control" type="text" name="quantity">
            <label for="exampleFormControlTextarea1">Date Create </label>
            <input class="form-control" type="text" name="date">
            <label for="exampleFormControlTextarea1">Description </label>
            <input class="form-control" type="text" name="description">
            <div>
                <button class="btn btn-primary" type="submit">Add</button>
                <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>
</div>

</body>
