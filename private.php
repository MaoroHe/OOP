<?php

declare(strict_types=1);

class beverage {
    private string $color;
    private float $price;
    private string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        echo "This beverage is $this->temperature and $this->color. <br>";
    }

    public function colorChange($colors) {
        $this->color = $colors;
        $this->getInfo();
    }

    public function getColor() {
        return $this->color;
    }
}

$duvel = new beverage("Blond", 3.5, "Cold");
$duvel->colorChange('light');
$colorBev = $duvel->getColor();

class beer {
    private string $name;
    private float $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage) {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage($colorBev) {
        echo "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $colorBev color. <br>";
    }
}


$alcohol = new beer("Duvel", 8.5);

$duvel->getInfo();
$alcohol->getAlcoholPercentage($colorBev);