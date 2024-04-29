// Función para validar el formulario de creación de rol
function validarFormularioCrearRol() {
    var nombre = document.getElementById("nombre").value;
    
    if (nombre.trim() === "") {
        alert("Por favor, ingresa un nombre para el rol.");
        return false;
    }
    
   
    
    return true;
}

// Función para validar el formulario de edición de rol
function validarFormularioEditarRol() {
    var nombre = document.getElementById("nombre").value;
    
    if (nombre.trim() === "") {
        alert("Por favor, ingresa un nombre para el rol.");
        return false;
    }
    
   
    
    return true;
}

// Función para confirmar la eliminación de un rol
function confirmarEliminarRol(id) {
    // Mostrar un cuadro de diálogo para confirmar la eliminación
    if (confirm("¿Estás seguro de que deseas eliminar este rol?")) {
        // Redireccionar a la página de eliminar con el ID del rol
        window.location.href = "eliminar.php?id=" + id;
    }
}

