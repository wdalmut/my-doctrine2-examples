<?php
require_once __DIR__ . '/bootstrap.php';

$category = new TestData\Fixture\CategoryFixture();
$category->createCategoryFixture();
$category->load($entityManager);