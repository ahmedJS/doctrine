<?php 
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;

    require "vendor/autoload.php";


    // require my entity

    
    $isDevMode = true;
    $proxyDir  = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"),$isDevMode,$proxyDir,$cache,$useSimpleAnnotationReader);

    // $conn = array(
    //     "driver" => "pdo_mysql",
    //     "path"   => __DIR__ . "/db.mysql"
    // );
    
    // $conn = array(
    //     'driver' => 'pdo_sqlite',
    //     'path' => __DIR__ . '/db.sqlite',
    
    // );

    $connection_param = array(
        "url" => "mysql://root:root@localhost:3305/mydb"
    );
    $conn = \Doctrine\DBAL\DriverManager::getConnection($connection_param);
    
    $entityManager = EntityManager::create($conn,$config);
?>