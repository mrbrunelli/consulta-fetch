<?php

date_default_timezone_set('America/Sao_Paulo');

if (isset($_GET['acao']) && $_GET['acao'] == 'horas') {
    $horas = date('d/m/Y H:i:s');

    echo $horas;
}

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];

    echo "Conteúdo recebido por GET com sucesso! Seu nome é $nome";
} else if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    echo "Conteúdo recebido por POST com sucesso! Seu nome é $nome";
}
