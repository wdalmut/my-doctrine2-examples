<?php

namespace DataFixtureTest\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use \DataFixtureTest\Bootstrap;
use DataFixture\Fixture\CategoryFixture;

class CategoryFixtureTest 
    extends Bootstrap
{   
    protected $repository;   
    
    /**
     * Angry Setup :( don't see that 
     */
    public function setUp()
    {
        parent::setUp();
        $this->repository = new \DataFixture\Entity\Category;
    }
    
    /**
     * check type of Repository
     */
    public function testSet()
    {
        $this->assertInstanceOf('DataFixture\Entity\Category', $this->repository);
    }
    
    /**
     * test if this record is insert into database
     */
    public function testInsertIntoDb()
    {
        $categoryFixture = new \DataFixture\Fixture\CategoryFixture();
        $categoryFixture->createCategoryFixture();
        $categoryFixture->load($this->entityManager);
        $this->assertNotEmpty($categoryFixture->getCategory()->getId());
    }
}