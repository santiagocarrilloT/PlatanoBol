<?php

    //Se iniciar una sesión para almacenar los datos de la API
    session_start();

    require_once "functions.php";

    require_once "./api/const.php";
    require_once "./api/Staticts.php";

    require_once "./api/FixtureTeam.php";

    if (isset($_GET["code"])){
        setcookie("team_info", json_encode($_GET["code"]), time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("team_name", urlencode($_GET["name"]), time() + (86400 * 30), "/"); // 86400 = 1 day
        exit;
        //$code = $_GET["code"];
        //$TEAM_CODE = $code;
        //$API_FOOTBALL_URL = get_API_FOOTBALL_URL($TEAM_CODE, 2023);
    }

    //Equipos
    try {
        if(isset($_COOKIE["team_info"])){
            $TEAM_CODE = json_decode($_COOKIE["team_info"], true);
            $API_FOOTBALLphp_URL = get_API_FOOTBALL_URL($TEAM_CODE, 2023);

            //Búsqueda de equipos
            $team = Statics::data_team_curl($API_FOOTBALLphp_URL, $API_KEY, $API_HOST);
            //Datos del equipo
            $data_team = $team->get_data();
            //Datos de la liga
            $totalPoints = $team->get_total_points();
            //Datos de la liga
            $data_forms = str_split($data_team["form"]);

            //Datos del Fixture
            $API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);
            $fixture_team = FixtureTeam::data_fixture_curl($API_FIXTURE_URL, $API_KEY, $API_HOST);

            //Arreglo de datos del Fixture
            $data_fixture = [];
            foreach ($fixture_team as $data){
                $data_fixture[] = $data->get_data();
                }
            }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    /* $API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);
    $fixture_team = FixtureTeam::data_fixture_curl($API_FIXTURE_URL, $API_KEY, $API_HOST);
    $data_fixture = [];
    foreach ($fixture_team as $data){
        $data_fixture[] = $data->get_data();
    }
    $totalPoints = ["positivePoints" => 30, "negativePoints" => 20];
    $data_team = [
        "team_name" => "Deportivo Cali",
        "team_logo" => "https://media.api-sports.io/football/teams/1127.png",
        "team_id" => 157,
        "team_country" => "COL",
        "country_logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/2560px-Flag_of_Colombia.svg.png",
        "team_league" => "Primera A",
        "league_logo" => "https://media.api-sports.io/football/leagues/239.png",
        "season" => 2023,
        "form" => "D D D W L L D L L D L D L W W W L W D D W L D L D L W D L W D D W W L W D L W D D L L L L L",
        "fixtures" => [
            "played" => [
                "home" => 23,
                "away" => 23,
                "total" => 46
            ],
            "wins" => [
                "home" => 8,
                "away" => 4,
                "total" => 12
            ],
            "draws" => [
                "home" => 12,
                "away" => 4,
                "total" => 16
            ],
            "loses" => [
                "home" => 3,
                "away" => 15,
                "total" => 18
            ]
        ],
        "goals" => [
            "for" => [
                "total" => [
                    "home" => 26,
                    "away" => 23,
                    "total" => 49
                ],
                "average" => [
                    "home" => "1.1",
                    "away" => "1.0",
                    "total" => "1.1"
                ],
                "minute" => [
                    "0-15" => [
                        "total" => 9,
                        "percentage" => "18.37%"
                    ],
                    "16-30" => [
                        "total" => 4,
                        "percentage" => "8.16%"
                    ],
                    "31-45" => [
                        "total" => 13,
                        "percentage" => "26.53%"
                    ],
                    "46-60" => [
                        "total" => 14,
                        "percentage" => "28.57%"
                    ],
                    "61-75" => [
                        "total" => 1,
                        "percentage" => "2.04%"
                    ],
                    "76-90" => [
                        "total" => 7,
                        "percentage" => "14.29%"
                    ],
                    "91-105" => [
                        "total" => 1,
                        "percentage" => "2.04%"
                    ],
                    "106-120" => [
                        "total" => null,
                        "percentage" => null
                    ]
                ]
            ],
            "against" => [
                "total" => [
                    "home" => 17,
                    "away" => 49,
                    "total" => 66
                ],
                "average" => [
                    "home" => "0.7",
                    "away" => "2.1",
                    "total" => "1.4"
                ],
                "minute" => [
                    "0-15" => [
                        "total" => 9,
                        "percentage" => "13.64%"
                    ],
                    "16-30" => [
                        "total" => 15,
                        "percentage" => "22.73%"
                    ],
                    "31-45" => [
                        "total" => 7,
                        "percentage" => "10.61%"
                    ],
                    "46-60" => [
                        "total" => 13,
                        "percentage" => "19.70%"
                    ],
                    "61-75" => [
                        "total" => 9,
                        "percentage" => "13.64%"
                    ],
                    "76-90" => [
                        "total" => 9,
                        "percentage" => "13.64%"
                    ],
                    "91-105" => [
                        "total" => 4,
                        "percentage" => "6.06%"
                    ],
                    "106-120" => [
                        "total" => null,
                        "percentage" => null
                    ]
                ]
            ]
        ],
        "biggest" => [
            "streak" => [
                "wins" => 3,
                "draws" => 3,
                "loses" => 2
            ],
            "wins" => [
                "home" => "4-0",
                "away" => "0-3"
            ],
            "loses" => [
                "home" => "0-2",
                "away" => "4-0"
            ],
            "goals" => [
                "for" => [
                    "home" => 4,
                    "away" => 4
                ],
                "against" => [
                    "home" => 2,
                    "away" => 5
                ]
            ]
        ],
        "clean_sheet" => [
            "home" => 11,
            "away" => 2,
            "total" => 13
        ],
        "failed_to_score" => [
            "home" => 8,
            "away" => 10,
            "total" => 18
        ],
        "penalty" => [
            "scored" => [
                "total" => 6,
                "percentage" => "100.00%"
            ],
            "missed" => [
                "total" => 0,
                "percentage" => "0%"
            ],
            "total" => 6
        ],
        "lineups" => [
            [
                "formation" => "4-2-3-1",
                "played" => 29
            ],
            [
                "formation" => "4-4-2",
                "played" => 6
            ],
            [
                "formation" => "4-3-3",
                "played" => 5
            ],
            [
                "formation" => "4-3-1-2",
                "played" => 2
            ],
            [
                "formation" => "3-4-3",
                "played" => 1
            ],
            [
                "formation" => "4-4-1-1",
                "played" => 1
            ],
            [
                "formation" => "3-4-2-1",
                "played" => 1
            ]
        ],
    ];
    $data_forms = explode(" ", $data_team["form"]); */
    
?>


<?php render_template('head', $data_team); ?>
<?php render_template('main', array_merge($data_team, $totalPoints), $data_forms, $data_fixture); ?>
<?php render_template('styles');?>



<!-- Función para el resumen -->
<script src="./templates/right-components/expandir-informacion.js"></script>

<!-- Campo de Fútbol -->
<script type="module" src="./templates/left-components/soccer_field.js"></script>
<script type="module" src="./templates/left-components/soccer_field_player.js"></script>
<script type="module" src="./templates/left-components/new_soccer_field.js"></script>
<script type="module" src="./templates/left-components/lineups_database.js"></script>
<script src="./templates/header-components/search_fetch.js"></script>

<!-- Expandir parámetros de búsqueda -->
<script src="./templates/header-components/expandir-search.js"></script>

<!-- Gráfica goles por minutos -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script type="text/javascript" src="./templates/right-components/graph_config.js"></script>

<!-- Modal de alineaciones -->
<script src="./templates/left-components/modal_new_lineup.js"></script>
<script src="./templates/left-components/lineups_db.js"></script>