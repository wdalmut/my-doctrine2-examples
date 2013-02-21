<?php
namespace TestData\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
class CategoryFixture
    extends AbstractFixture
{
    protected $category;
    
    public function createCategoryFixture()
    {
        $category = new \TestData\Entity\Category();
        $category->setDateTimeCreated(new \DateTime());
        $category->setDescription('Questa è una category di prova');
        $category->setName('CatTest');
        $category->setTag('ciao,2,4');
        $this->category = $category;
        return $this;
    }
    
    
    public function load(ObjectManager $manager)
    {
        $manager->persist($this->category);
        $manager->flush();
    }
    
    public function getCategory()
    {
        return $this->category;
    }
}