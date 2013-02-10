<?php
require_once 'bootstrap.php';

$reporter = $entityManager->find("\MyProject\Models\User", 1);
echo "REPORTER {$reporter->getName()}" . PHP_EOL;
//Select from user

$engineer = $entityManager->find("\MyProject\Models\User", 2);
echo "ENGINEER {$engineer->getName()}" . PHP_EOL;
//Select from user

$bug = new \MyProject\Models\Bug();
$bug->setDescription("This is the description");
$bug->setDateCreated(new DateTime("now"));
$bug->setStatus("NEW");

$productIds = array('1');

$bug->setEngineer($engineer);
$entityManager->persist($bug);
$entityManager->flush();

$productIds = array(1);

foreach ($productIds AS $productId) {
    $product = $entityManager->find("\MyProject\Models\Product", $productId);
    $bug->assignToProduct($product);
}

$bug->setReporter($reporter);
$bug->setEngineer($engineer);

$entityManager->persist($bug);
$entityManager->flush();

echo "Your new Bug Id: {$bug->getId()}" . PHP_EOL;
