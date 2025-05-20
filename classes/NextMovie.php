<?php 

declare(strict_types=1);

class NextMovie {
    public function __construct(private string $title, private string $following_production, private int $days_until, private string $image, private string $release_date, private string $overview){
        $this->title = $title;
        $this->following_production = $following_production;
        $this->days_until = $days_until;
        $this->image = $image;
        $this->release_date = $release_date;
        $this->overview = $overview;
    }

    static function get_data_url($url): NextMovie {
        $apiContent = file_get_contents($url);
        $data = json_decode($apiContent, true);
        return new self(
            $data["title"],
            $data["following_production"]["title"] ?? "Desconocido",
            $data["days_until"],
            $data["poster_url"],
            $data["release_date"],
            $data["overview"]
        );
    }

    public function get_until_message(): string {
        return match (true){
            $this->days_until <= 0 => "Ya se estreno",
            $this->days_until == 1 => "Estrena mañana",
            $this->days_until > 1 && $this->days_until <= 7 => "Estrena en {$this->days_until} días",
            $this->days_until > 7 && $this->days_until <= 30 => "Estrena en un mes", 
            default => "Estrena en más de un mes",
        };
    }

    public function get_data() {
        return get_object_vars($this);
    }
}
?>