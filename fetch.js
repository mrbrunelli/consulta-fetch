fnConsultarDadosPost = () => {
    const nome = 'nome=' + document.querySelector('#nome').value

    fetch('dados.php', {
        method: 'POST',
        body: nome,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
        .then(res => res.text())
        .then(res => fnExibirResultado(res))
}

fnConsultarDadosGet = () => {
    const nome = document.querySelector('#nome').value

    fetch(`dados.php?nome=${nome}`)
        .then(res => res.text())
        .then(res => fnExibirResultado(res))
}

fnExibirResultado = (dados) => {
    document.querySelector('#mensagem').innerHTML = dados
}

window.onload = () => {
    fnAtualizarHoras()
}

setInterval(() => {
    fnAtualizarHoras()
}, 1000)

fnAtualizarHoras = () => {
    const horas = document.querySelector('#horas')

    fetch(`dados.php?acao=horas`)
        .then(res => res.text())
        .then(res => {
            horas.innerHTML = res
        })
}
