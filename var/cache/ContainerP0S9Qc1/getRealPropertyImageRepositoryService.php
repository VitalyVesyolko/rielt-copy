<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\RealProperty\RealPropertyImageRepository' shared autowired service.

include_once $this->targetDirs[2].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectRepository.php';
include_once $this->targetDirs[2].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
include_once $this->targetDirs[2].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once $this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[2].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
include_once $this->targetDirs[2].'/src/Repository/RealProperty/RealPropertyImageRepository.php';

return $this->privates['App\Repository\RealProperty\RealPropertyImageRepository'] = new \App\Repository\RealProperty\RealPropertyImageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));