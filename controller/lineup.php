<?php

require_once "../connection/connection.php";
require_once "../model/LineupForm.php";
$lineup = new LineupForm();

//Traer la alineación de un equipo
if(isset($_GET["lineup_text"])){
    $data_forms = $lineup->get_lineup($_GET["lineup_text"]);
    echo $data_forms;
    exit;
}
else{
    echo json_encode(["error" => "No se ha enviado el texto del alineacion"]);
} 

//Guardar la alinación de un equipo
if(isset($_GET["lineup_form"])){
    $lineup->save_lineup($_GET["lineup_form"], $_GET["lineup_component"]);
    if($lineup) {
    echo json_encode(["success" => "Alineación guardada correctamente"]);
    }
}
else {
    echo json_encode(["error" => "No se ha enviado el texto del alineacion"]);
} 

?>