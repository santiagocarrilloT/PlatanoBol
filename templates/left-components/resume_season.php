<div class="container-results">
    <h3>Resultados Liga <?= $team_country ?> <?= $season ?></h3>
    <div class="container-results-info">
        
        <!-- Resumen Resultados -->
        <div class="container-titles">
            <!-- Victorias Totales -->
            <div class="container-resume-items-win">
                <span>Victorias Totales</span>
                <span><?= $fixtures["wins"]["total"]; ?></span>
                <div class="results-item-win" style="background-color: green;"><span class="material-symbols-outlined">trophy</span></div>
            </div>
            <!-- Empates Totales -->
            <div class="container-resume-items-degrade">
                <span>Empates Totales</span>
                <span><?= $fixtures["draws"]["total"]; ?></span>
                <div class='results-item-degrade'><span class='material-symbols-outlined'>handshake</span></div>
                
            </div>
            <!-- Derrotas Totales -->
            <div class="container-resume-items-loss">
                <span>Derrotas Totales</span>
                <span><?= $fixtures["loses"]["total"]; ?></span>
                <div class='results-item-loss' style="background-color: red;"><span class='material-symbols-outlined'>stat_minus_2</span></div>
                
            </div>
        </div>
          
        <!-- Botones de resultados -->
        <div class="container-results-all">
            <!-- Texto Resultado -->
            <div class="container-results-text">
                <span class="material-symbols-outlined">info</span>
                <span>Fechas Jugadas (Todos Contra Todos y Cuadrangulares)</span>
            </div>

            <!-- Cargar Resultados -->
             <div class="container-results-all-items" onclick="window.location.href='/templates/fixture-components/fixture.php';">
                <?php
                    $count = 1;
                    foreach ($data_forms as $date) {
                        switch ($date){
                            case "W":
                                echo "<div class='container-result-item'>
                                        <span >".$count."</span>
                                        <div class='results-item-win' style='background-color: green;'><span class='material-symbols-outlined'>trophy</span></div>
                                    </div>";
                                break;

                            case "D":
                                echo "<div class='container-result-item'>
                                        <span >".$count."</span>
                                        <div class='results-item-degrade'><span class='material-symbols-outlined'>handshake</span></div>
                                    </div>";
                                break;

                            case "L":
                                echo "<div class='container-result-item'>
                                        <span >".$count."</span>
                                        <div class='results-item-loss' style='background-color: red;'><span class='material-symbols-outlined'>stat_minus_2</span></div>
                                    </div>";
                                break;

                            default:
                                break;
                        }
                        $count++;
                    }
                ?>
             </div>
            
        </div>

    </div>
</div>