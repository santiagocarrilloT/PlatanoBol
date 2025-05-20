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
