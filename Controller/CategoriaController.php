<?php

$r = array("resposta"=>"0");
if(!empty($_POST['acao'])){
    require_once("../Model/Categoria.php");
    $categoria = new Categoria();            
}

switch($_POST['acao']){
  case 'criar-categoria':
    $nomeCategoria = $_POST['nome'];
    $colorCategoria = $_POST['color'];
    $statusCategoria = $_POST['status'];

    $categoria->setStatus($statusCategoria);
    $categoria->setName($nomeCategoria);
    $categoria->setColor($colorCategoria);

  if ($categoria->create()) {
      $r = array("resposta" => "Sucesso");
    } else {
      $r = array("resposta" => "Erro");
  }
  case 'listar-categoria':
    $r = $categoria->Read();
    break;
  case 'carrega-dados-categoria':
    $id = $_POST['id'];
    $categoria->setId($id);
    $r = $categoria->dadosCategory();
    break;
    
   break;
}

echo json_encode($r);