<div id="containerSearch"  class="container-search">
    <div class="container-search-bar">
        <div class="form-search" action="">
            <span class="material-symbols-outlined">search</span>
            <input onkeyup="searchTeamsLeague(this.value, '<?php echo $url; ?>');" type="text" id="search_team" name="search_team" placeholder="Buscar...">
        </div>
    </div>
    <div id="results-search" class="container-search-result">
        <div class="container-search-parameter">
            <button id="n">Nombre</button>   
            <button id="c">Ciudad</button> 
            <button id="e">Estadio</button> 
        </div>
        <div class="teams-search-result" id="teams-result">
            <!-- Resultados de la Búsqueda -->        
        </div> 
    </div>
</div>