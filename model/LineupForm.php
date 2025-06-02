<?php

require_once "../connection/connection.php";

class LineupForm extends Connection {

    public function get_lineup($lineup_text){
        $conectar = parent::conexion();
        parent::set_Names();
        $sql = "SELECT user_id, lineup_form FROM lineups WHERE lineup_team = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $lineup_text);
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
        
    }

    public function get_lineup_formation($lineup_text){
        $conectar = parent::conexion();
        parent::set_Names();
        $sql = "SELECT user_id, lineup_form FROM lineups WHERE lineup_team = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $lineup_text);
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }

    public function valid_existing_lineup($lineup_text){
        $conectar = parent::conexion();
        parent::set_Names();
        $sql = "SELECT EXISTS(SELECT 1 FROM lineups WHERE lineup_team = ?) AS exist";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $lineup_text);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($result[0]['exist'] == '1' ? true : false);
    }

    public function save_lineup($lineup_form, $lineup_component){
        $conectar = parent::conexion();
        parent::set_Names();
        $sql = "INSERT INTO lineups (lineup_form, lineup_team) VALUES (?, ?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $lineup_component);
        $sql->bindValue(2, $lineup_form);
        return $sql->execute();

    }

    public function update_lineup($lineup_form, $lineup_component){
        $conectar = parent::conexion();
        parent::set_Names();
        $sql = "UPDATE lineups SET lineup_form = ? WHERE lineup_team = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $lineup_component);
        $sql->bindValue(2, $lineup_form);
        return $sql->execute();
    }
}

?>