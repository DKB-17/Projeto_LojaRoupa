<?php

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Produto.php';

$bllProduto = new \BLL\Produto();
$lstProduto = $bllProduto->Select();

foreach($lstProduto as $produto){
    echo '<div class="col">
            <div class="card shadow-sm">
              <img src="'.$produto->getCaminhoImagem().'" class="card-img-top" width="100%" height="450">
              <div class="card-body">
                <p class="card-text">'.$produto->getDescricao().'</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-body-secondary">R$'.number_format($produto->getValorVenda(),2, ",",'').'</small>
                  <div class="btn-group">
                    <a href="viewproduto.php" class="btn btn-sm btn-outline-secondary">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
}

?>