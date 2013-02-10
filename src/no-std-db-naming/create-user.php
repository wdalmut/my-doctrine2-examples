<?php
require_once 'bootstrap.php';

$user = new \MyProject\Models\User();

$user->setName("walter");

$entityManager->persist($user);
$entityManager->flush();
