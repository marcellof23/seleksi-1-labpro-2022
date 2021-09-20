<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'web_profiler.controller.exception_panel' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Controller/ExceptionPanelController.php';

return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->load('getErrorHandler_ErrorRenderer_HtmlService.php')), ($this->services['profiler'] ?? $this->getProfilerService()));
