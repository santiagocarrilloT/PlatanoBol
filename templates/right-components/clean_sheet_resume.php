<div onclick="toggleDetails('details_clean_sheet', 'expandedClean')" class="container-parent-details">
    <!-- Contenedor del botón desplegable -->
    <div class="container-init-details">
        <span>Porterías en Cero</span>
        <button class="button-points" ><span id="expandedClean" class="material-symbols-outlined">arrow_drop_down</span>
    </div>

    <!-- Contenedor de los detalles -->
    <div>    
        <div id="details_clean_sheet" class="container-details">
            <div class="details">
                <span>Local</span>
                <span><?= $clean_sheet["home"] ?></span>
            </div>
            <div class="details">
                <span>Visita</span>
                <span><?= $clean_sheet["away"] ?></span>
            </div>
        </div>
    </div>
</div>