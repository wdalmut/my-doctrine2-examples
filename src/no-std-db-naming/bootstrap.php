<?php
define ("APPLICATION_ENV", 'development');

set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            __DIR__,
            realpath(__DIR__ . '/lib'),
            realpath(__DIR__ . "/../../vendor/doctrine/lib"),
            realpath(__DIR__ . "/../../vendor/doctrine/lib/vendor/doctrine-common/lib"),
            realpath(__DIR__ . "/../../vendor/doctrine/lib/vendor/doctrine-dbal/lib"),
            get_include_path(),
        )
    )
);

require 'Doctrine/Common/ClassLoader.php';
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('MyProject');
$classLoader->register();

$config = new Doctrine\ORM\Configuration(); // (2)

// Proxy Configuration
$config->setProxyDir(__DIR__ . '/lib/MyProject/Proxies');
$config->setProxyNamespace('MyProject\Proxies');
$config->setAutoGenerateProxyClasses((APPLICATION_ENV == "development"));

// Mapping Configuration
$driverImpl = $config->newDefaultAnnotationDriver(__DIR__);
$config->setMetadataDriverImpl($driverImpl);

// database configuration parameters (6)
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../db-not-std.sqlite',
);

// obtaining the entity manager (7)
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

//BOOTSTRAPPED!