<?php
require_once 'bootstrap.php';

$newUsername = "wdalmut";

$user = new User();
$user->name = $newUsername;

$entityManager->persist($user);
$entityManager->flush();

$newUsername = "gmittica";

$user = new User();
$user->name = $newUsername;

$entityManager->persist($user);
$entityManager->flush();

echo "CREATED" . PHP_EOL;