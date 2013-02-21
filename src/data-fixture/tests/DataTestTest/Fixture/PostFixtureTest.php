<?php

namespace DataTestTest\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use \PHPUnit_Framework_TestCase;
use TestData\Fixture\PostFixture;

class PostFixtureTest 
    extends PHPUnit_Framework_TestCase
{   
    protected $repository;   
    private $entityManager;
    
    /**
     * Angry Setup :( don't see that 
     */
    public function setUp()
    {
        $classLoader = new \Doctrine\Common\ClassLoader('TestData', __DIR__ . '/../../../src');
        $classLoader->register();
        $config = new \Doctrine\ORM\Configuration(); // (2)
        // Proxy Configuration
        $config->setProxyDir(__DIR__ . '/src/TestData/Proxies');
        $config->setProxyNamespace('TestData\Proxies');
        $config->setAutoGenerateProxyClasses((APPLICATION_ENV == "development"));
        // Mapping Configuration
        $driverImpl = $config->newDefaultAnnotationDriver(__DIR__ . '/../../../src');
        $config->setMetadataDriverImpl($driverImpl);
        // database configuration parameters (6)
        $conn = array(
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '/../../../db.sqlite',
        );
        // obtaining the entity manager (7)
        $entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
        $this->repository = new \TestData\Entity\Post;
        $this->entityManager = $entityManager;
    }
    
    /**
     * check type of Repository
     */
    public function testSet()
    {
        $this->assertInstanceOf('TestData\Entity\Post', $this->repository);
    }
    
    /**
     * test if this record is insert into database
     */
    public function testInsertIntoDb()
    {
        $categoryFixture = new \TestData\Fixture\PostFixture();
        $categoryFixture->createPostFixture($this->entityManager);
        $categoryFixture->load($this->entityManager);
        $this->assertNotEmpty($categoryFixture->getPost()->getId());
    }
}