<?php
require_once __DIR__ . '/bootstrap.php';

$category = new DataFixture\Fixture\CategoryFixture();
$category->createCategoryFixture();
$category->load($entityManager);