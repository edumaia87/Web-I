window.addEventListener('load', () => {
    document.querySelector('button').addEventListener('click', () => {
        const data = new FormData(document.forms[0])

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./validaCadastro.php', config)
        .then((response) => {
            return response.json()
        }) 
        .then((json) => {
            let message = document.querySelector('#message')
            message.innerText = json.message

            json.status == 'ok' ? message.style.backgroundColor = '#0F0' : message.style.backgroundColor = '#F00'
        })
    })

    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault()
    })
})