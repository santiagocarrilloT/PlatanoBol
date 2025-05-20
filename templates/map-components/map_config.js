document.addEventListener("DOMContentLoaded", function () {
  const mapaComponent = document.getElementById("mapTeams");
  var map = L.map(mapaComponent).setView([4.6531, -74.1028], 10);

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  // Datos de los equipos (puedes obtenerlos desde PHP)
  const teams = [
    {
      name: "Millonarios",
      city: "Bogotá, D.C.",
      logo: "https://media.api-sports.io/football/teams/1125.png",
      coordinates: [4.645931, -74.07749],
    },
    {
      name: "Deportivo Pasto",
      city: "San Juan de Pasto",
      logo: "https://media.api-sports.io/football/teams/1126.png",
      coordinates: [1.19797, -77.277843],
    },
    {
      name: "Deportivo Cali",
      city: "Palmira",
      logo: "https://media.api-sports.io/football/teams/1127.png",
      coordinates: [3.521827, -76.417004],
    },
    {
      name: "America de Cali",
      city: "Santiago de Cali",
      logo: "https://media.api-sports.io/football/teams/1138.png",
      coordinates: [3.429622, -76.541351],
    },
    {
      name: "Junior de Barranquilla",
      city: "Barranquilla",
      logo: "https://media.api-sports.io/football/teams/1135.png",
      coordinates: [10.926981657877931, -74.80045057492713],
    },
    {
      name: "Once Caldas",
      city: "Manizales",
      logo: "https://media.api-sports.io/football/teams/1136.png",
      coordinates: [5.05707066566719, -75.49005927868643],
    },
    {
      name: "Atletico Nacional",
      city: "Medellín",
      logo: "https://media.api-sports.io/football/teams/1137.png",
      coordinates: [6.256869, -75.590331],
    },
    {
      name: "Envigado",
      city: "Envigado",
      logo: "https://media.api-sports.io/football/teams/1129.png",
      coordinates: [6.164492, -75.599037],
    },
    {
      name: "Atletico Huila",
      city: "Neiva",
      logo: "https://media.api-sports.io/football/teams/1130.png",
      coordinates: [2.936079, -75.280477],
    },
    {
      name: "Atletico Bucaramanga",
      city: "Bucaramanga",
      logo: "https://media.api-sports.io/football/teams/1131.png",
      coordinates: [7.136538, -73.116621],
    },
    {
      name: "Boyaca Chico",
      city: "Tunja",
      logo: "https://media.api-sports.io/football/teams/1132.png",
      coordinates: [5.541966, -73.353385],
    },
    {
      name: "Jaguares",
      city: "Montería",
      logo: "https://media.api-sports.io/football/teams/1133.png",
      coordinates: [8.708641, -75.83026],
    },
    {
      name: "La Equidad",
      city: "Bogotá, D.C.",
      logo: "https://media.api-sports.io/football/teams/1134.png",
      coordinates: [4.623582081972775, -74.13576985216054],
    },
    {
      name: "Alianza Petrolera",
      city: "Barrancabermeja",
      logo: "https://media.api-sports.io/football/teams/1141.png",
      coordinates: [7.073239878253767, -73.86459653634567],
    },
    {
      name: "Deportes Tolima",
      city: "Ibagué",
      logo: "https://media.api-sports.io/football/teams/1142.png",
      coordinates: [4.430175440844035, -75.21820659218109],
    },
    {
      name: "Rionegro Aguilas",
      city: "Rionegro, Antioquia",
      logo: "https://media.api-sports.io/football/teams/1144.png",
      coordinates: [6.146848335480815, -75.37286419402427],
    },
    {
      name: "Deportivo Pereira",
      city: "Pereira",
      logo: "https://media.api-sports.io/football/teams/1462.png",
      coordinates: [4.804763551558852, -75.7516658808493],
    },
    {
      name: "Union Magdalena",
      city: "Santa Marta",
      logo: "https://media.api-sports.io/football/teams/1465.png",
      coordinates: [11.190872460386796, -74.1990343000559],
    },
    {
      name: "Independiente Medellin",
      city: "Medellín",
      logo: "https://media.api-sports.io/football/teams/1128.png",
      coordinates: [6.25184, -75.56359],
    },
    {
      name: "Independiente Santa Fe",
      city: "Bogotá, D.C.",
      logo: "https://media.api-sports.io/football/teams/1139.png",
      coordinates: [4.598056, -74.083056],
    },
  ];

  // Iterar sobre los equipos y agregar marcadores al mapa
  teams.forEach((team) => {
    L.marker(team.coordinates, {
      icon: crearTeamIcon(team.logo),
    })
      .addTo(map)
      .bindPopup(`<b>${team.name}</b><br>${team.city}`);
  });

  centrarEquipo(map, teams);
});

function crearTeamIcon(url) {
  return L.icon({
    iconUrl: url,
    iconSize: [30, 30],
    iconAnchor: [15, 15],
    popupAnchor: [0, -40],
  });
}

function centrarEquipo(map, teams) {
  const nombre = document.getElementById("valueTeam").value;
  const equipo = teams.find(
    (team) => team.name.toLowerCase() === nombre.toLowerCase()
  );

  if (equipo) {
    // Centrar el mapa en las coordenadas del equipo encontrado
    map.setView(equipo.coordinates, 10);
    L.popup()
      .setLatLng(equipo.coordinates)
      .setContent(`<b>${equipo.name}</b><br>${equipo.city}`)
      .openOn(map);
  } else {
    console.error("Equipo no encontrado");
  }
}
