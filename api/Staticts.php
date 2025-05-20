<?php
declare(strict_types=1);

require_once "Team.php";

class Statics extends TeamData {

    function __construct(
        $team_name, 
        $team_logo, 
        $team_id, 
        $team_country,
        $country_logo,
        $team_league,
        $league_logo, 
        $season,
        private string $form,
        private array $fixtures,
        private array $goals,
        private array $biggest,
        private array $clean_sheet,
        private array $failed_to_score,
        private array $penalty,
        private array $lineups,
    )
    { 
        //Llamamos al constructor de la clase padre
        parent::__construct($team_name, $team_logo, $team_id, $team_country, $country_logo ,$team_league, $league_logo, $season);

        $this->team_name = $team_name;
        $this->team_logo = $team_logo;
        $this->team_id = $team_id;
        $this->team_country = $team_country;
        $this->country_logo = $country_logo;
        $this->team_league = $team_league;
        $this->league_logo = $league_logo;
        $this->season = $season;

        //Inicializamos las variables de la clase hija
        $this->form = $form;
        $this->fixtures = $fixtures;
        $this->goals = $goals;
        $this->biggest = $biggest;
        $this->clean_sheet = $clean_sheet;
        $this->failed_to_score = $failed_to_score;
        $this->penalty = $penalty;
        $this->lineups = $lineups;
    }

    static function data_team_curl(string $API_FOOTBALL_URL, string $API_KEY, string $API_HOST): Statics {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $API_FOOTBALL_URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-key: " . $API_KEY,
                "x-rapidapi-host: " . $API_HOST
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);

        if(empty($data["response"])) {
            throw new Exception("No se encontraron datos de equipo.");
        }
        else{
            return new Self(
                // Team data
                $data["response"]["team"]["name"],
                $data["response"]["team"]["logo"],
                $data["response"]["team"]["id"],
                $data["response"]["league"]["country"],
                $data["response"]["league"]["flag"],
                $data["response"]["league"]["name"],
                $data["response"]["league"]["logo"],
                $data["parameters"]["season"],
    
                // Statics data
                $data["response"]["form"],
                $data["response"]["fixtures"],
                $data["response"]["goals"],
                $data["response"]["biggest"],
                $data["response"]["clean_sheet"],
                $data["response"]["failed_to_score"],
                $data["response"]["penalty"],
                $data["response"]["lineups"],
            );
        }
    }

    public function get_total_points(): array {
        $positivePoints = 0;
        $negativePoints = 0;
        $resultGames = str_split($this->form);
        foreach ($resultGames as $results){
            switch ($results) {
                case "W":
                    $positivePoints += 3;
                    break;
                case "D":
                    $positivePoints += 1;
                    break;
                case "L":
                    $negativePoints += 1;
                    break;
                default:
                    break;
            }
        };
        return ["positivePoints" => $positivePoints, "negativePoints" => $negativePoints];
    }

    public function get_total_points_2(): array {
        return [$this->fixtures["draws"]["total"] + ($this->fixtures["wins"]["total"]*3), ($this->fixtures["loses"]["total"]*3)];
    }

    public function get_form() {
        $data_forms = explode(" ", $this->form);
    }


    public function get_data() {
        return get_object_vars($this);
    }
}
 
 ?>