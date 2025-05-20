function toggleDetails(idComponent) {
  const details = document.getElementById(idComponent);

  if (details.style.display === "") details.style.display = "block";
  else if (details.style.display === "none") details.style.display = "block";
  else details.style.display = "none";
}
