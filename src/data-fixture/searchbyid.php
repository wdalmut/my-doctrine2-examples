<?php
require_once __DIR__ . '/bootstrap.php';

$categoryModel = new TestData\Model\Category($entityManager);
$category = $categoryModel->searchById(1);
var_dump($category);