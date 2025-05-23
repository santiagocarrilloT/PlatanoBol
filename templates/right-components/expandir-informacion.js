function toggleDetails(idComponent, idComponentExpanded) {
  const details = document.getElementById(idComponent);
  const componentExpanded = document.getElementById(idComponentExpanded);

  if (details.style.display === "") {
    details.style.display = "block";
    componentExpanded.textContent = "arrow_drop_up";
  } else if (details.style.display === "none") {
    details.style.display = "block";
    componentExpanded.textContent = "arrow_drop_up";
  } else {
    details.style.display = "none";
    componentExpanded.textContent = "arrow_drop_down";
  }
}
