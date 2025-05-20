<div onclick="toggleDetails('details_streak')" class="container-parent-details">
    <!-- Contenedor del botón desplegable -->
    <div class="container-init-details">
        <span>Rachas</span>
        <button class="button-points"><span class="material-icons">arrow_drop_down</span></button>
    </div>

    <!-- Contenedor de los detalles -->
    <div>    
        <div id="details_streak" class="container-details">
            <div class="details">
                <span>Victorias</span>
                <span><?= $biggest["streak"]["wins"] ?></span>
            </div>
            <div class="details">
                <span>Empates</span>
                <span><?= $biggest["streak"]["draws"] ?></span>
            </div>
            <div class="details">
                <span>Derrotas</span>
                <span><?= $biggest["streak"]["loses"] ?></span>
            </div>
        </div>
    </div>
</div>