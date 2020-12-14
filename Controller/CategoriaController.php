<?php

$r = array("resposta" => "0");
if (!empty($_POST['acao'])) {
  require_once("../Model/Categoria.php");
  $categoria = new Categoria();
}

switch ($_POST['acao']) {
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
    $r = $categoria->dadosCategoria();
    break;
  case 'deletar-categoria':
    $id = $_POST['id'];
    $categoria->setId($id);
    $r = $categoria->Delete();
    break;

  case 'lista-cor':
    $r = $categoria->listaCor();
    break;
  case 'editar-categoria':
    $id = $_POST['id'];
    $nome = $_POST['nomeCategoria'];
    $status = $_POST['statusCategoria'];
    $cor = $_POST['colorCategoria'];
    $categoria->setId($id);
    $categoria->setName($nome);
    $categoria->setStatus($status);
    $categoria->setColor($cor);
    $r = $categoria->Update();

    break;
}

echo json_encode($r);
