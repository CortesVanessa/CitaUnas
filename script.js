window.addEventListener('DOMContentLoaded', (event) => {
  cargarCitas(); // Cargar las citas existentes al cargar la página
});

document.getElementById('citaForm').addEventListener('submit', function(e) {
  e.preventDefault();

  // Obtener los valores del formulario
  var nombre = document.getElementById('nombre').value;
  var fecha = document.getElementById('fecha').value;
  var hora = document.getElementById('hora').value;

  // Crear objeto de cita
  var cita = {
    nombre: nombre,
    fecha: fecha,
    hora: hora
  };

  // Guardar la cita en la base de datos
  guardarCita(cita);

  // Limpiar el formulario
  document.getElementById('citaForm').reset();
});

function guardarCita(cita) {
  // Aquí debes implementar la lógica para guardar la cita en la base de datos
  // Puedes usar AJAX, Fetch API o cualquier otro método para enviar la información al servidor
  // El código aquí es solo un ejemplo básico
  
  // Ejemplo de cómo guardar la cita usando la API Fetch
  fetch('/guardar-cita', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(cita)
  })
  .then(function(response) {
    if (response.ok) {
      cargarCitas(); // Actualizar las citas mostradas
      console.log('Cita guardada con éxito');
    } else {
      console.log('Error al guardar la cita');
    }
  })
  .catch(function(error) {
    console.log('Error en la solicitud')
    )
  }
}

