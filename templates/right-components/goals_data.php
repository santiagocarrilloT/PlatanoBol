<div class="container-minutes-goals">
    <h3>Goles Anotados</h3>
    <div>
        <graph-component tipoGoles="Goles Anotados" dataGraph='<?php echo json_encode($goals["for"]["minute"]); ?>'></graph-component>
    </div>
</div>
<div class="container-minutes-goals">
    <h3>Goles Recibidos</h3>
    <div>
        <graph-component tipoGoles="Goles Recibidos" dataGraph='<?php echo json_encode($goals["against"]["minute"]); ?>'></graph-component>
    </div>
</div>