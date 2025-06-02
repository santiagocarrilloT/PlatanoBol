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

//Adquirir la alineación de un equipo
if(isset($_GET["lineup_formation"])){
  $data_form_lineup = $lineup->get_lineup_formation($_GET["lineup_formation"]);
  echo $data_form_lineup;
  exit;
}

//Guardar la alinación de un equipo
if(isset($_GET["lineup_form"])){
    $data_form_lineup = $lineup->valid_existing_lineup($_GET["lineup_form"]);
    
    if($data_form_lineup){
        $lineup->update_lineup($_GET["lineup_form"], $_GET["lineup_component"]);
        echo json_encode(["success" => "Alineacion actualizada correctamente"]);
        exit;
    } else {
        $lineup->save_lineup($_GET["lineup_form"], $_GET["lineup_component"]);
        echo json_encode(["success" => "Alineacion guardada correctamente"]);
        exit;
    }
}
?>