<?php
    // without class

$shop = array(
    "banana" => [
        "quantity" => 6,
        "price" => 1,
    ],

    "apple" => [
        "quantity" => 3,
        "price" => 1.5,
    ],

    "bottle of wine" => [
        "quantity" => 2,
        "price" => 10,
    ],
);

$sum = 0;
$sumWithTax = 0;
foreach ($shop as $product) {
    $total = $product['quantity'] * $product['price'];
    $sum += $total;

    //  with tax

    if ($product == 'banana' || $product == 'apple') {
        $fruitTax = $total/100*6;

        $sumWithTax += $total - $fruitTax;
    } else {
        $wineTax = $total/100*21;

        $sumWithTax += $total - $wineTax;
    }
}
//echo $sum . '<br>'; 30.5
//echo $sumWithTax . '<br>';

    // with class

class Product {
    private string $name;
    private int $quantity;
    private float $price;
    private string $classes;

    public function __construct(string $name, int $quantity, float $price, string $classes) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->classes = $classes;
    }

    public function total() {
        return $this->quantity * $this->price;
    }

    public function totalWithTax() {
        $totalTax = 0;

        if ($this->classes == 'fruit') {
            $fruitTax = $this->total()/100*6;
            return $this->total() - $fruitTax;
        } else {
            $wineTax = $this->total()/100*21;
            return $this->total() - $wineTax;
        }
    }

    public function discount() {
        if ($this->classes == 'fruit') {
            return $this->total()/100*50;
        }
    }
}

$banana = new Product('banana', 6, 1, 'fruit');
$apples = new Product('apple', 3, 1.5, 'fruit');
$wines = new Product('bottle of wine', 2, 10, 'alcohol');

$totalClass = $banana->total() + $apples->total() + $wines->total();
$totalClassTaxed = $banana->totalWithTax() + $apples->totalWithTax() + $wines->totalWithTax();

echo $totalClass . '<br>';
echo $totalClassTaxed . '<br>';

// 50% banana

echo $banana->discount() . '<br>';