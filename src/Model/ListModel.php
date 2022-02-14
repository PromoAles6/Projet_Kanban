<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ListModel
{
    protected $id;

    protected $name;

   protected $sort;

   protected $board_id;

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
    * Get the value of board_id
    */ 
   public function getBoard_id()
   {
      return $this->board_id;
   }

   /**
    * Set the value of board_id
    *
    * @return  self
    */ 
   public function setBoard_id($board_id)
   {
      $this->board_id = $board_id;

      return $this;
   }
}