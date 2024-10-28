<?php

use Core\Model;
class Test_model extends Model
{
    public function __construct() {
        parent::__construct();
    }
    public function select() {
        $sql = $this->connection->prepare("select * from users");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert (array $values) {
        $sql = $this->connection->prepare("insert into users()");

    }
    public function update () {
        
    }
    public function delete () {
        
    }
    public function select_by_id() {
        
    }
}