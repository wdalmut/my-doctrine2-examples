<?php
require_once 'bootstrap.php';

$user = new User();
$user->name = "wdalmut";

$entityManager->persist($user);
$entityManager->flush();

$user = new User();
$user->name = "gmittica";

$entityManager->persist($user);
$entityManager->flush();

echo "USERS CREATED" . PHP_EOL;