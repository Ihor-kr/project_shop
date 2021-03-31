<?php

return array(
    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'views/catalog',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',
    'cart/checkout' => 'views/checkout',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'views/index',
    '' => 'views/index',
);