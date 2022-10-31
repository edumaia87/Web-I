window.addEventListener('load', () => {
    fetch('estado.php')
    .then((response) => {
        return response.json()
    })
    .then((json) => {
        let estados = document.querySelector('#estado')
        estados.innerHTML = ''
        for (let i = 0; i < json.length; i++) {
            let option = document.createElement('option')
            option.setAttribute('value', json[i].sigla)
            option.innerText = json[i].nome
            estados.append(option)
        }
    })

    document.querySelector('#estado').addEventListener('change', () => {
        const estado = document.querySelector('#estado').value
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' +estado+'/municipios')
        .then((response) => {
            return response.json()
        })
        .then((json) => {
            let cidades = document.querySelector('#cidade')

            cidades.innerHTML = ''
            for (let i = 0; i < json.length; i++) {
                let option = document.createElement('option')
                option.innerText = json[i].nome
                cidades.append(option)
            }
        })
    })

    document.querySelector('button').addEventListener('click', () => {
        const dados = new FormData(document.forms[0])
        // const dados = new FormData()
        // dados.append('nome', document.forms[0].nome)
        // dados.append('endereco', document.forms[0].endereco)
        // dados.append('estado', document.forms[0].estado)
        // dados.append('cidade', document.forms[0].cidade)

        // console.log(dados)
        const config = {
            method: 'POST',
            body: dados
        }

        fetch('./cadastroTeste.php', config)
        .then((response) => {
            return response.json()
        })
        .then((json) => {
            console.log(json) 
            let p = document.querySelector('p')
            p.innerText = json.mensagem

            json.status == 'ok' ? p.style.color = 'blue' : p.style.color = 'red'
        })
    })

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault()
    })
})
