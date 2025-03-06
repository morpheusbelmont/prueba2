// Mostrar mensaje de éxito al enviar formulario
document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault();  // Evitar el envío por defecto del formulario
  alert('¡Tu mensaje ha sido enviado exitosamente!');
  this.reset();  // Resetear los campos del formulario
});
