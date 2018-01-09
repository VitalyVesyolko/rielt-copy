<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
include_once $this->targetDirs[2].'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/Adapter/AdapterInterface.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/Adapter/ORM/DoctrineORMAdapter.php';
include_once $this->targetDirs[2].'/vendor/doctrine/common/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/EventListener/Doctrine/BaseListener.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/EventListener/Doctrine/CleanListener.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/EventListener/Doctrine/UploadListener.php';
include_once $this->targetDirs[2].'/vendor/vich/uploader-bundle/EventListener/Doctrine/RemoveListener.php';
include_once $this->targetDirs[2].'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';
include_once $this->targetDirs[2].'/vendor/doctrine/common/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[2].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
include_once $this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
include_once $this->targetDirs[2].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';

$a = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
$b = ($this->services['vich_uploader.upload_handler'] ?? $this->load(__DIR__.'/getVichUploader_UploadHandlerService.php'));

$c = new \Symfony\Bridge\Monolog\Logger('doctrine');
$c->pushHandler(($this->privates['monolog.handler.null_internal'] ?? $this->privates['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler()));

$d = new \Doctrine\DBAL\Logging\LoggerChain();
$d->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
$d->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

$e = new \Doctrine\DBAL\Configuration();
$e->setSQLLogger($d);

$f = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();

$g = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$g->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('image', $f, $a, $b));
$g->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('image', $f, $a, $b));
$g->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('image', $f, $a, $b));
$g->addEventListener(array(0 => 'loadClassMetadata'), new \Doctrine\ORM\Tools\AttachEntityListenersListener());

return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array()))->createConnection(array('driver' => 'pdo_pgsql', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => array(), 'serverVersion' => '10.1', 'defaultTableOptions' => array()), $e, $g, array());