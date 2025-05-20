<?php
    //Archivos estrictos, para evitar que     
    declare(strict_types=1);
    
    require_once 'const.php';

    function render_template(string $template, array $data = [], array $data_forms = []){
       //Extrae variables del array asociativo
        extract($data);
        require "templates/$template.php";
    }

    function render_template_folder(string $template, string $folder, array $data = []){
        //Extrae variables del array asociativo
        extract($data);
        require "templates/$folder/$template.php";
    }
?>