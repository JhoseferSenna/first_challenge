<?php
require_once("../Model/Produto.php");
require_once("../Model/Categoria.php");
$produto = new Produto();
$categoria = new Categoria();

$acao = $_POST['acao'];

switch ($acao) {
  case 'listar-produto':
    $r =  $produto->Read();
    break;

  case 'listar-categoria':
    $r =  $categoria->Read();
    break;
  default:
    # code...
    break;
}

echo json_encode($r);
