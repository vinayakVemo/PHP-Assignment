<!--Q1.Create a program for a shopping cart. If the total price
is over Rs. 5000, apply a 10% discount; otherwise, log
the original price. -->
<?php
function calculateTotalPrice($items) {
$totalPrice =0;
    foreach ($items as $item) {
        $totalPrice += $item['price'];
    }
    if ($totalPrice > 5000){
        $discountedPrice = $totalPrice * 0.9;
        return $discountedPrice;
    }
    else{
    return $totalPrice;
    }
}
// Example usage:
$items = array(
    array ("item" => "Shirt", "price" => 1500),
    array ("item" => "Jeans", "price" => 2500),
    array("item" => "Shoes", "price" => 1200)
);
$totalPrice = calculateTotalPrice($items);
echo "Total Price: Rs. " . $totalPrice;
?>