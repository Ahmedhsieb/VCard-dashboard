<?php

//$pdo = require "connect.php";
use Ahmed\Vcard\core\Database\contract\IDatabase;

class dbPDO implements IDatabase
{
    public $pdo;
    public $query;
    public $sql;

    public function __construct()
    {
        $this->pdo = require "connect.php";
    }

    public function select($table, $selection)
    {
        $this->sql = "SELECT $selection FROM `$table`";
        return $this;
    }

    public function getAll()
    {
        $this->query();
        $data = $this->query->fetchAll(PDO::FETCH_ASSOC);
        return (empty($data)) ? 0 : $data;
    }


    public function getRow()
    {
        $this->query();
        $data = $this->query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getGroupRow()
    {
        $this->query();
        $data = $this->query->fetch(PDO::FETCH_GROUP);
        return $data;
    }

    public function getGroupAll()
    {
        $this->query();
        $data = $this->query->fetchAll(PDO::FETCH_GROUP);
        return $data;
    }

    public function where($column, $compair, $value)
    {
        $this->sql .= " WHERE `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column, $compair, $value)
    {
        $this->sql .= " AND  `$column` $compair '$value'";
        return $this;
    }

    public function orWhere($column, $compair, $value)
    {
        $this->sql .= " OR  `$column` $compair '$value'";
        return $this;
    }

    public function join($tablename, $column1, $column2)
    {
        $this->sql .= " INNER JOIN $tablename ON $column1 = $column2";
//         echo $this->sql;die;
        return $this;
    }

    public function selectWithGroup($table, $columns, $group)
    {
        $this->sql = "SELECT $group, $columns FROM `$table`";
        return $this;
    }

    public function insert($table,$data){

        $row = $this->preparData($data);
        $this->sql = "INSERT INTO `$table` SET $row";
//         echo $this->sql;die;
        return $this;
    }

    public function update($table,$data){

        $row = $this->preparData($data);
        $this->sql = "UPDATE `$table` SET $row";
        return $this;
    }

    public function delete($table){
        $this->sql = "DELETE FROM `$table` ";
        return $this;
    }

    public function preparData($data){
        // print_r($data);die;
        $row = "";
        foreach($data as $key => $value){
            $row .= " `$key` = ".((gettype($value) == 'string') ? "'$value'" : "$value").",";
        }
        $row = rtrim($row,",");
        // echo $row;die;
        return  $row;
    }

    public function query()
    {
        $this->query = $this->pdo->query($this->sql);
//        echo $this->query;die;
    }

    public function excu(){
        $this->query();
        if($this->query->rowCount() > 0){
            return true;
        }else{
            return $this->showError();
        }
    }

    public function showError(){
        //   return  mysqli_error($this->connnection);
        $error_code = $this->pdo->errorCode();
        $error_info = $this->pdo->errorInfo();
//        foreach($errors as $error){
        echo "<h2 style='color:red'>Error</h2> : ";
        print_r($error_info);
        echo "<br> <h3 style='color:red'>Error Code : </h3>";
        print_r($error_code);
//        }
    }
}
