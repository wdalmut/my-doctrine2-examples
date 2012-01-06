<?php
require_once 'bootstrap.php';

$product = new MyProject\Models\Product();
$product->setName("My Product");

$entityManager->persist($product);
$entityManager->flush();
