// Función para crear una nueva tarea
function createTask() {
    // Obtener los valores de los campos del formulario
    const description = document.getElementById('description').value;
    const dueDate = document.getElementById('dueDate').value;
    const assignedTo = document.getElementById('assignedTo').value;

    // Enviar los datos al servidor mediante AJAX
    fetch('controllers/tarea_controller.php?action=create', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ description, dueDate, assignedTo })
    })
    .then(response => response.json())
    .then(data => {
        // Manejar la respuesta del servidor
        if (data.success) {
            alert('Tarea creada exitosamente');
            // Limpiar los campos del formulario
            document.getElementById('description').value = '';
            document.getElementById('dueDate').value = '';
            document.getElementById('assignedTo').value = '';
        } else {
            alert('Error al crear la tarea');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al crear la tarea');
    });
}
