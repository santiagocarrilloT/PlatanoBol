<?php
    declare(strict_types=1);

    class SuperHero{
        //Propiedades y los métodos
        public $level;

        //Constructor
        //Las propiedades se inicializan en el constructor (>PHP-8.0)
        //Propiedad solo lectura (readonly) ej: public readonly string $name;
        //Propiedad solo escritura (write-only) ej: public writeonly string $name;
        //Propiedad solo lectura y escritura (read-write) ej: public string $name;
        //Propiedad privada (private) ej: private string $name;
        public function __construct( private $name, private array $powers, private $planet, private $colors){
            $this->name = $name;
            $this->powers = $powers;
            $this->planet = $planet;
            $this->colors = $colors;
            $this->level = 0;
        }

        public function attack(){
            return "¡$this->name! ataca con su $this->powers";
        }

        public function defend(){
            $cadenaPowers = implode(",", $this->powers);
            return "¡$this->name! con su gran color $this->colors viene a defender el planete $this->planet con su grandes $cadenaPowers!";
        }

        //Se puede devolver un objeto del superheroe desde la función estática
        static function getHeroObject(string $name, array $powers, string $planet, string $colors, int $level){
            return new self($name, $powers, $planet, $colors);
        }

        static function randomHeroe(){
            $names = ["Superman", "Batman", "Ironman", "Hulk", "Thor"];
            $powers = ["Invisibilidad", "volar", "rayo de Luz", "telepatía", "telequinesis"];
            $planets = ["Tierra", "Marte", "Jupiter", "Venus", "Saturno"];
            $colors = ["Rojo", "Verde", "Azul", "Amarillo", "Naranja"];
            $name = $names[array_rand($names)];
            $power = $powers[array_rand($powers)];
            $planets = $planets[array_rand($planets)];
            $colors = $colors[array_rand($colors)];
            $level = rand(1, 100);
            return new self($name, [$power], $planets, $colors, $level);
        }
    }

    echo SuperHero::getHeroObject("Batman", ["Rayo de Luz", "Velocidad"], "Jupiter", "Rojo", 20);
    $heroRand = SuperHero::randomHeroe();
    echo $heroRand->attack();

    $hero = new SuperHero("Superman", ["Invisibilidad", "volar", "rayo de Luz"], "Krypton","Verde");
    echo $hero->$attack();
?>