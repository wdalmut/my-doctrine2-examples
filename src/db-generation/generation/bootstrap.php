<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

require_once __DIR__ . '/Wdm/Model/Page.php';
require_once __DIR__ . '/Wdm/Model/Post.php';

define ("APPLICATION_ENV", 'development');

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Wdm');
$classLoader->register();

$config = new Doctrine\ORM\Configuration(); // (2)

// Proxy Configuration
$config->setProxyDir(__DIR__ . '/../Wdm/Proxies');
$config->setProxyNamespace('Wdm\Proxies');
$config->setAutoGenerateProxyClasses((APPLICATION_ENV == "development"));

// Mapping Configuration
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__);
$config->setMetadataDriverImpl($driverImpl);

// database configuration parameters (6)
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../db.sqlite',
);

// obtaining the entity manager (7)
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

