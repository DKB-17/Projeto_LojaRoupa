<?php

include_once 'C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Categoria.php';

$bllCategoria = new \BLL\Categoria();

$lstCategoria = $bllCategoria->Select();


foreach($lstCategoria as $categoria){
    echo '
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoria" id="inlineRadio1" value="' . $categoria->getId() . '">
            <label class="form-check-label" for="inlineRadio1">' . $categoria->getDescricao() . '</label>
            </div> ';

}


?>