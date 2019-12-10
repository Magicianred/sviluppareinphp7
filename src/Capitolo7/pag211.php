<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use Zend\Diactoros\ServerRequestFactory;

require 'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

printf("HTTP Method: %s\n", $request->getMethod());
printf("URL: %s\n", $request->getUri());
printf("\nHeaders:\n");

foreach ($request->getHeaders() as $name => $value) {
    printf("%s: %s\n", ucwords($name, '-'), implode(',', $value));
}
printf("\nBody:\n%s\n", $request->getBody());
