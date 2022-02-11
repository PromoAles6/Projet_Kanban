<?php

namespace App\Model;
use App\database\Database;
use PDO;
class BoardModel 
{
    protected $id;
    protected $name;
    protected $pdo;
    const TABLE_NAME = 'board';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();          
    }

    public function findAll()
    {
        $sql = 'SELECT
                `id`
                ,`name`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';
        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        dump($result);
        return $result; 
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId()
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName(String $name)
    {
        $this->name = $name;
        return $this;
    }
    
}