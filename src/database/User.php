<?php
namespace App\database;

use App\database\Database;



Class User
{
    private $pdo;
    public function __construct()
    {
        $connection = new Database;
        $this->pdo = $connection->getPDO();
    }
    
    function addUser($email,$password){
        $requete = $this->pdo->query("INSERT INTO user (email,password)
        VALUES ( 
            '$email',
            '$password')
            ");
        }  
    function deleteUser($email,$password)
    {
       $requete = $this->pdo->query("DELETE FROM user WHERE email=$mail, password=$password");
    }
    function updateUser($password)
    {
        $requete = $this->pdo->query("UPDATE FROM user WHERE password=$password");
    }
    }