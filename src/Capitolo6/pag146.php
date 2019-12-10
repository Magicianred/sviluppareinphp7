<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

 $sql = 'INSERT INTO speakers (name, title, company, url, twitter) VALUES (:name, :title, :company, :url, :twitter)';
 $sth = $db->prepare($sql);
 $data = [
     ':name' => 'Enrico Zimuel',
     ':title' => 'Senior Software Engineer',
     ':company' => 'Zend Technologies',
     ':url' => 'http://www.zimuel.it',
     ':twitter' => '@ezimuel'
];
if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
printf("Speaker added successfully!\n");
