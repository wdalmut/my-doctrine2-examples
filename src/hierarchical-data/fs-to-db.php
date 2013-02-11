<?php
require_once __DIR__ . '/generation/bootstrap.php';

use \Wdm\Model\Structure as S;

$path = '/home/walter/git';
$directory = new \RecursiveDirectoryIterator($path, \RecursiveDirectoryIterator::SKIP_DOTS);

$s = new S();
$s->setName($path);
$entityManager->persist($s);

scan_dir($directory, $s, $entityManager);

function scan_dir($directory, S $parent, $entityManager)
{
    foreach ($directory as $file) {
        $s = new S();
        $s->setName($file->getBasename());
        $s->setParent($parent);
        $entityManager->persist($s);
        $entityManager->flush();

        if ($file->isDir()) {
            scan_dir(new \RecursiveDirectoryIterator($file, \RecursiveDirectoryIterator::SKIP_DOTS), $s, $entityManager);
        }
    }
}

$entityManager->flush();

