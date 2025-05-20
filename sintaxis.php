<?php
    $name = "Gustavo";
    $isDev = true;
    $age = 20; 
    define("LOGO_PHP", "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png"); 
    const NOMBRE = "Fabian";

    $outputDev = $isDev ? "Eres un Desarrollador" : "No lo eres";
    $outputAge = match (true) {
         $age <= 18 => "Menor de Edad",
         $age > 18 => "Mayor de Edad",
         $age > 40 => "Estas cucho",
         default => "No lo sabemos",
    };
    // Array de equipos de futbol
    $bestTeams = ["Real Madrid", "Barcelona", "Boca Juniors", "River Plate", "Manchester City", "Manchester United", "PSG", "Juventus", "Inter de Milan", "AC Milan"]; 
    $bestTeams[] = "Arsenal";
    $bestTeams[2] = "Porto";

    //Diccionario de equipos de fútbol
    $realMadrid = [
        "name" => $bestTeams[0],
        "year" => 1902,
        "titles" => 14,
        "stadium" => "Santiago Bernabeu",
        "competitions" => ["Laliga", "Champions League", "Copa del Rey", "Supercopa de España", "Mundial de Clubes", "UEFA Super Cup"],
    ]; 
    $realMadrid["titles"] = 15;


?>


<img src="<?= LOGO_PHP ?>" alt="" style="width: 200px; ">
<h1>
    <?= NOMBRE . " Cadena combinada " . $age;?>
</h1>

<h2><?=  $outputAge ?></h2>
<h2><?=  $outputDev ?></h2>

<h3>
    El mejor lenguaje es <?= $bestTeams[0] ?>
</h3>

<ul>
    <?php foreach ($bestTeams as $key => $team) : ?> 
        <li><?=$team . " Ind: " .  $key ?></li>

    <?php endforeach; ?>
</ul>

