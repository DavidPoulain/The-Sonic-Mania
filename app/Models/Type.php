<?php

class Type
{
    private $name;
    

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
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function find($id)
    {
        // notre requête SQL
        $sql = "SELECT * FROM `type` WHERE id = {$id}";

        // on récupère notre connexion à la BDD
        $pdo = Database::getPDO();

        // on récupère un pdo statement avec $pdo->query($sql)
        $pdoStmt = $pdo->query($sql);

        // pour récupérer un seul objet de type Product, on utilise 
        // la méthode fetchObject() de PDO !
        $result = $pdoStmt->fetchObject('Type');

        return $result;
    }
}