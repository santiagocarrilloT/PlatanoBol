<?php

function render_fields ($lineups){
    foreach ($lineups as $formation){
        switch ($formation["formation"]) {
            case '4-2-3-1':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-2-3-1</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-2-3-1" lineupsForm="
                    \'. . . . . . . . . . . .\'
                    \'. . . d2 . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . . . . d7 . . . . .\'
                    \'. . d3 . d6 . . . . . . .\'
                    \'d1 . . . . . . d10 . d9 . .\'
                    \'. . d4 . d5 . . . . . . .\'
                    \'. . . . . . d11 . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . d8 . . . . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;

            case '4-4-2':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-4-2</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-4-2" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . d2 . . d7 . . . . .\'    
                    \'. . . . . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . d3 . . d6 . . d9 . . .\'
                    \'d1 . . . . . . . . . . .\'
                    \'. . d4 . . d5 . . d10 . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . d8 . . d11 . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
                
            case '4-3-3':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-3-3</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-3-3" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . d2 . . . d10 . . . .\'    
                    \'. . . . . d6 . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . d3 . . . . . . . . .\'
                    \'d1 . . . d5 . . . d9 . . .\'
                    \'. . d4 . . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . . . d7 . . . . . .\'
                    \'. . . d8 . . . d11 . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
                
            case '4-3-1-2':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-3-1-2</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-3-1-2" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . . . . . . . . . .\'    
                    \'. . . d2 . d6 . . . . . .\'
                    \'. . . . . . . . d9 . . .\'
                    \'. . d3 . . . . . . . . .\'
                    \'d1 . . . d5 . d10 . . . . .\'
                    \'. . d4 . . . . . . . . .\'
                    \'. . . . . . . . d11 . . .\'
                    \'. . . d8 . d7 . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
                
            case '3-4-3':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>3-4-3</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="3-4-3" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . . . d2 . . . . . .\'    
                    \'. . d3 . . . . d7 . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . . d5 . . . . . . .\'
                    \'d1 . d6 . . . . . d9 . . .\'
                    \'. . . . d8 . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . d4 . . . . d10 . . . .\'
                    \'. . . . . d11 . . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
                
            case '4-4-1-1':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-4-1-1</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-4-1-1" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . d2 . . d7 . . . . .\'    
                    \'. . . . . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . d3 . . d6 . . . . . .\'
                    \'d1 . . . . . . d10 . d9 . .\'
                    \'. . d4 . . d5 . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    \'. . . d8 . . d11 . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
                
            case '3-4-2-1':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>3-4-2-1</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="3-4-2-1" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . . . . . . . . . .\'    
                    \'. . d3 . . d2 . . . . . .\'
                    \'. . . . . . . d7 . . . .\'
                    \'. . . . d5 . . . . . . .\'
                    \'d1 . d6 . . . . . . d9 . .\'
                    \'. . . . d8 . . . . . . .\'
                    \'. . . . . . . d10 . . . .\'
                    \'. . d4 . . d11 . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
            
            case '4-3-2-1':
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>4-3-2-1</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field lineupText="4-3-2-1" lineupsForm="
                    \'. . . . . . . . . . . .\'  
                    \'. . . . . . . . . . . .\'    
                    \'. . . d2 . d6 . . . . . .\'
                    \'. . . . . . . d10 . . . .\'
                    \'. . d3 . . . . . . . . .\'
                    \'d1 . . . d5 . . . . d9 . .\'
                    \'. . d4 . . . . . . . . .\'
                    \'. . . . . . . d11 . . . .\'
                    \'. . . d8 . d7 . . . . . .\'
                    \'. . . . . . . . . . . .\'
                    ">
                    </soccer-field>
                </div>';
                break;
            
                // Caso por defecto (por si no hay coincidencia con las formaciones disponibles)
            default:
                $formationHTML = '
                <div class="container-lineup-form">
                    <div class="container-lineup-text">
                        <span>Alineación:</span>
                        <span>' . $formation["formation"] . '</span>
                        <span>' . 'Jugados: ' . $formation["played"] .'</span>
                    </div>
                    <soccer-field-db lineupsForm=' . $formation["formation"] .' id="lineupField"></soccer-field-db>
                </div>';
                break;
        };
        echo $formationHTML;
    }
}

?>


<div class="container-lineups">
    <!-- Nueva alineación -->
    <div class="container-new-lineup">
        <h3>Alineaciones Utilizadas</h3>
        <button id="openModalBtn" class="new-lineup">+</button>
        <div id="modalNewLineup" class="div-new-lineup">
            <section class="modal-lineup">
                <div class="modal-lineup-content">
                    <div class="container-modal-close">
                        <div id="closeModalBtn" class="close-modal-lineup"><span>x</span></div>
                    </div>
                    <div>
                        <h3>Crear Nueva Alineación</h3>
                        
                        <!-- Formulario -->
                        <div id="inputNewLineup" class="input-new-lineup">
                            <!-- <span>Alineación:</span> -->
                            <input id="input1" maxlength="1" type="text" placeholder=""></input>
                            <span>-</span>
                            <input id="input2" maxlength="1" type="text" placeholder=""></input>
                            <span>-</span>
                            <input id="input3" maxlength="1" type="text" placeholder=""></input>
                            <span>-</span>
                            <input id="input4" maxlength="1" type="text" placeholder=""></input>
                            <span>-</span>
                            <input id="input5" maxlength="1" type="text" placeholder=""></input>
                        </div>

                        <!-- Nueva alineación -->
                        <new-soccer-field class="lineup-area"></new-soccer-field>

                        <!-- Botón Guardado -->
                        <div class="container-save-lineup">
                            <button id="buttonSaveLineup" class="button-save">Guardar Alineación</button>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
    
    <!-- Alineaciones Creadas -->
    <?= render_fields($lineups); ?>
</div>

