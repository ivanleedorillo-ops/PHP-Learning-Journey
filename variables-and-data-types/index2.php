<?php 
    $food = "Adobo";
    $quantity = 3;
    $price = 4.99;
    $total = null;

    echo "You have Ordered {$quantity}x {$food} <br>";
    $total = $quantity * $price;
    echo "Your total is: \$ {$total} <br>";
?> 