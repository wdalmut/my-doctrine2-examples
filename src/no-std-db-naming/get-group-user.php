<?php 
require_once 'bootstrap.php';

$group = $entityManager->find("\MyProject\Models\Group", 1);

$users = $group->getUsers();

foreach ($users as $user) {
    echo "User name: \"{$user->getName()}\" with id: {$user->getId()}" . PHP_EOL;
}