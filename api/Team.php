<?php 
declare(strict_types=1);

class TeamData{

    function __construct(public string $team_name, public string $team_logo, public int $team_id, public string $team_country, public string $country_logo ,public string $team_league, public string $league_logo, public string $season)
    {
        $this->team_name = $team_name;
        $this->team_logo = $team_logo;
        $this->team_id = $team_id;
        $this->team_country = $team_country;
        $this->country_logo = $country_logo;
        $this->team_league = $team_league;
        $this->league_logo = $league_logo;
        $this->season = $season;
    }

    static function data_team_curl(string $API_FOOTBALL_URL, string $API_KEY, string $API_HOST): TeamData {
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

        return new self(
            $data["response"]["team"]["name"],
            $data["response"]["team"]["logo"],
            $data["response"]["team"]["id"],
            $data["response"]["league"]["country"],
            $data["response"]["league"]["flag"],
            $data["response"]["league"]["name"],
            $data["response"]["league"]["logo"],
            $data["parameters"]["season"]
        );
    }

    public function get_data() {
        return get_object_vars($this);
    }
}

?>