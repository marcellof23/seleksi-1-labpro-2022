<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\RootController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/RootController.php';

$this->services['App\\Controller\\RootController'] = $instance = new \App\Controller\RootController(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()));

$instance->setContainer(($this->privates['.service_locator.rsQA3TH'] ?? $this->load('get_ServiceLocator_RsQA3THService.php'))->withContext('App\\Controller\\RootController', $this));

return $instance;
