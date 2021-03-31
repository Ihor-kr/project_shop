<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['category_id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="images/product-details/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?php echo $product['name']; ?></h2>
                                <p style="font-size: 14px;">
                                    <a style="font-weight: bold;">CODE:</a> <?php echo $product['code']; ?>
                                </p>
                                <span>
                                            <span><?php echo $product['price']; ?> ₴</span>
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                To cart
                                            </button>
                                        </span>
                                <p style="font-size: 14px;"><b>Avaibility:</b> <?php echo $product['avaibility']; ?></p>
                                <p style="font-size: 14px;"><b>Brand:</b> <?php echo $product['brand']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <h5 style="color: #222222; font-weight: bold; font-size: 14px;">Description product</h5>
                            <p style="font-size: 14px;"><?php echo $product['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>