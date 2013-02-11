<?php
require_once __DIR__ . '/generation/bootstrap.php';

$parent = $entityManager->find("\Wdm\Model\Structure", 1);

get_childrens($parent);

function get_childrens($parent, $level = 0)
{
    if (!$parent) return;

    foreach ($parent->getChildrens() as $child) {
        foreach (range(0, $level) as $l) {
            echo "    ";
        }
        echo $child->getName() . PHP_EOL;
        get_childrens($child, $level+1);
    }
}

