<!DOCTYPE html>
<html lang="pt-br">

<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Be You - Roupas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">



  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">

</head>

<body>


  <?php
  include "./cabecalho.php";
  ?>


  <main>


    <?php
    include "./carrosel.php";
    ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Tamanhos</h3>
          <div class="flex-wrap">
            <?php
            include "./TAMANHO/lstTamanho.php";
            ?>
          </div>
        </div>
        <div class="col">
          <h3>Categoria</h3>
          <div class="flex-wrap">
            <?php
            include "./CATEGORIA/lstCategoria.php";
            ?>
          </div>
        </div>

      </div>
    </div>


    <div class="album py-5">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          include "./PRODUTO/lstProdutos.php";
          ?>
        </div>
      </div>
    </div>

  </main>






  <?php
  include "./footer.php";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

</body>


</html>