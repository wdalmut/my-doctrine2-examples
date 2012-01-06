<?php 
require_once 'bootstrap.php';

$bug = $entityManager->find("\MyProject\Models\Bug", 1);

echo "Bug description: {$bug->description}" . PHP_EOL;

echo "Reporter: {$bug->getReporter()->getName()} (id: {$bug->getReporter()->getId()})" . PHP_EOL;

echo "Engineer on this task: {$bug->getEngineer()->getName()} (id: {$bug->getEngineer()->getId()})" . PHP_EOL;

