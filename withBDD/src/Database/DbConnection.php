<?php

class DbConnection
{
    private static $instance = null;

    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=phpPOO", "test", "test");
        } catch (Exception $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}