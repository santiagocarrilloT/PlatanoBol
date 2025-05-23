<div onclick="toggleDetails('details_failed_to_score', 'expandedFailed')"  class="container-parent-details">
    <!-- Contenedor del botón desplegable -->
    <div class="container-init-details">
        <span>Sin Marcar</span>
        <button class="button-points"><span id="expandedFailed" class="material-symbols-outlined">arrow_drop_down</span></button>
    </div>

    <!-- Contenedor de los detalles -->
    <div>    
        <div id="details_failed_to_score" class="container-details">
            <div class="details">
                <span>Local</span>
                <span><?= $failed_to_score["home"] ?></span>
            </div>
            <div class="details">
                <span>Visita</span>
                <span><?= $failed_to_score["away"] ?></span>
            </div>
        </div>
    </div>
</div>