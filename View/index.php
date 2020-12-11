<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }

    .bloc_left_price {
      color: #c01508;
      text-align: center;
      font-weight: bold;
      font-size: 150%;
    }

    .category_block li:hover {
      background-color: #007bff;
    }

    .category_block li:hover a {
      color: #ffffff;
    }

    .category_block li a {
      color: #343a40;
    }

    .add_to_cart_block .price {
      color: #c01508;
      text-align: center;
      font-weight: bold;
      font-size: 200%;
      margin-bottom: 0;
    }

    .add_to_cart_block .price_discounted {
      color: #343a40;
      text-align: center;
      text-decoration: line-through;
      font-size: 140%;
    }

    .product_rassurance {
      padding: 10px;
      margin-top: 15px;
      background: #ffffff;
      border: 1px solid #6c757d;
      color: #6c757d;
    }

    .product_rassurance .list-inline {
      margin-bottom: 0;
      text-transform: uppercase;
      text-align: center;
    }

    .product_rassurance .list-inline li:hover {
      color: #343a40;
    }

    .reviews_product .fa-star {
      color: gold;
    }

    .pagination {
      margin-top: 20px;
    }

    footer {
      background: #343a40;
      padding: 40px;
    }

    footer a {
      color: #f8f9fa !important
    }
  </style>
  <style>
    #item-wrapper {
      width: 100%;

    }

    .ctrl-nav {

      padding: 5px;
      overflow: hidden;
    }

    .ctrl-nav a {
      font-family: arial;
      font-size: 13px;
      padding: 5px 10px;
      color: #000;
    }

    .ctrl-nav a#prev {
      float: left;
    }

    .ctrl-nav a#next {
      float: right;
    }
  </style>
</head>

<body>



  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">First Challenge</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
            <div class="input-group-append">
              <button type="button" class="btn btn-secondary btn-number">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </nav>
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">E-COMMERCE</h1>
      <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index.html">Home</a></li>

          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-3">
        <div class="card bg-light mb-3">
          <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categorias</div>
          <div id="item-wrapper">
            <ul class="items list-group category_block lista-categoria">

              <li class="category-1 list-group-item">item 2</li>
              <li class="category-1 list-group-item">item 3</li>
              <li class="category-1 list-group-item">item 4</li>
              <li class="category-1 list-group-item">item 5</li>
              <li class="category-1 list-group-item">item 6</li>
              <li class="category-2 list-group-item">item 7</li>
              <li class="category-2 list-group-item">item 8</li>
              <li class="category-2 list-group-item">item 9</li>
              <li class="category-2 list-group-item">item 10</li>
              <li class="category-2 list-group-item">item 11</li>
              <li class="category-2 list-group-item">item 12</li>
              <li class="category-1 list-group-item">item 13</li>
              <li class="category-1 list-group-item">item 14</li>
              <li class="category-2 list-group-item">item 15</li>
            </ul>
            <div class="ctrl-nav">
              <a href="#" class="ignorar">Previous</a><span id="pages"></span><a href="#" class="ignorar">Next</a>
            </div>
          </div>

        </div>
        <div class="card bg-light mb-3">
          <div class="card-header bg-success text-white text-uppercase">Último Produto</div>
          <div class="card-body">
            <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
            <h5 class="card-title">Product title</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <p class="bloc_left_price">99.00 $</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="row produto">


        </div>
        <div class="row">
          <div class="col-12">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-4 col-xl-3">
          <h5>Sobre</h5>
          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
          <p class="mb-0">
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
          <h5>Informações</h5>
          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
          <ul class="list-unstyled">
            <li><a href="">Link 1</a></li>
            <li><a href="">Link 2</a></li>
            <li><a href="">Link 3</a></li>
            <li><a href="">Link 4</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
          <h5>Outros Links</h5>
          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
          <ul class="list-unstyled">
            <li><a href="">Link 1</a></li>
            <li><a href="">Link 2</a></li>
            <li><a href="">Link 3</a></li>
            <li><a href="">Link 4</a></li>
          </ul>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3">
          <h5>Contato</h5>
          <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
          <ul class="list-unstyled">
            <li><i class="fa fa-home mr-2"></i> My company</li>
            <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
            <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
            <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
          </ul>
        </div>
        <div class="col-12 copyright mt-3">
          <p class="float-left">
            <a href="#">Top da Página</a>
          </p>
          <p class="text-right text-muted">Criado com <i class="fa fa-heart"></i> by <a href="#"><i>Unilever Team</i></a> | <span>v. 1.0</span></p>
        </div>
      </div>
    </div>
  </footer>


  <script src="src/js/jquery.js"></script>

  <script src="src/js/bootstrap.min.js"></script>
  <script>

  </script>

  <script>
    $(document).ready(function() {
      $.post("Controller/IndexController.php", {
        acao: "listar-categoria"
      }, function(response) {
        var categorias = JSON.parse(response);
        var lista_categoria = ''
        $.each(categorias, function(index, categoria) {

          lista_categoria += '<li class="' + categoria.id + ' list-group-item">' + categoria.name + '</li>'
        })
        $(".lista-categoria").empty();
        $(".lista-categoria").append(lista_categoria);

        makePages();
        $("div.ctrl-nav").on('click', 'a', function() {
          var action = $(this).text();
          if (action == 'Previous') {
            current--;
          } else if (action == 'Next') {
            current++;
          } else if (+action > 0) {
            current = +action;
          }
          if (current <= 1) {
            current = 1;
          } else if (current >= pages) {
            current = pages;
          }
          showPage(current);
        });
        $('div.filter').on('click', 'a', function() {
          var selector = $(this).attr('href').replace("#", ".");
          $("ul.items li").show().not(selector).hide();
          makePages();
        });
      })

      var card = ''

      $.post("Controller/IndexController.php", {
        acao: "listar-produto"
      }, function(response) {
        var produtos = JSON.parse(response);
        $.each(produtos, function(index, produto) {
          var caminho = produto.image.replace('../', '');
          var caminho = produto.image.replace('../', '');
          console.log(caminho);
          if (caminho == '') {
            caminho = 'https://dummyimage.com/600x400/55595c/fff'
          }
          console.log(produto.image)
          card += '<div class="col-12 col-md-6 col-lg-4">'
          card += '<div class="card ">'
          card += '<img class="card-img-top" src="' + caminho + '" alt="Card image cap" width="250px;">'
          card += '<hr class="solid">'
          card += '<div class="card-body">'
          card += '<h4 class="card-title"><a href="product.html" title="View Product">' + produto.name + '</a></h4>'
          card += '<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content. < /p> -->'
          card += '<div class="row">'
          card += '<div class="col">'
          card += '<p class="btn btn-danger btn-block">R$ ' + produto.price + '</p>'
          card += '</div>'
          // card += '<div class="col">'
          // card += '<a href="#" class="btn btn-success btn-block">Add to cart</a>'
          // card += '</div>'
          card += '</div>'
          card += '</div>'
          card += '</div>'
          card += '</div>'
          console.log(produto)
          $(".produto").empty()
          $(".produto").append(card)
        })


      })
    })




    $(document).on("click", ".ignorar", function(e) {
      e.preventDefault();
    });
    var itemsNumber = 4,
      $items, pages = 1,
      current = 1;

    function makePages() {
      $items = $("ul.items li:visible");
      pages = Math.ceil($items.length / itemsNumber);
      $("#pages").empty();
      for (var p = 1; p <= pages; p++) {
        $("#pages").append($('<a href="#" class="ignorar">' + p + '</a>'));
      }
      showPage(1);
    }

    function showPage(page) {
      $items.hide().slice((page - 1) * itemsNumber, page * itemsNumber).show();
      current = page;
      $("div.ctrl-nav a").show();
      if (current == 1) {
        $("div.ctrl-nav a:first").hide();
      } else if (current == pages) {
        $("div.ctrl-nav a:last").hide();
      }
    }
  </script>
</body>

</html>