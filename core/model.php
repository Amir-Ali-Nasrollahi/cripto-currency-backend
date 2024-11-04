<?php

namespace Core;

abstract class Model
{

    private string $dbname = 'cripto';
    private string $username = 'root';
    private string $password = 'amir13ali85';
    protected object $connection;
    public function __construct() {
        try {
            $this->connection = new \PDO("mysql:host=localhost;dbname=$this->dbname", $this->username, $this->password);
        } catch (\Exception $e) {
            echo $e->getMessage();    
        }
    }

    abstract public function select_by_id();
    abstract public function select();
    abstract public function insert(array $values);
    abstract public function update();
    abstract public function delete();
}
