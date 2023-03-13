<?php

namespace Core;
use PDO;

class Database {

    protected $conn;
    protected $statement;

    function __construct($config, $user="root", $pwd='', $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC])
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->conn = new PDO($dsn, $user, $pwd, $options);
    }

    function query($query, $params=[])
    {
        $this->statement = $this->conn->prepare($query);
        $this->statement->execute($params);
        return $this;

    }

    function find()
    {
        $result=$this->statement->fetch();
        if (! $result) {
            abort();
        }
        return $result;
    }

    function findAll()
    {
        $result=$this->statement->fetchAll();
        // if (! $result) {
        //     abort();
        // }
        return $result;
    }


}