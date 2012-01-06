<?php
require_once 'bootstrap.php';

$newProductName = "My Product";

$product = new Product();
$product->name = $newProductName;

$entityManager->persist($product);
$entityManager->flush();
