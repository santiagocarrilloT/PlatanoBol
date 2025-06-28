<?php

session_start();

require_once "../../api/const.php";
require_once "../../api/FixtureTeam.php";
require_once "../../functions.php";


if (isset($_GET["code"])){
    setcookie("team_info", json_encode($_GET["code"]), time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("team_name", urlencode($_GET["name"]), time() + (86400 * 30), "/"); // 86400 = 1 day
    exit;
    //$code = $_GET["code"];
    //$TEAM_CODE = $code;
    //$API_FOOTBALL_URL = get_API_FOOTBALL_URL($TEAM_CODE, 2023);
    }

try {
    if(isset($_SESSION['fixture']) && $_COOKIE["team_info"] == $_COOKIE['team_id_fixture']) {
        $data_fixture = json_decode($_SESSION['fixture'], true);
        //print_r('Datos fixture sesión');
    } 

    else if(isset($_COOKIE["team_info"])){
        $TEAM_CODE = json_decode($_COOKIE["team_info"], true);
        $API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);
        //Búsqueda de equipos
        $fixture_team = FixtureTeam::data_fixture_curl($API_FIXTURE_URL, $API_KEY, $API_HOST);
        $data_fixture = [];
        foreach ($fixture_team as $data){
            $data_fixture[] = $data->get_data();
        }

        $_SESSION['fixture'] = json_encode($data_fixture);
        setcookie("team_id_fixture", json_encode($TEAM_CODE), time() + (86400 * 30), "/");
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

<!-- Script de fixture component -->
<script >
    const fixtureData = <?php echo json_encode($data_fixture); ?>;
</script>
<script src="./change-section.js"></script>