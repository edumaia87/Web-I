window.addEventListener('load', () => {
    fetch('estado.php')
    .then((response) => {
        return response.json()
    })
    .then((json) => {
        console.log(json)
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
})
