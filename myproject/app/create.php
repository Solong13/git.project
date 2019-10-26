<?php
require  __DIR__ . '../vander/autoload.php';
$date = json_decode(file_get_contents(__DIR__.'../date/datebasa.json'), true  );
$product = new Product (id null, name 'gitar', cost '2000', Brand '38');

$date['product'][] = $product->convertToArray();
file_put_contents($datebasePath, json_encode($date));
var_dump($date);
?>