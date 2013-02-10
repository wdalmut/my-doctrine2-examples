<?php
require_once 'bootstrap.php';

$user = new MyProject\Models\User();
$user->setName("wdalmut");

$entityManager->persist($user);
$entityManager->flush();

$user = new MyProject\Models\User();
$user->setName("gmittica");

$entityManager->persist($user);
$entityManager->flush();

echo "USERS CREATED" . PHP_EOL;
