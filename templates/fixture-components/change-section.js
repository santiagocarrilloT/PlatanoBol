let indButtonActive;
document.addEventListener("DOMContentLoaded", function () {
  let sizeFixture = 0;

  sectionFixture(fixtureFilter);
  activeButtonSection(fixtureFilter);

  arrowsSection();
});

function sectionFixture(fixtureData) {
  const sectionChange = document.querySelector("#sectionFixture");
  sizeFixture = Math.ceil(fixtureData.length / 10);
  indButtonActive = 1; // Inicializar el índice del botón activo
  let html = "";

  if (sizeFixture <= 3) {
    for (let i = 1; i <= sizeFixture; i++) {
      html += `<button id="btnSection${i}" class="button-number-fixture">${i}</button>`;
    }
  } else {
    for (let i = 1; i <= sizeFixture; i++) {
      html += `<button id="btnSection${i}" class="button-number-fixture">${i}</button>`;
    }
  }

  // Añadir el HTML a la sección
  sectionChange.innerHTML = html;

  // Activar el primer botón para cargar la primera sección
  const firstButton = document.getElementById("btnSection1");
  firstButton.classList.add("active");
  getContentSection(firstButton.id, fixtureData);
}

function activeButtonSection(fixtureData) {
  const sectionChange = document.querySelector("#sectionFixture");
  const buttons = sectionChange.querySelectorAll(".button-number-fixture");

  sectionChange.addEventListener("click", function (e) {
    if (!e.target.classList.contains("button-number-fixture")) {
      return;
    }

    getContentSection(e.target.id, fixtureData);

    e.target.classList.add("active");
    indButtonActive = Number(e.target.id.slice(10, 11));

    buttons.forEach((button) => {
      if (button !== e.target) {
        button.classList.remove("active");
      }
    });
  });
}

function getContentSection(idSection, fixtureData) {
  //Elegir el indice de la sección a partir del id
  const indSection = Number(idSection.replace("btnSection", ""));

  //Realizar un slice de los datos del fixture
  const startIndex = (indSection - 1) * 10;
  const fixtureSlice = fixtureData.slice(startIndex, startIndex + 10);

  let html = "";

  fixtureSlice.forEach((fixture, ind) => {
    html += `<!-- Información del Juego -->
            <div class="container-fixture-match">
                <!-- Número de partido -->
                <div class="container-fixture-match-number">
                    <span>${ind + 1 + startIndex}</span>
                </div>
                <!-- Competición y Estadio -->
                <div class="container-fixture-stadium-competition">
                    <div class="container-stadium-competition">
                        <span class="material-symbols-outlined">stadium</span>
                        <span>${fixture.stadium}</span>
                    </div>
                    <div class="container-stadium-competition">
                        <span class="material-symbols-outlined">trophy</span>
                        <span>${fixture.competition}</span>
                    </div>
                    
                </div>
                    <!-- Equipos y resultado -->
                <div class="container-fixture-result">
                    <!-- Local -->
                    <div class="container-fixture-result-team-local">
                        <img src="${
                          fixture.local_team_logo
                        }" alt="Deportivo Cali">
                        <span>${fixture.local_team}</span>
                    </div>
                    <!-- Resultado -->
                    <div class="container-fixture-result-score">
                        <span>${fixture.result_local}</span>
                        <span>:</span>
                        <span>${fixture.result_visitor}</span>
                    </div>
                    
                    <!-- Visitante -->
                    <div class="container-fixture-result-team-visitor">
                        <span>${fixture.visitor_team}</span>
                        <img src="${
                          fixture.visitor_team_logo
                        }" alt="Independiente Medellín">
                    </div>
                </div>
                <!-- Ciudad -->
                <div class="container-fixture-city">
                    <span>${fixture.date}</span>
                </div>
            </div>`;
  });

  const sectionContent = document.getElementById("fixtureContainer");
  sectionContent.innerHTML = html;
}

function arrowsSection() {
  const arrowLeft = document.getElementById("arrowLeft");
  const arrowRight = document.getElementById("arrowRight");

  arrowLeft.addEventListener("click", function (e) {
    if (indButtonActive - 1 < 1) {
      document
        .getElementById(`btnSection${sizeFixture}`)
        .classList.add("active");

      document
        .getElementById(`btnSection${indButtonActive}`)
        .classList.remove("active");

      indButtonActive = sizeFixture;
      getContentSection(`btnSection${sizeFixture}`, fixtureFilter);
    } else {
      document
        .getElementById(`btnSection${indButtonActive - 1}`)
        .classList.add("active");

      document
        .getElementById(`btnSection${indButtonActive}`)
        .classList.remove("active");
      indButtonActive--;
      getContentSection(`btnSection${indButtonActive}`, fixtureFilter);
    }
  });

  arrowRight.addEventListener("click", function (e) {
    if (indButtonActive + 1 > sizeFixture) {
      document.getElementById(`btnSection${1}`).classList.add("active");

      document
        .getElementById(`btnSection${indButtonActive}`)
        .classList.remove("active");

      indButtonActive = 1;
      getContentSection(`btnSection${1}`, fixtureFilter);
    } else {
      document
        .getElementById(`btnSection${indButtonActive + 1}`)
        .classList.add("active");

      document
        .getElementById(`btnSection${indButtonActive}`)
        .classList.remove("active");
      indButtonActive++;

      getContentSection(`btnSection${indButtonActive}`, fixtureFilter);
    }
  });
}
