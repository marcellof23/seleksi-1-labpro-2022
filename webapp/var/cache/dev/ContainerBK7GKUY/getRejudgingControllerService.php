<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Jury\RejudgingController' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/Jury/RejudgingController.php';

$this->services['App\\Controller\\Jury\\RejudgingController'] = $instance = new \App\Controller\Jury\RejudgingController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\RejudgingService'] ?? $this->load('getRejudgingServiceService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['session'] ?? $this->load('getSessionService.php')));

$instance->setContainer(($this->privates['.service_locator.rsQA3TH'] ?? $this->load('get_ServiceLocator_RsQA3THService.php'))->withContext('App\\Controller\\Jury\\RejudgingController', $this));

return $instance;
