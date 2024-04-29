// Función para crear un nuevo usuario
function createUser() {
    // Obtener los valores de los campos del formulario
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const roleId = document.getElementById('roleId').value;

    // Enviar los datos al servidor mediante AJAX
    fetch('controllers/usuario_controller.php?action=create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name, email, password, roleId })
    })
    .then(response => response.json())
    .then(data => {
        // Manejar la respuesta del servidor
        if (data.success) {
            alert('Usuario creado exitosamente');
            // Limpiar los campos del formulario
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
            document.getElementById('roleId').value = '';
        } else {
            alert('Error al crear el usuario');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al crear el usuario');
    });
}
