<?php

class Categoria{

private $id;
private $status;
private $name;
private $color;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function Create()
    {
        try {
        include('../Database.php');
        $queryCreate = "INSERT INTO category (id, status, name, color) VALUES (?,?,?,?)";
        $stmtCreate = $conn->prepare($queryCreate);
        $stmtCreate->bindParam(1, $this->id);
        $stmtCreate->bindParam(2, $this->status);
        $stmtCreate->bindParam(3, $this->name);
        $stmtCreate->bindParam(4, $this->color);

        $dados = $stmtCreate->execute();
        return $dados;
        } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
        }
    }

    public function Read()
    {
        try {
            include('../Database.php');
            $queryRead = "SELECT * FROM category";
            $stmtRead = $conn->prepare($queryRead);
            $stmtRead->execute();
            $dados = $stmtRead->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        } catch (PDOException $e) {
            return "Erro: " . $e->getMessage();
        }
    }

    public function Delete()
    {
        try {
        include('../Database.php');
        $queryDelete = "DELETE FROM category WHERE id = ?";
        $stmtDelete = $conn->prepare($queryDelete);
        $stmtDelete->bindParam(1, $this->id);
        $dados = $stmtDelete->execute();
        return $dados;
        } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
        }
    }


}



?>