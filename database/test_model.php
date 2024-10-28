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
        $sql = $this->connection->prepare("insert into users(username, password, phone_number) values ( ?, ? ,?)");
        $sql->bindValue(1, $values[0]);
        $sql->bindValue(2, $values[1]);
        $sql->bindValue(3, $values[2]);
        $sql->execute();

        return ["status" => 200, "values"=>"user added!"];
    }
    public function update () {
        
    }
    public function delete () {
        
    }
    public function select_by_id() {
        
    }
}