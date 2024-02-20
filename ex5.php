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
        echo "This beverage is $this->temperature and $this->color whith a price of $this->price. <br>";
    }

    public function changePrice() {
        $this->price = 3.5;
        $this->getInfo();
    }
}

$cola = new beverage("black", 2, "cold");
$cola->getInfo();
$cola->changePrice();