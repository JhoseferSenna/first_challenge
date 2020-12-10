<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Olá</h1>


  <script>
    $.post('Controller/ProdutoController.php', {
      acao: registra
    }, function(retorno) {
      console.log(retorno)

      if (retorno.resposta == true) {
        mostraMensagemSucesso()
      }
    })
  </script>
</body>

</html>