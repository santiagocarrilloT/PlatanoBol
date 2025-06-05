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
                    <a href="/templates/fixture-components/fixture.php">
                        <div class="container-header-icon">
                            <span class="material-symbols-outlined">family_history</span>
                            Juegos
                        </div>
                    </a>
                    <a href="#" class="disabled">
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
        <input id="valueTeam" type="hidden" value='<?= htmlspecialchars($data[0]); ?>'>
        <div id="mapTeams" class="container-map"></div>
   </main>
</body>