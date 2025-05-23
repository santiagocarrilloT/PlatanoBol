<?php 
declare(strict_types=1);

class FixtureTeam{
    
    function __construct(public string $id_local_team, public string $local_team, public string $local_team_logo, public string $id_visitor_team ,public string $visitor_team, public string $visitor_team_logo, public int $result_local, public int $result_visitor, public string $stadium, public string $competition, public string $city, public string $date, public string $time, public string $league_logo)
    {
        $this->id_local_team = $id_local_team;
        $this->local_team = $local_team;
        $this->local_team_logo = $local_team_logo;
        $this->id_visitor_team = $id_visitor_team;
        $this->visitor_team = $visitor_team;
        $this->visitor_team_logo = $visitor_team_logo;
        $this->result_local = $result_local;
        $this->result_visitor = $result_visitor;
        $this->stadium = $stadium;
        $this->competition = $competition;
        $this->city = $city;
        $this->date = $date;
        $this->league_logo = $league_logo;
    }

    static function data_fixture_curl(string $API_FOOTBALL_URL, string $API_KEY, string $API_HOST): array {
        /* $curl = curl_init();
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

        foreach ($data["response"] as $info){
            $fixture_team[] = new self (
                $info["teams"]["home"]["id"],
                $info["teams"]["home"]["name"],
                $info["teams"]["home"]["logo"],
                $info["teams"]["away"]["id"],
                $info["teams"]["away"]["name"],
                $info["teams"]["away"]["logo"],
                $info["goals"]["home"],
                $info["goals"]["away"],
                $info["fixture"]["venue"]["name"],
                $info["league"]["name"],
                $info["fixture"]["venue"]["city"],
                date("Y-m-d", strtotime($info["fixture"]["date"])),
                date("H:i:s", strtotime($info["fixture"]["date"])),
                $info["league"]["logo"],
            );
        } */

        $fixture_team = [
            new self(
                "1127",
                "Deportivo Cali",
                "https://media.api-sports.io/football/teams/1127.png",
                "1128",
                "Independiente Medellín",
                "https://media.api-sports.io/football/teams/1128.png",
                2,
                1,
                "Estadio Deportivo Cali",
                "Liga BetPlay",
                "Cali",
                date("Y-m-d", strtotime("2023-10-01")),
                date("H:i:s", strtotime("2023-10-01 18:00:00")),
                "https://media.api-sports.io/football/leagues/239.png"
            ), 
            new self(
                "1127",
                "Deportivo Cali",
                "https://media.api-sports.io/football/teams/1127.png",
                "1129",
                "Envigado",
                "https://media.api-sports.io/football/teams/1129.png",
                1,
                1,
                "Estadio Deportivo Cali",
                "Liga BetPlay",
                "Cali",
                date("Y-m-d", strtotime("2023-10-08")),
                date("H:i:s", strtotime("2023-10-08 18:00:00")),
                "https://media.api-sports.io/football/leagues/239.png"
            ),
            new self(
                "1127",
                "Deportivo Cali",
                "https://media.api-sports.io/football/teams/1127.png",
                "1130",
                "Huila",
                "https://media.api-sports.io/football/teams/1130.png",
                3,
                2,
                "Estadio Deportivo Cali",
                "Liga BetPlay",
                "Cali",
                date("Y-m-d", strtotime("2023-10-15")),
                date("H:i:s", strtotime("2023-10-15 18:00:00")),
                "https://media.api-sports.io/football/leagues/239.png"
            ),
            new self(
                "1127",
                "Deportivo Cali",
                "https://media.api-sports.io/football/teams/1127.png",
                "1131",
                "Bucaramanga",
                "https://media.api-sports.io/football/teams/1131.png",
                0,
                0,
                "Estadio Deportivo Cali",
                "Liga BetPlay",
                "Cali",
                date("Y-m-d", strtotime("2023-10-22")),
                date("H:i:s", strtotime("2023-10-22 18:00:00")),
                "https://media.api-sports.io/football/leagues/239.png"
            )
        ];
        return $fixture_team;
    }

    public function get_data() {
        return get_object_vars($this);
    }
}
?>