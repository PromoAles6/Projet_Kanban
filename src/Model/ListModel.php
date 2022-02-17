<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ListModel{

    protected $id;
    protected $name;
    protected $sort;
    protected $board_id;
    protected $pdo;

    const TABLE_NAME = 'list';

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
                ,`sort`
                ,`board_id`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function create($name, $boardId)
    {
        $sql = 'INSERT INTO ' . self::TABLE_NAME . '
                (`name`,board_id`, `sort`)
                VALUES
                (:name, :board_id, :sort)
        ';

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':board_id', $boardId, PDO::PARAM_INT);
        $pdoStatement->bindValue(':sort', 2, PDO::PARAM_INT);

        $result = $pdoStatement->execute();
        
        if (!$result) {
            return false;
        }

        return $this->pdo->lastInsertId();
        
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
      /**
     * Get the value of name
     */ 
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setSort(int $sort)
    {
        $this->sort = $sort;

        return $this;
    }
      /**
     * Get the value of name
     */ 
    public function getBoard_id()
    {
        return $this->board_id;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setBoard_id(int $board_id)
    {
        $this->board_id = $board_id;

        return $this;
    }
}
