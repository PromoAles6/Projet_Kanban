<?php

namespace App\Model;

use PDO;
use App\database\Database;

class RegisterModel
{
    protected $id;

    protected $email;

    protected $password;

    protected $pdo;

    const TABLE_NAME = 'user';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findAll()
    {
        $sql = 'SELECT
                `id`
                ,`email`
                ,`password`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}