<?php

class Character extends CoreModel
{   
    private $name;
    private $description;
    private $picture;
    private $type_id;

    

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

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM `character`";
        
        $pdo = Database::getPDO();

        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);

        // On récupère nos résultats sous forme d'objets de type classe 'Product'
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Character');

        // On retourne les résultats
        return $results;
    }
    
    public function find(int $id)
    {
        // La requête
        $sql = "SELECT * FROM `character` WHERE id={$id}";

        // On récupère PDO via Database
        $pdo = Database::getPDO();

        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);

        // On récupère nos résultats sous forme d'objet de type classe 'Product'
        $result = $pdoStatement->fetchObject('Character');

        // On retourne le résultat
        return $result;
    }

    public function findName()
    {
        // La requête
        $sql = "SELECT `name` FROM `character`";

        // On récupère PDO via Database
        $pdo = Database::getPDO();

        // On exécute la requête via PDO
        $pdoStatement = $pdo->query($sql);

        // On récupère nos résultats sous forme d'objet de type classe 'Product'
        $result = $pdoStatement->fetchObject('Character');

        // On retourne le résultat
        return $result;
    }

}