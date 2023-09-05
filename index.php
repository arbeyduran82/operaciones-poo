<?php
    require_once ("Operation.php");

    //object creation, "addition".
    $Operation_1 = new Operation(20, 6);
    $totalAdd = $Operation_1->getAdd();
    echo "Total Addition: " . $totalAdd . "<br>";

    $Operation_1 = new Operation(20, 6);
    $totalAdd = $Operation_1->getSubtract();
    echo "Total Sustraction: " . $totalAdd . "<br>";

    $Operation_1 = new Operation(20, 6);
    $totalAdd = $Operation_1->getProduct();
    echo "Total Product: " . $totalAdd . "<br>";

    $Operation_1 = new Operation(20, 6);
    $totalAdd = $Operation_1->getDivision();
    echo "Total Division: " . $totalAdd . "<br>";

?>