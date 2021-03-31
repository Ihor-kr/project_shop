<?php


class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("Location: /cart");
    }

    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $productsInCart = false;
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once ROOT . '/views/cart/cart.php';
    }

    public function actionCheckout()
    {
        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userCity = $_POST['userCity'];
            $userPost = $_POST['userPost'];

            $errors = false;
            if ($errors == false)
                $productsInCart = Cart::getProducts();
            $result = Order::save($userName, $userPhone, $userCity, $userPost, $productsInCart);
        }
    }
}