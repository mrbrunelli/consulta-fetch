// const fnConsultarDados = () => {

//     const nome = document.querySelector('#nome').value

//     fetch('dados.php', {
//         method: 'POST',
//         body: JSON.stringify({
//             "nome": nome
//         }),
//         mode: 'cors'
//     })
//         .then(res => res.json())
//         .then(res => console.log(res))

// }


fnConsultarDados = () => {
    const nome = document.querySelector('#nome').value

    fetch(`dados.php?nome=${nome}`)
        .then(res => res.text())
        .then(res => fnExibirResultado(res))
}

fnExibirResultado = (dados) => {
    document.querySelector('#mensagem').innerHTML = dados
}