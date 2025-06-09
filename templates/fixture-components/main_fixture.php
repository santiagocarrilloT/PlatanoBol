<?php 
$filtro = "";
?>

<body>
   <header class="header">
        <div class="container-header">
            <?php $url="../../templates/header-components/search_teams_fetch.php"; require "../header-components/result_search_teams.php"; ?>
        
        <div class="container-nav-header">
            <nav class="nav-header">
                <ul>
                    <a href="../../index.php">
                        <div class="container-header-icon">
                            <span class="material-symbols-outlined">analytics</span>
                            Club
                        </div>
                    </a>
                    <a href="#" class="disabled">
                        <div class="container-header-icon">
                            <span class="material-symbols-outlined">family_history</span>
                            Juegos
                        </div>
                    <a href="/templates/map-components/map.php">
                        <div class="container-header-icon">
                            <span class="material-symbols-outlined">location_on</span>
                            Mapa
                        </div>
                    </a>
                </ul>
            </nav>
        </div>
   </header>
   <main class="main">
        <div class="container-main">
            <h1 style="text-align: center;">Partidos Jugados</h1>

            <!-- Filtro de búsqueda -->
            <div class="container-fixture-filter">
                <div class="container-fixture-filter-title">
                    <span class="material-symbols-outlined">tune</span>
                    Filtros:
                </div>

                <form method="post" action="">
                    <select class="select-filter" name="filter_fixture" id="filter_fixture">
                        <option type="submit" value="all">Todos los partidos</option>
                        <option type="submit" value="local">Partidos como local</option>
                        <option type="submit" value="visitor">Partidos como visitante</option>
                    </select>
                </form>
                
            </div>

            <!-- Componentes Fixtures -->
            <div class="container-fixture">
                <?php
                function load_fixture_data($data = []){
                    //$codigo_equipo = isset($_COOKIE["team_info"]) ? json_decode($_COOKIE["team_info"], true) : null;
                    $codigo_equipo = 1127; // Deportivo Cali
                    $count = 1;
                    foreach ($data as $team) {
                        if($team['id_local_team'] == $codigo_equipo){
                            echo '
                        <!-- Información del Juego -->
                        <div class="container-fixture-match">

                            <!-- Número de partido -->
                            <div class="container-fixture-match-number">
                                <span>' . $count . '</span>
                            </div>

                            <!-- Competición y Estadio -->
                            <div class="container-fixture-stadium-competition">
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">stadium</span>
                                    <span>' . htmlspecialchars($team['stadium']) . '</span>
                                </div>
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">trophy</span>
                                    <span>' . htmlspecialchars($team['competition']) . '</span>
                                </div>
                                
                            </div>

                                <!-- Equipos y resultado -->
                            <div class="container-fixture-result">
                                <!-- Local -->
                                <div class="container-fixture-result-team-local">
                                    <img src="' . htmlspecialchars($team['local_team_logo']) . '" alt="Deportivo Cali">
                                    <span>' . htmlspecialchars($team['local_team']) . '</span>
                                </div>

                                <!-- Resultado -->
                                <div class="container-fixture-result-score">
                                    <span>' . htmlspecialchars($team['result_local']) . '</span>
                                    <span>:</span>
                                    <span>' . htmlspecialchars($team['result_visitor']) . '</span>
                                </div>
                                
                                <!-- Visitante -->
                                <div class="container-fixture-result-team-visitor">
                                    <span>' . htmlspecialchars($team['visitor_team']) . '</span>
                                    <img src="' . htmlspecialchars($team['visitor_team_logo']) . '" alt="Independiente Medellín">
                                </div>
                            </div>

                            <!-- Ciudad -->
                            <div class="container-fixture-city">
                                <span>' . htmlspecialchars($team['date']) . '</span>
                            </div>
                        </div>';
                        }
                        else {
                            echo '
                        <!-- Información del Juego -->
                        <div class="container-fixture-match">

                            <!-- Número de partido -->
                            <div class="container-fixture-match-number">
                                <span>' . $count . '</span>
                            </div>

                            <!-- Competición y Estadio -->
                            <div class="container-fixture-stadium-competition">
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">stadium</span>
                                    <span>' . htmlspecialchars($team['stadium']) . '</span>
                                </div>
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">trophy</span>
                                    <span>' . htmlspecialchars($team['competition']) . '</span>
                                </div>
                                
                            </div>

                                <!-- Equipos y resultado -->
                            <div class="container-fixture-result">
                                <!-- Local -->
                                <div class="container-fixture-result-team-local">
                                    <img src="' . htmlspecialchars($team['local_team_logo']) . '" alt="Deportivo Cali">
                                    <span>' . htmlspecialchars($team['local_team']) . '</span>
                                </div>

                                <!-- Resultado -->
                                <div class="container-fixture-result-score">
                                    <span>' . htmlspecialchars($team['result_local']) . '</span>
                                    <span>:</span>
                                    <span>' . htmlspecialchars($team['result_visitor']) . '</span>
                                </div>
                                
                                <!-- Visitante -->
                                <div class="container-fixture-result-team-visitor">
                                    <span>' . htmlspecialchars($team['visitor_team']) . '</span>
                                    <img src="' . htmlspecialchars($team['visitor_team_logo']) . '" alt="Independiente Medellín">
                                </div>
                            </div>

                            <!-- Ciudad -->
                            <div class="container-fixture-city">
                                <span>' . htmlspecialchars($team['date']) . '</span>
                            </div>
                        </div>';
                        }
                        /* echo '
                        <!-- Información del Juego -->
                        <div class="container-fixture-match">

                            <!-- Número de partido -->
                            <div class="container-fixture-match-number">
                                <span>' . $count . '</span>
                            </div>

                            <!-- Competición y Estadio -->
                            <div class="container-fixture-stadium-competition">
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">stadium</span>
                                    <span>' . htmlspecialchars($team['stadium']) . '</span>
                                </div>
                                <div class="container-stadium-competition">
                                    <span class="material-symbols-outlined">trophy</span>
                                    <span>' . htmlspecialchars($team['competition']) . '</span>
                                </div>
                                
                            </div>

                                <!-- Equipos y resultado -->
                            <div class="container-fixture-result">
                                <!-- Local -->
                                <div class="container-fixture-result-team-local">
                                    <img src="' . htmlspecialchars($team['local_team_logo']) . '" alt="Deportivo Cali">
                                    <span>' . htmlspecialchars($team['local_team']) . '</span>
                                </div>

                                <!-- Resultado -->
                                <div class="container-fixture-result-score">
                                    <span>' . htmlspecialchars($team['result_local']) . '</span>
                                    <span>:</span>
                                    <span>' . htmlspecialchars($team['result_visitor']) . '</span>
                                </div>
                                
                                <!-- Visitante -->
                                <div class="container-fixture-result-team-visitor">
                                    <span>' . htmlspecialchars($team['visitor_team']) . '</span>
                                    <img src="' . htmlspecialchars($team['visitor_team_logo']) . '" alt="Independiente Medellín">
                                </div>
                            </div>

                            <!-- Ciudad -->
                            <div class="container-fixture-city">
                                <span>' . htmlspecialchars($team['date']) . '</span>
                            </div>
                        </div>'; */
                        $count++; 
                    }
                }

                load_fixture_data($data);
                ?> 
            </div>

        </div>
        
   </main>

   
</body>