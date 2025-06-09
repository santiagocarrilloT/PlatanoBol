document.addEventListener("click", function (event) {
  //Recupero el elemento del DOM
  const resultsSearch = document.getElementById("results-search");
  const containerSearch = document.getElementById("containerSearch");

  //Oculto el elementos si se hace click fuera de el
  if (!containerSearch.contains(event.target)) {
    resultsSearch.style.display = "none";
  } else {
    resultsSearch.style.display = "block";
  }
});

/*function sendFixtureInformation(fixtureData) {
  localStorage.setItem("fixture", JSON.stringify(fixtureData));
  window.location.href = "templates/fixture-components/fixture.php";

 const fixture = { fixture: fixtureData };
  $.ajax({
    type: "GET",
    url: "templates/fixture-components/fixture.php",
    data: fixture,
    success: function (response) {
      
      //window.open("templates/fixture-components/fixture.php");
    },
    error: function (error) {
      console.error("Error sending fixture information:", error);
    },
  }); 
}*/
