// Abrir y cerrar el modal de nuevo alineamiento
const modal = document.getElementById("modalNewLineup");
const openModal = document.getElementById("openModalBtn");
const closeModal = document.getElementById("closeModalBtn");

openModal.addEventListener("click", function () {
  modal.style.display = "flex";
});

closeModal.addEventListener("click", function () {
  modal.style.display = "none";
});
