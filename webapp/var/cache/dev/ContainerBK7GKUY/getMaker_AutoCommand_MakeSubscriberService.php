<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_subscriber' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src/EventRegistry.php';

$this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php')), ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setName('make:subscriber');

return $instance;
