<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\ProblemType' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/src/Form/Type/AbstractExternalIdEntityType.php';
include_once \dirname(__DIR__, 4).'/src/Form/Type/ProblemType.php';

return $this->privates['App\\Form\\Type\\ProblemType'] = new \App\Form\Type\ProblemType(($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));
