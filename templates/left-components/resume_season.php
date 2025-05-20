<div class="container-results">
    <h3>Resultados Temporada <?= $season ?></h3>
    <div class="container-results-info">
        <!-- Resumen Resultados -->
        <div class="container-titles">
            <!-- Victorias Totales -->
            <div class="container-resume-items-win">
                <span>Victorias</span>
                <span><?= $fixtures["wins"]["total"]; ?></span>
            </div>
            <!-- Empates Totales -->
            <div class="container-resume-items-degrade">
                <span>Empates</span>
                <span><?= $fixtures["draws"]["total"]; ?></span>
            </div>
            <!-- Derrotas Totales -->
            <div class="container-resume-items-loss">
                <span>Derrotas</span>
                <span><?= $fixtures["loses"]["total"]; ?></span>
            </div>
        </div>

        <!-- Texto Resultado -->
        <div>
            <span>Resultados:</span>
        </div>
          
        <!-- Botones de resultados -->
        <div class="container-results-items" onclick="window.location.href='/templates/fixture-components/fixture.php';">
            <?php
                foreach ($data_forms as $date) {
                    switch ($date){
                        case "W":
                            echo "<div class='results-item-win' style='background-color: green;'>W</div>";
                            break;
                        case "D":
                            echo "<div class='results-item-degrade'>D</div>";
                            break;
                        case "L":
                            echo "<div class='results-item-loss' style='background-color: red;'>L</div>";
                            break;
                        default:
                            break;
                    }
                }
            ?>
        </div>
    </div>
</div>