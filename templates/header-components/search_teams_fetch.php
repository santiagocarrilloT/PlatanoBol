<?php 

declare(strict_types=1);
require_once __DIR__ . "/../../api/LeagueTeams.php";
require_once __DIR__ . "/../../api/Staticts.php";
require_once __DIR__ . "/../../functions.php";
require_once __DIR__ . "/../../api/const.php";


if (isset($_POST["buscar"])) {
    $value = $_POST["buscar"];
    $team_find_search = LeagueTeams::get_team_by(mb_strtolower($value));
    echo json_encode($team_find_search);
}


?>