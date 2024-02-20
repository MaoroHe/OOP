<?php

declare(strict_types=1);

class beverage {
    public string $color;
    public float $price;
    public string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        echo "This beverage is $this->temperature and $this->color. <br>";
    }
}

$cola = new beverage("black", 2, "cold");
$cola->getInfo();

class beer {
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage) {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() {
        echo "The alcohol percentage of $this->name is $this->alcoholPercentage %. <br>";
    }
}

$duvel = new beverage("Blond", 3.5, "Cold");
$alcohol = new beer("Duvel", 8.5);

$duvel->getInfo();
$alcohol->getAlcoholPercentage();
