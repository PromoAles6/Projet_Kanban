<?php

namespace App\Model;

use PDO;
use App\database\Database;

class CardModel
{
    protected $id;

    protected $contents;

    protected $name;

    protected $color;

    protected $sort;

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
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

   

    /**
     * Get the value of contents
     */ 
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set the value of contents
     *
     * @return  self
     */ 
    public function setContents($contents)
    {
        $this->contents = $contents;

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
     * Get the value of sort
     */ 
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set the value of sort
     *
     * @return  self
     */ 
    public function setSort($sort)
    {
        $this->sort = $sort;

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
