<?php

var_dump($_POST);

if ($_GET) {
    $nome = $_GET['nome'];

    echo "Conteúdo recebido por GET com sucesso! Seu nome é $nome";
} else if ($_POST) {
    $nome = $_POST['nome'];

    echo "Conteúdo recebido por POST com sucesso! Seu nome é $nome";
}
