<body>
    <header class="header">
        <div class="container-header">
            <?php $url="../../templates/header-components/search_teams_fetch.php"; require "../header-components/result_search_teams.php"; ?>
        
        <div class="container-nav-header">
            <nav class="nav-header">
                <ul>
                    <a href="../../index.php">Equipo</a>
                    <a href="/templates/fixture-components/fixture.php">Partidos</a>
                </ul>
            </nav>
        </div>
   </header>

   <main class="main">
        <input id="valueTeam" type="hidden" value='<?= htmlspecialchars($data[0]); ?>'>
        <div id="mapTeams" class="container-map"></div>
   </main>
</body>