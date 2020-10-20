<?php


class DateBase
{
    protected $connect;

    //connect to bd
    public function __construct(){
        $this->connect = new PDO("mysql:dbname=storage_bd;host=localhost:3306", "root", "root");
    }

    //insert row
    public function insertRow($sql,$values = []){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($values);
    }

    public function query($stmt)  {
        return $this ->connect ->query($stmt);
    }

    public function select ($sql){
            $stmt = $this->connect->query($sql);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    public function executeAll ($sql, $options){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($options);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function execute ($sql, $options){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($options);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function executeAll1 ($sql){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function Insert($values = [])
    {
        $statement = $this->connect->prepare('INSERT INTO `product`(`imagename`,`user_namep`,`Name`,`Weight`,`Price`,`quantity`,`info`,`type_ofproduct`) VALUES (?,?,?,?,?,?,?,?)');
        $statement->execute($values);
    }
    public function InsertUser($values = [])
    {
        $statement = $this->connect->prepare('INSERT INTO `registration`(`full_name`,`email`,`Login`,`Password`) VALUES (?,?,?,?)');
        $statement->execute($values);
    }

    public function SelectImages(){
        $stmt = $this -> connect ->query('SELECT `name`,`user_name` FROM image');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function SelectProduct(){
        $stmt = $this -> connect ->query('SELECT `Name`,`Weight`,`Price`,`quantity`,`imagename`,`user_namep`,`ID`,`type_ofproduct` FROM 
        product');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($sql, $options = [])
    {
        $statement = $this->connect->prepare($sql);
        $statement->execute($options);
    }
    public function delete($sql, $options = [])
    {
        $statement = $this->connect->prepare($sql);
        $statement->execute($options);
    }
    public function SelectLogin(){
        $stmt = $this -> connect ->query('SELECT `Login`,`Password`,`full_name`,`email` FROM `registration`');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}