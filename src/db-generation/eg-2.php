<?php

require_once __DIR__ . '/generation/bootstrap.php';

$post = $entityManager->find("\Wdm\Model\Post", 1);
$pages = $post->getPages();

foreach ($pages as $page) {
    echo "\t" . $page->getContent() . PHP_EOL;
}

echo "end..." . PHP_EOL;
