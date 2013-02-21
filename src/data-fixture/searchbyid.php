<?php
require_once __DIR__ . '/bootstrap.php';

$categoryModel = new DataFixture\Model\Category($entityManager);
$category = $categoryModel->searchById(1);
var_dump($category);