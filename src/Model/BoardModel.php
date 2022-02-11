<?php

namespace App\Model;

use PDO;
use App\database\Database;

class BoardModel
{
    protected $id;

    protected $name;

    const TABLE_NAME = 'board';

    protected $pdo;

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
        $result = $pdoStatement ->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(String $name)
    {
        $this->name = $name;

        return $this;
    }


}