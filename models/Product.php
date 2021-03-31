<?php


class Product
{
    const SHOW_BY_DEFAULT = 6;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = [];

        $result = $db->query('SELECT product_id, name, price, image_path, is_new FROM products '
        . 'WHERE status = "1"'
        . 'ORDER BY product_id ASC '
        . 'LIMIT ' . $count);

        $i = 0;
        while($row = $result->fetch()) {
            $productsList[$i]['product_id'] = $row['product_id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image_path'] = $row['image_path'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductsListByCategory($categoryId = false, $page = 1) {
        if ($categoryId) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = [];

            $result = $db->query("SELECT product_id, name, price, image_path, is_new FROM products "
            . "WHERE status = '1' AND category_id = '$categoryId' "
            . "ORDER BY product_id DESC "
            . "LIMIT " . self::SHOW_BY_DEFAULT
            . 'OFFSET ' . $offset);

            $i = 0;
            while($row = $result->fetch()) {
                $products[$i]['product_id'] = $row['product_id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image_path'] = $row['image_path'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id) {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM products WHERE product_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getTotalProductsInCategory($categoryId) {
        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM products '
        . 'WHERE status="1" AND category_id="' . $categoryId .'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
}