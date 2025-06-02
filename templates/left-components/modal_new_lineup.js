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

/* Resetear campos en el modal */
function resetLineup() {
  // Resetear los inputs
  for (let i = 1; i <= 5; i++) {
    const input = document.getElementById("input" + i);
    input.value = "";
    input.disabled = false;
  }

  formacionText = "";

  //Resetear el campo de formación
  const newLineup = document.getElementById("newSoccerField");
  let playerContentNew = newLineup.shadowRoot.querySelector(".players");
  playerContentNew.innerHTML = fieldLineup;

  //Validar que el contador de jugadores sea 0
  const countPlayers = document.getElementById("countPlayer");
  countPlayers.innerText = 0;
  validInputLineup = false;

  //Color gris en contador de jugadores
  const playersNumber = document.getElementById("countPlayer");
  const player = document.getElementById("player");
  const countTotal = document.getElementById("countTotal");

  playersNumber.style.backgroundColor = "#acacac";
  player.style.backgroundColor = "#acacac";
  countTotal.style.backgroundColor = "#acacac";
}

/* Agregar información de alineaciones guardadas en BD  */
function formationInputsAdd(lineup_text) {
  modal.style.display = "flex";

  const countPlayers = document.getElementById("countPlayer");

  const playersNumber = document.getElementById("countPlayer");
  const player = document.getElementById("player");
  const countTotal = document.getElementById("countTotal");
  /* Agregar la formación (4-4-2, 4-3-3, etc)*/
  for (let index = 0; index < lineup_text.length; index++) {
    document.getElementById("input" + (index + 1)).value = lineup_text[index];
    document.getElementById("input" + (index + 1)).disabled = true;

    if (index >= lineup_text.length - 1) {
      formacionText += lineup_text[index];
    } else {
      formacionText += lineup_text[index] + "-";
    }
  }
  //Validar que el input1 no sea mayor a 10
  countPlayers.innerText = 10;
  validInputLineup = true;

  //Validar que sea un edit
  validExistingLineup = true;

  //Color verde
  playersNumber.style.backgroundColor = "#ccffc4";
  player.style.backgroundColor = "#ccffc4";
  countTotal.style.backgroundColor = "#ccffc4";

  get_lineup_id_edit(formacionText);
}
