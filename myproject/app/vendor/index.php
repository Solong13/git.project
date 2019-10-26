<?php
require_once "../vendor/autoload.php";

use App\Entity\BaseProducte.php;
use App\Entity\product.php;
use App\Entity\productDiff.php;

$product = new Product(name "gitar", cost: 45);

$product->name;
$product->test = 10000;

$product = new Product(name "gitar", cost: 45);
$product1 = new Product(name "gitar", cost: 45);
$product2 = new Product(name "gitar", cost: 45);
$product3 = new Product(name "gitar", cost: 45);
var_dump($product );
var_dump($product1 );
var_dump($product2 );
var_dump($product3 );
?>