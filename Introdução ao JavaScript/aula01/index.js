window.addEventListener('load', () => {
    document.querySelector('#btn-verde').addEventListener('click', () => {
        document.querySelector('#exemplo').classList.remove('vermelho')
        document.querySelector('#exemplo').classList.remove('azul')
        document.querySelector('#exemplo').classList.add('verde')
    })
    document.querySelector('#btn-vermelho').addEventListener('click', () => {
        document.querySelector('#exemplo').classList.remove('verde')
        document.querySelector('#exemplo').classList.remove('azul')
        document.querySelector('#exemplo').classList.add('vermelho')
    })
    document.querySelector('#btn-azul').addEventListener('click', () => {
        document.querySelector('#exemplo').classList.remove('vermelho')
        document.querySelector('#exemplo').classList.remove('verde')
        document.querySelector('#exemplo').classList.add('azul')
    })
    document.querySelector('#btn-acr').addEventListener('click', () => {
        let p = document.createElement('p')
        p.innerText = 'Teste '
        document.querySelector('.div_1').append(p)
    })
})