<?php 
require_once 'bootstrap.php';

$user = $entityManager->find("\MyProject\Models\User", 1);

$groups = $user->getGroups();

foreach ($groups as $group) {
    echo "Group name: \"{$group->getName()}\" with id: {$group->getId()}" . PHP_EOL;
}