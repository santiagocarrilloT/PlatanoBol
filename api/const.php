<?php
//Team Code
$TEAM_CODE = 1127;
//Team Season
$TEAM_SEASON = 2023;
// API URL
$API_FOOTBALL_URL = "https://v3.football.api-sports.io/teams/statistics?league=239&season={$TEAM_SEASON}&team={$TEAM_CODE}"; 
function get_API_FOOTBALL_URL($team_code, $season){
    return "https://v3.football.api-sports.io/teams/statistics?league=239&season={$season}&team={$team_code}";
}

function get_API_FIXTURE_URL($team_code, $season){
    return "https://v3.football.api-sports.io/fixtures?league=239&season={$season}&team={$team_code}";
}

// API Key
$API_KEY = "acd0b5b55f19300517aed70bdbd4e393";
// API Host
$API_HOST = "v3.football.api-sports.io";

?>