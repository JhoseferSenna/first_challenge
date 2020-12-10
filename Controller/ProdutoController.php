<?php
require_once("../Model/Produto.php");

$produto = new Produto();
$produto->setId(2);
var_dump($produto->Read());
