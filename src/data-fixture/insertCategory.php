<?php
require_once __DIR__ . '/bootstrap.php';

$category = new TestData\Entity\Category();
$category->setDateTimeCreated(new DateTime());
$category->setDescription('Questa è una category di prova');
$category->setName('CatTest');
$category->setTag('ciao,2,4');
$entityManager->persist($category);
$entityManager->flush();