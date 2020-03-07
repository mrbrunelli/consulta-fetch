const fnConsultarDados = () => {

    const nome = document.querySelector('#nome').value

    fetch('dados.php', {
            method: 'POST',
            body: {
                nome
            },
            headers: {
                'content-type': 'text/plain'
            }
        })
        .then(res => res.json())

}

fnExibirDados(dados) {
    document.querySelector('#mensagem').innerHTML = dados
}