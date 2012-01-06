<?php 
require_once 'bootstrap.php';

$user = $entityManager->find("\MyProject\Models\User", 1);
$group = $entityManager->find('\MyProject\Models\Group', 1);

$user->add($group);

$entityManager->persist($user);
$entityManager->flush();