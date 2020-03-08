# Realizar consultas ao backend utilizando o fetch
Hoje não há mais necessidade de se usar o ajax do jquery, é possível fazer o mesmo trabalho usando o fetch, que é nativo do javascript. E podemos contar com as vantagens das promises.

## Exemplo de uso com o método GET
Ao utilizar o método **GET** eu preciso passar os dados por url.
```javascript
fetch(`consulta.php?acao=${dados}`) // Passar conteúdo por url
    .then(res => res.text())
    .then(res => console.log(res))
    catch(error => console.error(error))
``` 

## Exemplo de uso com o método POST
Ao utilizar o método **POST** eu preciso de um pouco mais de código.
```javascript
let dados = 'conteudo=' + conteudo // Concatenar a chave com o valor

fetch('consulta.php', {
    method: 'POST',
    body: dados,
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    }
})
.then(res => res.text())
.then(res => console.log(res))
.catch(error => console.error(error))
``` 

## Agora eu preciso receber esses valores no meu backend
Estou utilizando o **PHP** para receber e tratar esses conteúdos enviados.
```php 
<?php

if ($_GET) { // Caso seja GET ele cairá aqui
    $nome = $_GET['nome'];

    echo "Conteúdo recebido por GET com sucesso! Seu nome é $nome";
} else if ($_POST) { // Caso seja POST ele cairá aqui
    $nome = $_POST['nome'];

    echo "Conteúdo recebido por POST com sucesso! Seu nome é $nome";
}
```

## Esse resultado retornará ao frontend da seguinte forma
```javascript
.then(resultado => resultado.text()) // Converter para texto. Caso fosse um JSON, usariamos resultado.json()
.then(dados => console.log(dados)) // Aqui ele recupera o resultado de cima, agora eu posso usar esses dados da maneira que eu quiser.
.catch(erro => console.error(erro)) // Caso dê erro na requisição, ele cairá aqui, e você saberá, legal né?
``` 

## Espero que eu tenha te ajudado!
*Fique de olho aqui no meu perfil, sempre irei postar alguns tutoriais com a tag #tutorial. Até a próxima!*

