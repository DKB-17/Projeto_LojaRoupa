<header>
        <nav class="navbar fixed-top bg-light text-dark">
            <div class="container-fluid">
                <img class="ms-3 mt-2" src="./img/logobeyou.png" alt="a" width = "150" height = "75">


                <div>

                    <button class="navbar-toggler ms-3" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Be You</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php">Contato</a>
                            </li>

                            <li>
                                <?php
                                    if(isset($_COOKIE['autorizado']) && $_COOKIE['autorizado'] == 'true'){
                                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./logout.php">Logout</a></li>';
                                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./PRODUTO/cadastroProduto.php">Cadastrar Produto</a></li>';
                                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./TAMANHO/cadastroTamanho.php">Cadastrar Tamanho</a></li>';
                                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./CATEGORIA/cadastroCategoria.php">Cadastrar Categoria</a></li>';
                            
                                    }else{
                                        echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="./login.php">Login</a></li>';
                                        
                                    }
                                ?>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Peças
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="masculino.php">Masculina</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="feminino.php">Feminina</a></li>
                                </ul>

                            </li>


                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>



    </header>