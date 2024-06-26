<?php

include_once "C:/xampp/htdocs/Projeto_LojaRoupa/BLL/Tamanho.php";

$bllTamanho = new \BLL\Tamanho();
$lstTamanho = $bllTamanho->Select();

foreach ($lstTamanho as $tam) {
    echo '
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="' . $tam->getId() . '">
            <label class="form-check-label" for="inlineRadio1">' . $tam->getDescricao() . '</label>
            </div> ';
}
