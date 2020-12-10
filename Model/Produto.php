<?php

class Produto
{
  private $id;
  private $status;
  private $categoryId;
  private $name;
  private $price;
  private $image;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getCategoryId()
  {
    return $this->categoryId;
  }

  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image)
  {
    $this->image = $image;
  }

  public function Create()
  {
    try {
      include('../Database.php');
      $queryCreate = "INSERT INTO product (id, status, category_id, name, price, image) VALUES (?,?,?,?,?,?)";
      $stmtCreate = $conn->prepare($queryCreate);
      $stmtCreate->bindParam(1, $this->id);
      $stmtCreate->bindParam(2, $this->status);
      $stmtCreate->bindParam(3, $this->categoryId);
      $stmtCreate->bindParam(4, $this->name);
      $stmtCreate->bindParam(5, $this->price);
      $stmtCreate->bindParam(6, $this->image);
      $dados = $stmtCreate->execute();
      return $dados;
    } catch (PDOException $e) {
      return "Erro: " . $e->getMessage();
    }
  }

  public function Read()
  {
  }

  public function Update()
  {
  }

  public function Delete()
  {
  }
}
