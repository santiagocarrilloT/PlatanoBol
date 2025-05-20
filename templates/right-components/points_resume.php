<div onclick="toggleDetails('details_points')" class="container-parent-details">
    <!-- Contenedor del botón desplegable -->
    <div class="container-init-details">
        <span>Puntos Totales</span>
        <button class="button-points"><span class="material-icons">arrow_drop_down</span></button>
    </div>

    <!-- Contenedor de los detalles -->
    <div>    
        <div id="details_points" class="container-details">
            <div class="details">
                <span>Puntos Ganados</span>
                <span><?= $positivePoints ?></span>
            </div>
            <div class="details">
                <span>Puntos Perdidos</span>
                <span><?= $negativePoints ?></span>
            </div>
        </div>
    </div>
</div>