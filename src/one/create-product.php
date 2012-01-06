<?php
require_once 'bootstrap.php';

$product = new Product();
$product->name = "My Product";

$entityManager->persist($product);
$entityManager->flush();
