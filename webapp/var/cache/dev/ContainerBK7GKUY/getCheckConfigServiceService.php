<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\CheckConfigService' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Service/CheckConfigService.php';

return $this->privates['App\\Service\\CheckConfigService'] = new \App\Service\CheckConfigService(true, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['validator'] ?? $this->getValidatorService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
