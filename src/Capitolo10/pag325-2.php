<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Permissions\Rbac\Rbac;
use Zend\Permissions\Rbac\Role;

$rbac = new Rbac();

$user = new Role('user');
$user->addPermission('read');
$rbac->addRole($user);

$staff = new Role('staff');
$staff->addChild($user);
$staff->addPermission('write');
$rbac->addRole($staff);

var_dump($rbac->isGranted('staff', 'write')); // true
var_dump($rbac->isGranted('staff', 'read')); // true
var_dump($rbac->isGranted('user', 'write')); // false
var_dump($rbac->isGranted('user', 'read')); // true
