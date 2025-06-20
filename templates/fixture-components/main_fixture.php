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
            <div class="container-filters">

                <!-- Contenedor de Búsqueda -->
                <div class="fixture-components-search">
                    <div class="container-fixture-filter-title">
                        <span class="material-symbols-outlined">tune</span>
                        Filtros:
                    </div>
                    
                    <?php 
                        $filtro = isset($_GET['filter_fixture']) ? $_GET['filter_fixture'] : 'all';
                        $tipoFiltro = '' ;
                        switch ($filtro) {
                            case 'all':
                                $tipoFiltro = 'Todos los partidos';
                                break;
                            case 'local':
                                $tipoFiltro = 'Partidos Local';
                                break;
                            case 'visitor':
                                $tipoFiltro = 'Partidos Visitante';
                                break;
                            default:
                                break;
                        }
                    ?>
                    <div class="form-filter">
                        <form method="get">
                        <select class="select-filter" name="filter_fixture" id="filter_fixture" onchange="this.form.submit()">
                            <option type="submit" value="all" <?php if($filtro == 'all') echo 'selected'; ?>>Todos los juegos</option>
                            <option type="submit" value="local" <?php if($filtro == 'local') echo 'selected'; ?>>Juegos de local</option>
                            <option type="submit" value="visitor" <?php if($filtro == 'visitor') echo 'selected'; ?>>Juegos de visitante</option>
                        </select>
                        </form>
                    </div>
                </div>

                <!-- Contenedor de secciones -->
                <div class="container-section-fixture">
                    <button class="button-next-fixture material-symbols-outlined">keyboard_arrow_left</button>
                    <?php
                    $size_data = sizeof($data);
                    $total_pages = ceil($size_data / 10);
                    

                    if( $total_pages < 4) {
                        for ($i = 1; $i <= $total_pages; $i+=1) {
                            echo '<button class="button-number-fixture">' . $i . '</button>';
                        }
                        
                    }
                    else {
                        $htmlComponent = '';
                        for ($i = 1; $i <= 3; $i+=1) {
                            $htmlComponent .= '<button class="button-number-fixture">' . $i . '</button>';
                        } 
                        $htmlComponent .= '<span class="button-number-fixture">...</span>';
                       
                        echo $htmlComponent; 
                    }
                    ?>                   
                    <button class="button-next-fixture material-symbols-outlined">keyboard_arrow_right</button>
                </div>
            </div>


            <!-- Componentes Fixtures -->
            <div class="container-fixture">
                <?php
                $filtro = isset($_GET['filter_fixture']) ? $_GET['filter_fixture'] : 'all';

                function load_fixture_data($data = [], $filtro = 'all'){
                    $codigo_equipo = isset($_COOKIE["team_info"]) ? json_decode($_COOKIE["team_info"], true) : null;
                    //$codigo_equipo = 1127; // Deportivo Cali
                    $count = 1;
                    foreach ($data as $team) {
                        if($team['id_local_team'] == $codigo_equipo && $filtro == 'local'){
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

                        else if($team['id_visitor_team'] == $codigo_equipo && $filtro == 'visitor'){
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

                        else if( $filtro == 'all') {
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

                        /* else{
                            echo
                            '<div class="container-nofound-filter">
                                No existen resultados para esta búsqueda
                            </div>
                            ';
                            break; 
                        } */

                        if($count >= 10) {
                            break; // Limitar a 10 partidos por página
                        }
                        $count++; 
                    }
                }

                load_fixture_data($data, $filtro);
                ?> 
            </div>

        </div>
        
   </main>

   
</body>