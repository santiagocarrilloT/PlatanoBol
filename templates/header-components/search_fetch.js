function searchTeamsLeague(busqueda, url) {
  const searchComponenteResult = document.getElementById("teams-result");

  const parameter = { buscar: busqueda };
  $.ajax({
    type: "POST",
    url: url,
    data: parameter,
    success: function (data) {
      if (data.trim() === "" || data === "[]") {
        searchComponenteResult.innerHTML = `<div class="team-result"><span>No se encontraron resultados</span></div>`;
        return;
      }

      //Split para separar el tipo de busqueda y el array de resultados
      teamSplit = data.split("#", 2);

      //Llamamos a la funcion para ver el tipo de busqueda
      viewSearchType(teamSplit[0]);

      const htmlData = viewTeams(JSON.parse(teamSplit[1]));

      //Agregamos el html al contenedor
      searchComponenteResult.innerHTML = htmlData;
    },
    error: function (error) {
      console.error("Error en la solicitud:", error); // Manejo de errores
    },
  });
}

function viewSearchType(searchType) {
  switch (searchType) {
    case "n":
      document.getElementById("n").style.backgroundColor = "#f2f2f2";
      document.getElementById("n").style.color = "#000";

      document.getElementById("c").style.backgroundColor = "#000";
      document.getElementById("c").style.color = "#fff";

      document.getElementById("e").style.backgroundColor = "#000";
      document.getElementById("e").style.color = "#fff";
      break;
    case "c":
      document.getElementById("c").style.backgroundColor = "#f2f2f2";
      document.getElementById("c").style.color = "#000";

      document.getElementById("n").style.backgroundColor = "#000";
      document.getElementById("n").style.color = "#fff";

      document.getElementById("e").style.backgroundColor = "#000";
      document.getElementById("e").style.color = "#fff";
      break;
    case "e":
      document.getElementById("e").style.backgroundColor = "#f2f2f2";
      document.getElementById("e").style.color = "#000";

      document.getElementById("c").style.backgroundColor = "#000";
      document.getElementById("c").style.color = "#fff";

      document.getElementById("n").style.backgroundColor = "#000";
      document.getElementById("n").style.color = "#fff";
      break;
    default:
      break;
  }
}

function viewTeams(team) {
  //Variable para almacenar el html
  let htmlData = "";

  //Si el array no contiene respuestas
  if (team.length === 0) {
    htmlData += `<div class="team-result"><span>No se encontraron resultados</span></div>`;
    return;
  }
  //Si el array contiene respuestas
  else {
    team.forEach((element) => {
      htmlData += `<div class="team-result" onclick="searchTeam('${element.team_id}', '${element.team_name}');">
                <img src="${element.team_logo}" alt="${element.team_name}" style="width: 30px; height: 30px;">
                <div class="componentes-team-results">
                    <div class="team-result-data">
                        <span>${element.team_name}</span>
                        <span>${element.team_city}</span>
                    </div>
                    <div class="team-result-founded">
                        <span>${element.founded}</span>
                    </div>
                </div>
              </div>`;
    });
  }

  return htmlData; // Devolvemos el html generado
}

function searchTeam(teamCode, teamName) {
  const parameter = { code: teamCode, name: teamName };
  //Ubicación del archivo
  const location = document.location.href.toString();

  //Ruta relativa en caso de que el archivo se encuentre en templates
  if (location.includes("templates")) {
    $.ajax({
      type: "GET",
      url: "../../index.php",
      data: parameter,
      success: function () {
        window.location.reload(); //Recargamos la pagina para que se vea el equipo seleccionado
      },
      error: function (error) {
        console.error("Error en la solicitud:", error); // Manejo de errores
      },
    });
    return;
  }

  //Ruta absoluta en caso de que el archivo se encuentre en assets
  else {
    $.ajax({
      type: "GET",
      url: "index.php",
      data: parameter,
      success: function () {
        //Recuperamos el elemento del DOM
        document.getElementById("results-search").innerHTML = "";
        window.location.reload(); //Recargamos la pagina para que se vea el equipo seleccionado
      },
      error: function (error) {
        console.error("Error en la solicitud:", error); // Manejo de errores
      },
    });
  }
}

//Función para buscar equipos por fixture
