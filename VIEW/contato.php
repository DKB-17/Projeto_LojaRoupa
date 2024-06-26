<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be You - Roupas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

</head>

<body>
    
    <?php include "./cabecalho.php"; ?>
    
<main class="container mt-5">

    <div class="row">
        <div class="col-md-6">
            <h1 class="my-5 ps-4 pt-4 ms-5">Contato</h1>
            <h2 class="pt-2 ps-4 ms-5">Descreva seu comentário</h2>
            <form class="needs-validation my-5 ps-4 ms-2" novalidate>
                <div class="row ps-5">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Primeiro nome</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="Nome" required>
                        <div class="valid-tooltip">OK!</div>
                        <div class="invalid-tooltip">Por favor, escolha um usuário válido e único.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip02">Sobrenome</label>
                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Sobrenome" required>
                        <div class="valid-tooltip">OK!</div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltipUsername">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="valid-tooltip">OK!</div>
                            <div class="invalid-tooltip">Por favor, escolha um email válido e único.</div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Comentário</label>
                        <textarea class="form-control" id="validationTooltip03" placeholder="Escreva seu comentário aqui" style="height:150px;"required></textarea>
                        <div class="valid-tooltip">OK!</div>
                        <div class="invalid-tooltip">Por favor, escreva seu comentário.</div>
                    </div>
                </div>
               
                <button class="btn btn-primary d-block mx-auto mt-3 ms-5" style="width: 90%;">Enviar</button>

            </form>
        </div>

        <div class="col-md-6 mt-5 b-8 d-flex align-items-center justify-content-center">
            <img src=".img/logocontato.jpeg" class="img-fluid rounded-4" alt="Imagem de Contato" onerror="this.onerror=null; this.src='img/logocontato.jpeg';">
        </div>
    </div>
</main>

    <?php include "./footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
