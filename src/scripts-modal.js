// Obtener elementos del DOM
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");

// Función para abrir el modal
function openModal() {
  modal.style.display = "block";
}

// Función para cerrar el modal
function closeModal() {
  modal.style.display = "none";
}

// Asignar eventos a los botones
openModalBtn.addEventListener("click", openModal);
closeModalBtn.addEventListener("click", closeModal);

// Cerrar el modal si el usuario hace clic fuera del contenido del modal
window.addEventListener("click", function (event) {
  if (event.target == modal) {
    closeModal();
  }
});
