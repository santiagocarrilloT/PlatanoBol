<?php
    //Archivos estrictos, para evitar que     
    declare(strict_types=1);
    
    require_once 'const.php';

    function render_template(string $template, array $data = [], array $data_forms = [], array $data_fixture = []){
       //Extrae variables del array asociativo
        extract($data);
        require "templates/$template.php";
    }

    function render_template_folder(string $template, string $folder, array $data = []){
        //Extrae variables del array asociativo
        extract($data);
        require "templates/$folder/$template.php";
    }

    /* function get_data_fixuture(string $TEAM_CODE, int $season) {
        $API_FIXTURE_URL = get_API_FIXTURE_URL($TEAM_CODE, 2023);
            $fixture_team = FixtureTeam::data_fixture_curl($API_FIXTURE_URL, $API_KEY, $API_HOST);

            //Arreglo de datos del Fixture
            $data_fixture = [];
            foreach ($fixture_team as $data){
                $data_fixture[] = $data->get_data();
            }
            $_SESSION['fixture'] = json_encode($data_fixture);
    } */
?>