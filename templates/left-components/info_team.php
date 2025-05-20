<div class="container-div-team" style="background-image: url('<?= $team_logo ?>'); ">
    <div class="container-team">
        <section class="logo_team">
            <img src="<?= $team_logo; ?>" width="150" alt="Logo <?= $team_name ?>" style="border-radius: 16px;">
        </section>

        <div class="info_team">
            <h3 style="padding-bottom: 7px; color:black;"><?= $team_name ?></h3>
            <div class="info_team_league">
                <img src="<?= $league_logo; ?>" width="20" alt="Logo <?= $team_country ?>">
                <span><?= $team_league?></span>
            </div>
            <div class="info_team_country">
                <img src="<?= $country_logo; ?>" width="20" alt="Logo <?= $team_country ?>">
                <span><?= $team_country?></span>
            </div>
            <span style="padding-bottom: 7px;">Temporada <?= $season ?></span>
        </div>
    </div>
</div>
