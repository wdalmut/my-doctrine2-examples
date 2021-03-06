<?php
namespace DataFixtureTest;
use \PHPUnit_Framework_TestCase;

class Bootstrap
    extends PHPUnit_Framework_TestCase
{
    protected $entityManager;
    public function setUp()
    {
        $classLoader = new \Doctrine\Common\ClassLoader('DataFixture', __DIR__ . '/../../src');
        $classLoader->register();
        $config = new \Doctrine\ORM\Configuration(); // (2)
        // Proxy Configuration
        $config->setProxyDir(__DIR__ . '/src/DataFixture/Proxies');
        $config->setProxyNamespace('DataFixture\Proxies');
        $config->setAutoGenerateProxyClasses((APPLICATION_ENV == "development"));
        // Mapping Configuration
        $driverImpl = $config->newDefaultAnnotationDriver(__DIR__ . '/../../src');
        $config->setMetadataDriverImpl($driverImpl);
        // database configuration parameters (6)
        $conn = array(
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '/../../db.sqlite',
        );
        // obtaining the entity manager (7)
        $entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
        $this->entityManager = $entityManager;
    }
}