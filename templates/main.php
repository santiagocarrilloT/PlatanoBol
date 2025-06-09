<?php 

declare(strict_types=1);
$open_data = false;

?>
<body>
    <header class="header">
        <div class="container-header">
            <?php $url = "templates/header-components/search_teams_fetch.php"; require_once "header-components/result_search_teams.php"; ?>
        
            <div class="container-nav-header">
                <nav class="nav-header">
                    <ul>
                        <a href="#" class="disabled">
                            <div class="container-header-icon">
                                <span class="material-symbols-outlined">analytics</span>
                                Club
                            </div>
                        </a>
                        <a href="templates/fixture-components/fixture.php" onclick='sendFixtureInformation(<?php echo json_encode($data_fixture); ?>)'>
                            <div class="container-header-icon">
                                <span class="material-symbols-outlined">family_history</span>
                                Juegos
                            </div>
                        </a>
                        <a href="/templates/map-components/map.php">
                            <div class="container-header-icon">
                                <span class="material-symbols-outlined">location_on</span>
                                Mapa
                            </div>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Article section -->
    <main>
        <div class="container">
            <div class="container-left">
                <?php require "left-components/info_team.php"; ?>
                <?php require "left-components/resume_season.php"; ?>
                <?php require "left-components/lineups_team.php"; ?>
            </div>   

            <!-- Statics section -->
            <div class="container-right">
                <div class="container-resume-right">
                    <h3>Resumen</h3>

                    <!-- Contenedor resumen puntos -->
                    <?php require "right-components/points_resume.php"; ?>
                    <?php require "right-components/streak_resume.php"; ?>
                    <?php require "right-components/clean_sheet_resume.php"; ?>
                    <?php require "right-components/failed_to_score_resume.php"; ?>
                    <?php require "right-components/penalty_resume.php"; ?>
                </div>
                    <?php require "right-components/goals_data.php" ?>
            </div>
        </div>
    </main>
</body>



