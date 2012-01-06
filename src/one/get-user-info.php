<?php 
require_once 'bootstrap.php';

$user = $entityManager->find("User", 2);

echo "User name: {$user->getName()}" . PHP_EOL;

$listOfBugsAssigned = $user->getAssignedBugs();
foreach ($listOfBugsAssigned as $bug) {
    echo "Assigned bug id: {$bug->getDescription()} on {$bug->getDateCreated()->format('d-m-Y H:i:s')}" . PHP_EOL;
    echo " - Products" . PHP_EOL;
    $products = $bug->getProducts();
    foreach ($products as $product) {
        echo "     Product: {$product->getName()}" . PHP_EOL;
    }
}

$listOfBugsReported = $user->getReportedBugs();
foreach ($listOfBugsReported as $bug) {
    echo "Reported bug id: {$bug->getId()} on {$bug->getDateCreated()->format('d-m-Y H:i:s')}" . PHP_EOL;
    echo " - Products" . PHP_EOL;
    $products = $bug->getProducts();
    foreach ($products as $product) {
        echo "     Product: {$product->getName()}" . PHP_EOL;
    }
    echo PHP_EOL;
}
