<?php

require_once "../../functions.php";

//Equipos
    try {
        if(isset($_COOKIE["team_name"])){
            /* $TEAM_CODE = json_decode($_COOKIE["team_info"], true);
            $API_FOOTBALLphp_URL = get_API_FOOTBALL_URL($TEAM_CODE, 2023);

            //Búsqueda de equipos
            $team = Statics::data_team_curl($API_FOOTBALLphp_URL, $API_KEY, $API_HOST);
            //Datos del equipo
            $data_team = $team->get_data();*/
            $team_name = urldecode($_COOKIE["team_name"]);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>

<?php render_template_folder('head_map', 'map-components'); ?>
<?php render_template_folder('main_map', 'map-components', [$team_name]); ?>
<?php render_template_folder('styles_map', 'map-components');?>

<!-- Script Mapa -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="../map-components/map_config.js"></script>

<!-- Script de header component -->
<script src="../header-components/expandir-search.js"></script>
<script src="../header-components/search_fetch.js"></script>