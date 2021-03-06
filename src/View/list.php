<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
                <a class="btn btn-primary" href="index.php?page=add-product">Add new</a>
            </div>
            <div class="col-12 col-md-4">
                <form class="form-inline my-2 my-lg-0" action="index.php?page=search-product" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><span class = "glyphicon glyphicon-search"></span>Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark ">
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Line</th>
                <th>Price</th>
                <th>Quantity </th>
                <th>DateCreat</th>
                <th>Description</th>
                <th width="102px"></th>

            </tr>
            </thead>
            <?php if (empty($products)): ?>
                <tr>
                    <th colspan="10">
                        No data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?php echo $product->getId() ?></td>
                        <td><?php echo $product->getProductCode() ?></td>
                        <td><?php echo $product->getProductName() ?></td>
                        <td><?php echo $product->getProductLine() ?></td>
                        <td><?php echo $product->getProductPrice() ?></td>
                        <td><?php echo $product->getQuantity() ?></td>
                        <td><?php echo $product->getDateCreate() ?></td>
                        <td><?php echo $product->getDescription() ?></td>
                        <td>
                            <a href="index.php?page=update-product&id=<?php echo $product->getId() ?>">Edit</a>
                            <span>|</span>
                            <a href="index.php?page=delete-product&id=<?php echo $product->getId() ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>
