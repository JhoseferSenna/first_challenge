<?php
$r = array("resposta" => "0");
if (!empty($_POST['acao'])) {
  require_once('../model/Produto.php');
  $produto = new Produto();
}


if (!empty($_FILES)) {
  /* Getting file name */
  $nomeProduto = $_POST['nome'];
  $path = $_FILES['imagem']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);
  $filename = $nomeProduto;
  /* Location */
  $location = "../src/imagens/" . $filename . '.' . $ext;
  $uploadOk = 1;

  if ($uploadOk == 0) {
    $r = array("resposta" => "Erro");
  } else {
    /* Upload file */
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $location)) {
      $r = array("resposta" => "Sucesso");
    }
  }
}

switch ($_POST['acao']) {
  case 'cadastrar-produto':
    $nomeProduto = $_POST['nome'];
    $precoProtudo = $_POST['preco'];
    $categoriaProduto = $_POST['categoria'];
    $statusProduto = $_POST['status'];

    $produto->setName($nomeProduto);
    $produto->setCategoryId($categoriaProduto);
    $produto->setStatus($statusProduto);
    $produto->setPrice($precoProtudo);
    $produto->setImage($location);
    if ($produto->create()) {
      $r = array("resposta" => "Sucesso");
    } else {
      $r = array("resposta" => "Erro");
    }
    break;
}
echo json_encode($r);
