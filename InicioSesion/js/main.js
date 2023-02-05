const username = document.getElementById('usuario')
const password = document.getElementById('contraseña')
const button = document.getElementById('boton')

button.addEventListener('click', (e) => {
    e.preventDefault()
    const data = {
        username: usuario.value,
        password: contraseña.value
    }

    console.log(data)
})

