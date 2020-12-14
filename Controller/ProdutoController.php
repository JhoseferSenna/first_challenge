<?php
$r = array("resposta" => "0");
if (!empty($_POST['acao'])) {
  require_once('../model/Produto.php');
  $produto = new Produto();
}


if (!empty($_FILES)) {
  /* Peggar nome do arquivo */
  $nomeProduto = $_POST['nome'];
  $path = $_FILES['imagem']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);
  $filename = $nomeProduto;
  /* Local do arquivo */
  $location = "../src/imagens/" . $filename . '.' . $ext;
  $uploadOk = 1;

  if ($uploadOk == 0) {
    $r = array("resposta" => "Erro");
  } else {
    /* Upload file */
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $location)) {
      $r = array("resposta" => "Sucesso Imagem");
    }
  }
}

switch ($_POST['acao']) {
  case 'cadastrar-produto':
    if (!isset($location)) {
      $location = '';
    }
    $nomeProduto = $_POST['nome'];
    $precoProduto = $_POST['preco'];
    $categoriaProduto = $_POST['categoria'];
    $statusProduto = $_POST['status'];

    $produto->setName($nomeProduto);
    $produto->setCategoryId($categoriaProduto);
    $produto->setStatus($statusProduto);
    $produto->setPrice($precoProduto);
    $produto->setImage($location);
    if ($produto->create()) {
      $r = array("resposta" => "Sucesso");
    } else {
      $r = array("resposta" => "Erro");
    }
    break;
  case 'listar-produto':
    $r = $produto->listaProdutos();
    break;
  case 'carrega-dados-produto':
    $id = $_POST['id'];
    $produto->setId($id);
    $r = $produto->dadosProduto();
    break;
  case 'editar-produto':
    $id = $_POST['id'];
    $nomeProduto = $_POST['nomeProduto'];
    $precoProduto = $_POST['precoProduto'];
    $categoriaProduto = $_POST['categoriaProduto'];
    $statusProduto = $_POST['statusProduto'];
    $imagemProduto = '../' . $_POST['imagemProduto'];
    $produto->setId($id);
    $produto->setName($nomeProduto);
    $produto->setCategoryId($categoriaProduto);
    $produto->setStatus($statusProduto);
    $produto->setPrice($precoProduto);
    $produto->setImage($imagemProduto);
    $r = $produto->Update();
    break;
  case 'deletar-produto':
    $id = $_POST['id'];
    $produto->setId($id);
    $r = $produto->Delete();
    break;
}
echo json_encode($r);
