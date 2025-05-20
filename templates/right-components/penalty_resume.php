<div onclick="toggleDetails('details_penalty')" class="container-parent-details">
    <!-- Contenedor del botón desplegable -->
    <div class="container-init-details">
        <span>Penaltis</span>
        <button class="button-points"><span class="material-icons">arrow_drop_down</span></button>
    </div>

    <!-- Contenedor de los detalles -->
    <div>    
        <div id="details_penalty" class="container-details">
            <div class="details">
                <span>Penaltis Anotados</span>
                <span><?= $penalty["scored"]["total"] ?></span>
            </div>
            <div class="details">
                <span>Penaltis Errados</span>
                <span><?= $penalty["missed"]["total"] ?></span>
            </div>
        </div>
    </div>
</div>