let validInputLineup = false;
let validExistingLineup = false;
let fieldLineup = "";
let formacionText = "";
document.addEventListener("DOMContentLoaded", function () {
  const newLineup = document.getElementById("newSoccerField");
  //Guardar el estado inicial del campo de fútbol
  fieldLineup = newLineup.shadowRoot.querySelector(".players").innerHTML;

  selectInputKey();

  const lineupFormDB = document.getElementById("lineupArrayID");
  arrayLineup = lineupFormDB.innerText.split(",");

  for (let ind = 0; ind < arrayLineup.length; ind++) {
    get_lineup(arrayLineup[ind].trim(), ind);
    console.log("Obteniendo alineación:", arrayLineup[ind].trim());
  }
  //verifyInputValue();
  save_lineup();
});

function get_lineup(lineupForm, ind) {
  const data = { lineup_text: lineupForm };

  $.ajax({
    type: "GET",
    url: "/controller/lineup.php",
    data: data,
    success: function (data) {
      if (data.trim() === "" || data === "[]") {
        `<div class="team-result"><span>No se encontraron resultados</span></div>`;
        return;
      }

      /* Alineación Principal */
      const lineup = document.getElementById("lineupField" + ind);

      elemento = JSON.parse(data);

      //Seleccionar el campo de fútbol
      let playerContent = lineup.shadowRoot.querySelector(".players");
      //Agregar la alineación al campo de fútbol
      playerContent.innerHTML = elemento[0]["lineup_form"];
    },
  });
}

function get_lineup_id_edit(formationGet) {
  const data = { lineup_formation: formationGet };
  $.ajax({
    type: "GET",
    url: "/controller/lineup.php",
    data: data,
    success: function (infoDb) {
      if (infoDb.trim() === "" || infoDb === "[]") {
        return `<div class="team-result"><span>No se encontraron resultados</span></div>`;
      }

      /* Editar Alineación */
      const newLineup = document.getElementById("newSoccerField");

      elemento = JSON.parse(infoDb);

      //Agregar la alineación al campo de fútbol
      let playerContentNew = newLineup.shadowRoot.querySelector(".players");
      playerContentNew.innerHTML = elemento[0]["lineup_form"];

      //Asignar de nuevo los eventos
      eventDragandDrop();
    },
  });
}

function selectInputKey() {
  const input1 = document.getElementById("input1");
  const input2 = document.getElementById("input2");
  const input3 = document.getElementById("input3");
  const input4 = document.getElementById("input4");
  const input5 = document.getElementById("input5");
  document.addEventListener("keydown", (e) => {
    switch (e.key) {
      case "ArrowRight":
        if (document.activeElement === input1) {
          input2.focus();
        } else if (document.activeElement === input2) {
          input3.focus();
        } else if (document.activeElement === input3) {
          input4.focus();
        } else if (document.activeElement === input4) {
          input5.focus();
        }
        break;
      case "ArrowLeft":
        if (document.activeElement === input5) {
          input4.focus();
        } else if (document.activeElement === input4) {
          input3.focus();
        } else if (document.activeElement === input3) {
          input2.focus();
        } else if (document.activeElement === input2) {
          input1.focus();
        }
        break;
      default:
        break;
    }
  });
}

/*function verifyInputValue() {
  const input1 = document.getElementById("input1");
  const input2 = document.getElementById("input2");
  input2.disabled = true;
  const input3 = document.getElementById("input3");
  input3.disabled = true;
  const input4 = document.getElementById("input4");
  input4.disabled = true;
  const input5 = document.getElementById("input5");
  input5.disabled = true;

  const playersNumber = document.getElementById("countPlayer");
  const player = document.getElementById("player");
  const countTotal = document.getElementById("countTotal");

  var countPlayers = [0, 0, 0, 0, 0];
  document.addEventListener("input", function (e) {
    //Sumar los valores de los inputs
    if (e.target === input1) {
      //Validar que el input1 no sea mayor a 10
      countPlayers[0] = Number(input1.value);
      input2.disabled = false;

      //Color rojo
      playersNumber.style.backgroundColor = "#ffbbbb";
      player.style.backgroundColor = "#ffbbbb";
      countTotal.style.backgroundColor = "#ffbbbb";
    }

    //Validar el input2
    else if (e.target === input2) {
      countPlayers[1] = Number(input2.value);
      input3.disabled = false;
    }

    //Validar el input3
    else if (e.target === input3) {
      countPlayers[2] = Number(input3.value);
      input4.disabled = false;
    }

    //Validar el input4
    else if (e.target === input4) {
      countPlayers[3] = Number(input4.value);
      input5.disabled = false;
    }

    //Validar el input5
    else if (e.target === input5) {
      countPlayers[4] = Number(input5.value);
    }
    //Restar los valores de los inputs
    var total = countPlayers.reduce((a, b) => a + b, 0);

    playersNumber.innerText = total;

    //Validar el total de jugadores
    if (total === 10) {
      //Color verde
      playersNumber.style.backgroundColor = "#ccffc4";
      player.style.backgroundColor = "#ccffc4";
      countTotal.style.backgroundColor = "#ccffc4";

      validInputLineup = true;
      countPlayers.forEach((element) => {
        if (element != 0) formacionText += element + "-";
      });

      //Eliminar el último guion
      if (formacionText[formacionText.length - 1] == "-") {
        formacionText = formacionText.slice(0, -1);
      }

      console.log("Formación:", formacionText);
    } else {
      validInputLineup = false;

      //Color rojo
      playersNumber.style.backgroundColor = "#ffbbbb";
      player.style.backgroundColor = "#ffbbbb";
      countTotal.style.backgroundColor = "#ffbbbb";
    }
  });
}*/

function save_lineup() {
  const saveButton = document.getElementById("buttonSaveLineup");
  saveButton.addEventListener("click", function () {
    if (validInputLineup) {
      const componenteSoccerField = document.querySelector("new-soccer-field");
      const shadowRoot = componenteSoccerField.shadowRoot;
      const alineacion = shadowRoot.getElementById("alineacion");

      const data = {
        lineup_form: formacionText,
        lineup_component: alineacion.outerHTML,
      };
      $.ajax({
        type: "GET",
        url: "/controller/lineup.php",
        data: data,
        success: function (data) {
          if (data.trim() === "" || data === "[]") {
            return `<div class="team-result"><span>No se encontraron resultados</span></div>`;
          }
        },
        error: function (xhr, status, error) {
          console.log("Error al guardar la alineación:", error);
        },
      });
    } else {
      console.log(
        "La alineación no es válida. Asegúrate de que la suma de los jugadores sea 10."
      );
    }
  });
}
