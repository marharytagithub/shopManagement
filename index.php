<?php

require('lib/Shop.php');
require('lib/ShopProduct/ShopProduct.php');
require('lib/ShopProduct/CartProductInterface.php');
require('lib/ShopProduct/Sweet/Sweet.php');
require('lib/ShopProduct/Meat/Meat.php');
require('lib/ShopProduct/Sweet/Product/Cake.php');
require('lib/ShopProduct/Sweet/Product/Candy.php');
require('lib/ShopProduct/Meat/Product/Pork.php');
require('lib/ShopProduct/Meat/Product/Turkey.php');

$productObCandy = new ShopProduct_Sweet_Candy('KinderSurprise', 2.5);
$productObCandy->setColor('white');
$productObPork = new ShopProduct_Meat_Pork('Steak', 10.05);
$productObCake = new ShopProduct_Sweet_Cake('Cheesecake', 12.70);
$productObTurkey = new ShopProduct_Meat_Turkey('Grill fillets', 10.40);

$shopOb = new Shop("Rita");
$shopOb->addProduct($productObCandy);
$shopOb->addProduct($productObPork);
$shopOb->addProduct($productObCake);
$shopOb->addProduct($productObTurkey);
$shopOb->removeProduct();

echo '<pre>';
var_dump($shopOb->countTotal());
var_dump($shopOb);
