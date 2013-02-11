<?php
require_once __DIR__ . '/generation/bootstrap.php';

$parent = $entityManager->find("\Wdm\Model\Structure", 1);

get_childrens($parent);

function get_childrens($parent)
{
    if (!$parent) return;

    foreach ($parent->getChildrens() as $child) {
        echo $child->getName() . PHP_EOL;
        get_childrens($child);
    }
}

