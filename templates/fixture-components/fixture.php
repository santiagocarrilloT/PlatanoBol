<?php

require_once "../../api/const.php";
require_once "../../api/FixtureTeam.php";
require_once "../../functions.php";

$API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);


try {
    /* if(isset($_POST['fixture'])){
        $fixture_team = json_decode($_POST['fixture'], true);
        $data_fixture = [];
        print_r("ds");
        foreach ($fixture_team as $data){
            $data_fixture[] = $data;
        }
    } */

    if(isset($_COOKIE["team_info"])){
        $TEAM_CODE = json_decode($_COOKIE["team_info"], true);
        $API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);
        //Búsqueda de equipos
        $fixture_team = FixtureTeam::data_fixture_curl($API_FIXTURE_URL, $API_KEY, $API_HOST);
        $data_fixture = [];
        foreach ($fixture_team as $data){
            $data_fixture[] = $data->get_data();
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

<?php render_template_folder('head_fixture', 'fixture-components', $data_fixture); ?>
<?php render_template_folder('main_fixture', 'fixture-components', $data_fixture); ?>
<?php render_template_folder('styles_fixture', 'fixture-components');?>

<!-- Script de header component -->
<script src="../header-components/expandir-search.js"></script>
<script src="../header-components/search_fetch.js"></script>