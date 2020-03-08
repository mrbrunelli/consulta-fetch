# Realizar consultas ao backend utilizando o fetch
Hoje não há mais necessidade de se usar o ajax do jquery, é possível fazer o mesmo trabalho usando o fetch, que é nativo do javascript, e contar com as vantagens das promises.

## Exemplo de uso com o método GET
Ao utilizar o método **GET** eu preciso passar os dados por url.
```javascript
fetch(`consulta.php?acao=${dados}) // Passar conteúdo por url
    .then(res => res.text())
    .then(res => console.log(res))
    catch(error => console.error(error))
``` 

## Exemplo de uso com o método POST
Ao utilizar o método **POST** eu preciso de um pouco mais de código.
```javascript
let dados = 'conteudo=' + conteudo

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
