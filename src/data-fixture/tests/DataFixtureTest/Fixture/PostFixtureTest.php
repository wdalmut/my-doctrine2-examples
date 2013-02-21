<?php

namespace DataFixtureTest\Fixture;

use Doctrine\Common\Persistence\ObjectManager;
use \DataFixtureTest\Bootstrap;
use DataFixture\Fixture\PostFixture;

class PostFixtureTest 
    extends Bootstrap
{   
    protected $repository;   
    
    /**
     * Angry Setup :( don't see that 
     */
    public function setUp()
    {
        parent::setUp();
        $this->repository = new \DataFixture\Entity\Post;
    }
    
    /**
     * check type of Repository
     */
    public function testSet()
    {
        $this->assertInstanceOf('DataFixture\Entity\Post', $this->repository);
    }
    
    /**
     * test if this record is insert into database
     */
    public function testInsertIntoDb()
    {
        $categoryFixture = new \DataFixture\Fixture\PostFixture();
        $categoryFixture->createPostFixture($this->entityManager);
        $categoryFixture->load($this->entityManager);
        $this->assertNotEmpty($categoryFixture->getPost()->getId());
    }
}