<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products">
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
                <div class="features_items">
                    <h2 class="title text-center">Cart</h2>


                    <?php if ($result): ?>
                        <p>The order has been successfully executed!</p>
                    <?php else: ?>

                        <p>Selected products: <?php echo $totalQuantity; ?>, in amount: <?php echo $totalPrice; ?>, ₴</p><br/>

                        <?php if (!$result): ?>

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>To place an order, fill out the form!</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Your Name</p>
                                        <input type="text" name="userName" value="<?php echo $userName; ?>"/>

                                        <p>Number mobile</p>
                                        <input type="text" name="userPhone" value="<?php echo $userPhone; ?>"/>

                                        <p>Recipient city</p>
                                        <input type="text" name="userCity" value="<?php echo $userCity; ?>"/>

                                        <p>Department post</p>
                                        <input type="text" name="userPost" value="<?php echo $userPost; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Order" />
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
