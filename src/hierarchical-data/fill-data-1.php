<?php
require_once __DIR__ . '/generation/bootstrap.php';

$structure = new \Wdm\Model\Structure();
$structure->setName("Root node");
$entityManager->persist($structure);

$c1 = new \Wdm\Model\Structure();
$c1->setName("First Child");
$c1->setParent($structure);
$entityManager->persist($c1);

$c1 = new \Wdm\Model\Structure();
$c1->setName("Second Child");
$c1->setParent($structure);
$entityManager->persist($c1);

$c2 = new \Wdm\Model\Structure();
$c2->setName("First Child - Second Level");
$c2->setParent($c1);
$entityManager->persist($c2);

$entityManager->flush();

