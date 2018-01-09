<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.upload_handler' shared service.

include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Injector/FileInjectorInterface.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Injector/FileInjector.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Handler/AbstractHandler.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Handler/UploadHandler.php';

$a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));