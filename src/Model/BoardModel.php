<?php 

namespace App\Model;

use PDO;
use App\database\Database;

class BoardModel
{
    protected $id;

    protected $name;

    const TABLE_NAME = 'board';

    public function __construct()
    {
        $database = new Database;
        $this->pdo = $database->getPDO();
    }

    public function findALL()
    {
        $sql = 'SELECT
                    `id`
                    ,`name`
                    FROM ' . self::TABLE_NAME.'
                    ORDER BY `id` ASC;
                    ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        // dump($result);
        return $result;

    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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