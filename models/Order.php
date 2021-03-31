<?php


class Order
{
    public static function save($userName, $userPhone, $userCity, $userPost, $products)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO product_order (user_name, user_phone, user_city, user_post, products) '
            . 'VALUES (:user_name, :user_phone, :user_city, :user_post, :products)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_city', $userCity, PDO::PARAM_STR);
        $result->bindParam(':user_post', $userPost, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        $result->execute();
        die;
    }
}