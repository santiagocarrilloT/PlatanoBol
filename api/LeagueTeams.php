<?php

static $search_parameter = "";

class LeagueTeams{
    function __construct(
        public int $team_id,
        public string $team_name,
        public string $team_code,
        public string $team_country,
        public string $team_logo,
        public string $team_city,
        public string $founded,
        public string $team_stadium,
        ){

        // Constructor de la clase
        $this->team_id = $team_id;
        $this->team_name = $team_name;
        $this->team_code = $team_code;
        $this->team_country = $team_country;
        $this->team_logo = $team_logo;
        $this->team_city = $team_city;
        $this->founded = $founded;
        $this->team_stadium = $team_stadium;
    }

    static function get_league_teams(): array {
        $data = [
            'get' => 'teams',
            'parameters' => [
                    'league' => '239',
                    'season' => '2023'
            ],
            'errors' => [],
            'results' => 20,
            'paging' => [
                    'current' => 1,
                    'total' => 1
            ],
            'response' => [
                [
                    'team' => [
                        'id' => 1125,
                        'name' => 'Millonarios',
                        'code' => 'MIL',
                        'country' => 'Colombia',
                        'founded' => 1946,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1125.png'
                    ],
                    'venue' => [
                            'id' => 383,
                            'name' => 'Estadio Nemesio Camacho El Campín',
                            'address' => 'Avenida N.Q.S Calle 57',
                            'city' => 'Bogotá, D.C.',
                            'capacity' => 39512,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/383.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1126,
                        'name' => 'Deportivo Pasto',
                        'code' => 'PAS',
                        'country' => 'Colombia',
                        'founded' => 1949,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1126.png'
                    ],
                    'venue' => [
                            'id' => 377,
                            'name' => 'Estadio Departamental Libertad',
                            'address' => 'Carrera 8',
                            'city' => 'San Juan de Pasto',
                            'capacity' => 27380,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/377.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1127,
                        'name' => 'Deportivo Cali',
                        'code' => 'CAL',
                        'country' => 'Colombia',
                        'founded' => 1912,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1127.png'
                    ],
                    'venue' => [
                            'id' => 376,
                            'name' => 'Estadio Deportivo Cali',
                            'address' => 'BN 25',
                            'city' => 'Palmira',
                            'capacity' => 52000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/376.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1128,
                        'name' => 'Deportivo Independiente Medellin',
                        'code' => 'MED',
                        'country' => 'Colombia',
                        'founded' => 1913,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1128.png'
                    ],
                    'venue' => [
                            'id' => 380,
                            'name' => 'Estadio Atanasio Girardot',
                            'address' => 'Entre carreras 70 y 73 y las Calles 48 y 50',
                            'city' => 'Medellín',
                            'capacity' => 45943,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/380.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1129,
                        'name' => 'Envigado',
                        'code' => 'ENV',
                        'country' => 'Colombia',
                        'founded' => 1989,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1129.png'
                    ],
                    'venue' => [
                            'id' => 379,
                            'name' => 'Estadio Polideportivo Sur',
                            'address' => 'Carrera 48 No. 46 Sur 150',
                            'city' => 'Envigado',
                            'capacity' => 14000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/379.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1130,
                        'name' => 'Atletico Huila',
                        'code' => 'HUI',
                        'country' => 'Colombia',
                        'founded' => 1990,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1130.png'
                    ],
                    'venue' => [
                            'id' => 370,
                            'name' => 'Estadio Guillermo Plazas Alcid',
                            'address' => 'Carrera 18 Nº 18 - 25',
                            'city' => 'Neiva',
                            'capacity' => 27000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/370.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1131,
                        'name' => 'Atletico Bucaramanga',
                        'code' => 'BUC',
                        'country' => 'Colombia',
                        'founded' => 1949,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1131.png'
                    ],
                    'venue' => [
                            'id' => 369,
                            'name' => 'Estadio Alfonso López',
                            'address' => 'Carrera 36 Nº 53-12, Cabecera del Llano',
                            'city' => 'Bucaramanga',
                            'capacity' => 28000,
                            'surface' => 'artificial turf',
                            'image' => 'https://media.api-sports.io/football/venues/369.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1132,
                        'name' => 'Boyaca Chico',
                        'code' => 'CHI',
                        'country' => 'Colombia',
                        'founded' => 2002,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1132.png'
                    ],
                    'venue' => [
                            'id' => 372,
                            'name' => 'Estadio de La Independencia',
                            'address' => 'Villa Olímpica',
                            'city' => 'Tunja',
                            'capacity' => 20630,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/372.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1133,
                        'name' => 'Jaguares de Córdoba',
                        'code' => 'JAG',
                        'country' => 'Colombia',
                        'founded' => 2012,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1133.png'
                    ],
                    'venue' => [
                            'id' => 1779,
                            'name' => 'Estadio de Fútbol Jaraguay de Montería',
                            'address' => null,
                            'city' => 'Montería',
                            'capacity' => 12000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/1779.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1134,
                        'name' => 'La Equidad',
                        'code' => 'EQU',
                        'country' => 'Colombia',
                        'founded' => 1990,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1134.png'
                    ],
                    'venue' => [
                            'id' => 371,
                            'name' => 'Estadio Metropolitano de Techo',
                            'address' => 'Tv 71D, Kennedy',
                            'city' => 'Bogotá, D.C.',
                            'capacity' => 7800,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/371.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1135,
                        'name' => 'Junior de Barranquilla',
                        'code' => 'JUN',
                        'country' => 'Colombia',
                        'founded' => 1924,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1135.png'
                    ],
                    'venue' => [
                            'id' => 366,
                            'name' => 'Estadio Metropolitano Roberto Meléndez',
                            'address' => 'Intersección de la Avenida Circunvalar con la Calle 45',
                            'city' => 'Barranquilla',
                            'capacity' => 49612,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/366.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1136,
                        'name' => 'Once Caldas',
                        'code' => 'ONC',
                        'country' => 'Colombia',
                        'founded' => 1961,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1136.png'
                    ],
                    'venue' => [
                            'id' => 384,
                            'name' => 'Estadio Palogrande',
                            'address' => 'Carrera 24 # 64 - 00',
                            'city' => 'Manizales',
                            'capacity' => 42678,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/384.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1137,
                        'name' => 'Atletico Nacional',
                        'code' => 'NAC',
                        'country' => 'Colombia',
                        'founded' => 1947,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1137.png'
                    ],
                    'venue' => [
                            'id' => 380,
                            'name' => 'Estadio Atanasio Girardot',
                            'address' => 'Entre carreras 70 y 73 y las Calles 48 y 50',
                            'city' => 'Medellín',
                            'capacity' => 45943,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/380.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1138,
                        'name' => 'America de Cali',
                        'code' => 'AME',
                        'country' => 'Colombia',
                        'founded' => 1927,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1138.png'
                    ],
                    'venue' => [
                            'id' => 368,
                            'name' => 'Estadio Olímpico Pascual Guerrero',
                            'address' => 'Carrera 36 entre Calles 5 y 5B3',
                            'city' => 'Santiago de Cali',
                            'capacity' => 46400,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/368.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1139,
                        'name' => 'Independiente Santa Fe',
                        'code' => 'SAN',
                        'country' => 'Colombia',
                        'founded' => 1941,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1139.png'
                    ],
                    'venue' => [
                            'id' => 383,
                            'name' => 'Estadio Nemesio Camacho El Campín',
                            'address' => 'Avenida N.Q.S Calle 57',
                            'city' => 'Bogotá, D.C.',
                            'capacity' => 39512,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/383.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1141,
                        'name' => 'Alianza Petrolera',
                        'code' => 'ALI',
                        'country' => 'Colombia',
                        'founded' => 1991,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1141.png'
                    ],
                    'venue' => [
                            'id' => 367,
                            'name' => 'Estadio Daniel Villa Zapata',
                            'address' => 'Estadio de Béisbol 26 de abril, Villa Olímpica',
                            'city' => 'Barrancabermeja',
                            'capacity' => 10400,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/367.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1142,
                        'name' => 'Deportes Tolima',
                        'code' => 'DEP',
                        'country' => 'Colombia',
                        'founded' => 1954,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1142.png'
                    ],
                    'venue' => [
                            'id' => 375,
                            'name' => 'Estadio Manuel Murillo Toro',
                            'address' => 'Carrera 4A Bis Nº 34 - 60 con Calle 36',
                            'city' => 'Ibagué',
                            'capacity' => 38000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/375.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1144,
                        'name' => 'Rionegro Águilas',
                        'code' => 'ITA',
                        'country' => 'Colombia',
                        'founded' => 1991,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1144.png'
                    ],
                    'venue' => [
                            'id' => 381,
                            'name' => 'Estadio Alberto Grisales',
                            'address' => 'Route 45A',
                            'city' => 'Rionegro, Antioquia',
                            'capacity' => 14000,
                            'surface' => 'artificial turf',
                            'image' => 'https://media.api-sports.io/football/venues/381.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1462,
                        'name' => 'Deportivo Pereira',
                        'code' => 'PER',
                        'country' => 'Colombia',
                        'founded' => 1944,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1462.png'
                    ],
                    'venue' => [
                            'id' => 378,
                            'name' => 'Estadio Hernán Ramírez Villegas',
                            'address' => 'Villa Olímpica Pereira',
                            'city' => 'Pereira',
                            'capacity' => 30297,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/378.png'
                    ]
                ],
                [
                    'team' => [
                        'id' => 1465,
                        'name' => 'Unión Magdalena',
                        'code' => 'UNI',
                        'country' => 'Colombia',
                        'founded' => 1953,
                        'national' => false,
                        'logo' => 'https://media.api-sports.io/football/teams/1465.png'
                    ],
                    'venue' => [
                            'id' => 387,
                            'name' => 'Estadio Sierra Nevada',
                            'address' => 'Calle 39, Bureche',
                            'city' => 'Santa Marta',
                            'capacity' => 16000,
                            'surface' => 'grass',
                            'image' => 'https://media.api-sports.io/football/venues/387.png'
                    ]
                ]
            ]
        ];

        foreach ($data["response"] as $team) {
            $teams_search[] = new Self(
                // Team data
                $team["team"]["id"],
                $team["team"]["name"],
                $team["team"]["code"],
                $team["team"]["country"],
                $team["team"]["logo"],
                $team["venue"]["city"],
                $team["team"]["founded"],
                $team["venue"]["name"],
            );
        }
        return $teams_search;
    }

    static function get_team_by($search): array {
        $teamsLeague = LeagueTeams::get_league_teams();
        $search_parameter = "";
        $teams_find = [];
        if(strlen($search) > 1) {
            foreach ($teamsLeague as $team) {
                //Búsqueda pro nombre
                if (mb_strpos(mb_strtolower($team->team_name), $search) !== false) {
                    $search_parameter = "n#"; 
                    $teams_find[] = $team;
                }
                //Búsqueda por ciudad
                else if (mb_strpos(mb_strtolower($team->team_city), $search) !== false) {
                    $search_parameter = "c#";
                    $teams_find[] = $team;
                }
                //Búsqueda por estadio
                else if (mb_strpos(mb_strtolower($team->team_stadium), $search) !== false) {
                    $search_parameter = "e#";
                    $teams_find[] = $team;
                }
            }
        }
        echo $search_parameter;
        return $teams_find;
    }
}

?>