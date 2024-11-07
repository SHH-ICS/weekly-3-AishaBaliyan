<?php
define("PRICE_LARGE", 6.00);
define("PRICE_EXTRA_LARGE", 10.00);
define("PRICE_TOPPING_1", 1.00);
define("PRICE_TOPPING_2", 1.75);
define("PRICE_TOPPING_3", 2.50);
define("PRICE_TOPPING_4", 3.35);
define("TAX_RATE", 0.13); // 13% HST

$size = strtolower(trim($_POST['size']));
$toppings = intval($_POST['toppings']);

if ($size !== "large" && $size !== "extra large") {
  die("Plesase choose either 'Large' or 'Extra Large' for the pizza size");
}

if ($toppings < 1 || $toppings > 4) {
  die("Please choose a number of toppings between 1 and 4, no more and no less");
}

$base_price = ($size == "large") ? PRICE_LARGE : PRICE_EXTRA_LARGE;

switch ($toppings) {
  case 1:
    $topping_price = PRICE_TOPPING_1;
    break;
  case 2:
    $topping_price = PRICE_TOPPING_2;
    break;
  case 3:
    $topping_price = PRICE_TOPPING_3;
    break;
  case 4:
    $topping_price = PRICE_TOPPING_4;
    break;
  default:
    $topping_price = 0;
}

$subtotal = $base_price + $topping_price;

$tax = $subtotal * TAX_RATE;
$total_cost = $subtotal + $tax;

echo "<h2>Order Summary</h2>";
echo "Pizza Size: " . ucfirst($size) . "<br>";
echo "Number of Toppings: $toppings<br>";
echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
echo "Tax (13% HST): $" . number_format($tax, 2) . "<br>";
echo "Total Cost: $" . number_format($total_cost, 2);
