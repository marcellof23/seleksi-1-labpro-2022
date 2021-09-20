<?php declare(strict_types=1);
/**
 * Generated from 'autoload.php.in' on Tue Sep 14 09:18:13 CEST 2021.
 *
 * Autoload setup file for the Symfony application
 *
 * Part of the DOMjudge Programming Contest Jury System and licensed
 * under the GNU GPL. See README and COPYING for details.
 */

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

// Load the static domserver file if we don't have the constants from it yet
if (!defined('LIBVENDORDIR')) {
    require('/domjudge/etc/domserver-static.php');
}

return require LIBVENDORDIR.'/autoload.php';
