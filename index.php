<?php
require_once('route.php');

function home()
{
    include("View/index.php");
}

function criarProduto()
{
    include("View/produto/criar.html");
}

function listarProduto()
{
    include("View/produto/listar.html");
}

function carregarProduto()
{
    die('Page not found. Please try some different url.');
}

function editarProduto()
{
    die('Page not found. Please try some different url.');
}

function deletarProduto()
{
    die('Page not found. Please try some different url.');
}

function criarCategoria()
{
    echo 'This is contact us page. Contact Us template in HTML.';
}

function page404()
{
    echo 'This is contact us page. Contact Us template in HTML.';
}




//If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
if ($request == 'home' or $request == '')
    home();
//If url is http://localhost/route/about-us
else if ($request == 'criar-produto')
    criarProduto();
else if ($request == 'listar-produto')
    listarProduto();
//If url is http://localhost/route/contact-us
else if ($request == 'criar-categoria')
    criarCategoria();

//If user entered something else
else
    page404();
