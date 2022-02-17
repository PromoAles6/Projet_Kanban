<?php

namespace App\Model;

use PDO;
use App\database\Database;

class CardModel
{
    protected $id;

    protected $name;

    protected $pdo;

    protected $sort;

    protected $content;

    protected $color;

    protected $list_id;
    
    const TABLE_NAME = 'card';

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
                ,`content`
                ,`color`
                ,`list_id`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function create($name, $listId)
    {
        $sql = 'INSERT INTO ' . self::TABLE_NAME . '
                (`name`, `list_id`, `sort`)
                VALUES
                (:name, :list_id, (
                    SELECT (IFNULL(MAX(sort), 0) + 1) FROM ' . self::TABLE_NAME . ' AS `card2` WHERE `list_id` = :list_id
                 ))
        ';

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':list_id', $listId, PDO::PARAM_INT);

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
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of list_id
     */ 
    public function getList_id()
    {
        return $this->list_id;
    }

    /**
     * Set the value of list_id
     *
     * @return  self
     */ 
    public function setList_id($list_id)
    {
        $this->list_id = $list_id;

        return $this;
    } 
}