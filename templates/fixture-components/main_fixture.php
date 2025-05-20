<body>
   <header class="header">
        <div class="container-header">
            <?php $url="../../templates/header-components/search_teams_fetch.php"; require "../header-components/result_search_teams.php"; ?>
        
        <div class="container-nav-header">
            <nav class="nav-header">
                <ul>
                    <a href="../../index.php">Equipo</a>
                    <a href="/templates/map-components/map.php">Mapa</a>
                </ul>
            </nav>
        </div>
   </header>
   <main class="main">
        <div class="container-fixture">
            <!-- <div class="container-fixture-match">
                <div class="container-fixture-stadium-competition">
                    <span>Estadio Deportivo Cali</span>
                    <span>Liga Colombiana</span>
                </div>

                <div class="container-fixture-result">
                    <div class="container-fixture-result-team-local">
                        <img src="https://media.api-sports.io/football/teams/1127.png" alt="Deportivo Cali">
                        <span>Deportivo Cali</span>
                    </div>
                    <div class="container-fixture-result-score">
                        <span>2</span>
                        <span>:</span>
                        <span>1</span>
                    </div>
                    
                 
                    <div class="container-fixture-result-team-visitor">
                        <span>Independiente Medellín</span>
                        <img src="https://media.api-sports.io/football/teams/1128.png" alt="Independiente Medellín">
                    </div>
                </div>

                <div class="container-fixture-city">
                    <span>Palmira Valle</span>
                </div>

            </div> -->
            <?php
            function load_fixture_data($data = []){
                foreach ($data as $team) {
                    echo '
                    <!-- Información del Juego -->
                    <div class="container-fixture-match">
                        <!-- Competición y Estadio -->
                        <div class="container-fixture-stadium-competition">
                            <span>' . htmlspecialchars($team['stadium']) . '</span>
                            <span>' . htmlspecialchars($team['competition']) . '</span>
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
                            <span>' . htmlspecialchars($team['city']) . '</span>
                        </div>
                    </div>'; 
                }
            }

            load_fixture_data($data);
            ?> 
        </div>
   </main>

   
</body>