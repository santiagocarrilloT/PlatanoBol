document.addEventListener("DOMContentLoaded", function () {
  eventDragandDrop();
});

function eventDragandDrop() {
  const soccerField = document.querySelector("new-soccer-field");
  const shadowRoot = soccerField.shadowRoot;
  const players = shadowRoot.querySelectorAll("soccer-field-player");
  getPlayer(players);
  //Selección por atributo de dropzone
  const dropzones = shadowRoot.querySelectorAll("[dropzone]");

  dropzones.forEach((dropzone) => {
    // Se previene el comportamiento por defecto para permitir el drop
    dropzone.addEventListener("dragover", (e) => {
      e.preventDefault();
    });
    // Cuando se suelta el elemento, se obtiene el id del jugador y se añade al dropzone
    dropzone.addEventListener("drop", (e) => {
      const idPlayer = e.dataTransfer.getData("Text");
      const element = shadowRoot.getElementById(idPlayer);
      e.target.appendChild(element);
    });
  });
}

function getPlayer(players) {
  players.forEach((jugador) => {
    jugador.addEventListener("dragstart", (e) => {
      e.dataTransfer.setData("Text", e.target.id);
    });
  });
}
