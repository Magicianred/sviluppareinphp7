<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

interface UserInterface
{
    public function getName(): string;
    public function setName(string $name);
}

class User implements UserInterface
{
    protected $name = '';

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) {
	    $this->name = $name;
    }
}
