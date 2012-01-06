<?php 
require_once 'bootstrap.php';

$group = new \MyProject\Models\Group();

$group->setName("example group");

$entityManager->persist($group);
$entityManager->flush();