<?php 
require_once 'bootstrap.php';

$reporter = $entityManager->find("User", 1);
echo "REPORTER {$reporter->name}" . PHP_EOL;
//Select from user

$engineer = $entityManager->find("User", 2);
echo "ENGINEER {$engineer->name}" . PHP_EOL;
//Select from user

$bug = new Bug();
$bug->description = "This is the description";
$bug->created =  new DateTime("now");
$bug->status = "NEW";

$productIds = array('1');

$bug->setEngineer($engineer);
$entityManager->persist($bug);
$entityManager->flush();

$productIds = array(1);

foreach ($productIds AS $productId) {
    $product = $entityManager->find("Product", $productId);
    $bug->assignToProduct($product);
}

$bug->setReporter($reporter);
$bug->setEngineer($engineer);

$entityManager->persist($bug);
$entityManager->flush();

echo "Your new Bug Id: ".$bug->id."\n";