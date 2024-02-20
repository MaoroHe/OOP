<?php

declare(strict_types=1);

class beverage {
    protected string $color;
    protected float $price;
    protected string $temperature = "cold";

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
}

$duvel = new beverage("Blond", 3.5, "Cold");
$duvel->colorChange('light');

class beer extends beverage {
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() {
        return "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color. <br>";
    }
}


$alcohol = new beer('blond', 3.5, 'Cold',"Duvel", 8.5);

$duvel->getInfo();
echo $alcohol->getAlcoholPercentage();