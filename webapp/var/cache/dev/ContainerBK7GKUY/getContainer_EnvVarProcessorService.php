<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'container.env_var_processor' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/EnvVarProcessor.php';

return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
    yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
}, 1));
