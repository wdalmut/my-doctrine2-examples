<?php
namespace TestData\Model;

use TestData\Entity\Category as CatEntity;

class Category
{
    protected $em;
    protected $categoryEntity;
    
    public function __construct($em)
    {
        $this->em = $em;
        $this->categoryEntity = new CatEntity($entityManager);
    }
    
    public function searchById($id)
    {
        return $this->em->find('TestData\Entity\Category', 1);
    }
}