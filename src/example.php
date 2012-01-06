<?php

define ("APPLICATION_ENV", 'development');

set_include_path(
    implode(
        PATH_SEPARATOR, 
        array(
            __DIR__, 
            get_include_path(), 
            realpath(__DIR__ . "/../vendor/doctrine/lib"),
            realpath(__DIR__ . "/../vendor/doctrine/lib/vendor/doctrine-common/lib"),
            realpath(__DIR__ . "/../vendor/doctrine/lib/vendor/doctrine-dbal/lib"),
            realpath(__DIR__ . "/../vendor/zf2/library")
        )
    )
);

require_once 'Zend/Loader/StandardAutoloader.php';

$autoloader = new \Zend\Loader\StandardAutoloader();
$autoloader->registerNamespace("Zend", realpath(__DIR__ . "/../vendor/zf2/library/Zend"));
$autoloader->register();

require 'Doctrine/Common/ClassLoader.php';
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

require_once 'User.php';
require_once 'Product.php';
require_once 'Bug.php';

$config = new Doctrine\ORM\Configuration(); // (2)

// Proxy Configuration (3)
$config->setProxyDir(__DIR__.'/lib/MyProject/Proxies');
$config->setProxyNamespace('MyProject\Proxies');
$config->setAutoGenerateProxyClasses((APPLICATION_ENV == "development"));

// Mapping Configuration (4)
//$driverImpl = new Doctrine\ORM\Mapping\Driver\XmlDriver(__DIR__."/config/mappings/xml");
//$driverImpl = new Doctrine\ORM\Mapping\Driver\XmlDriver(__DIR__."/config/mappings/yml");
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__);
$config->setMetadataDriverImpl($driverImpl);

// Caching Configuration (5)
// if (APPLICATION_ENV == "development") {
//     $cache = new \Doctrine\Common\Cache\ArrayCache();
// } else {
//     $cache = new \Doctrine\Common\Cache\ApcCache();
// }
// $config->setMetadataCacheImpl($cache);
// $config->setQueryCacheImpl($cache);

// database configuration parameters (6)
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager (7)
$evm = new Doctrine\Common\EventManager();
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config, $evm);

//BOOTSTRAPPED!
$newUsername = "wdalmut";

$user = new User();
$user->name = $newUsername;

$entityManager->persist($user);
$entityManager->flush();
