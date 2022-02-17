<?php

use PDO;
use App\database\Database;
    
$database = new Database();
    // insert a single publisher
    
    $name = 'blabla';
    $sql = 'INSERT INTO list(name) VALUES(:name)';
    
    $statement = $pdo->prepare($sql);
    
    $statement->execute([
        ':name' => $name
    ]);
    
    