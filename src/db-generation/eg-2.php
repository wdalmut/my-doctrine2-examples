<?php

require_once __DIR__ . '/generation/bootstrap.php';

$post = new \Wdm\Model\Post();
$post->setTitle("Hello world");

$page = new \Wdm\Model\Page();
$page->setContent("This is my body content 1");
$post->addPage($page);

$page = new \Wdm\Model\Page();
$page->setContent("This is my body content 2");
$post->addPage($page);

$entityManager->persist($post);
$entityManager->flush();

echo "New post created" . PHP_EOL;
