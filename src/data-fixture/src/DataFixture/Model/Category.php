<?php
namespace DataFixture\Model;

use DataFixture\Entity\Category as CatEntity;

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
        return $this->em->find('DataFixture\Entity\Category', 1);
    }
}