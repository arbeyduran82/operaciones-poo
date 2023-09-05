<?php
    require_once ("Operation.php");

    //object creation, "addition".
    $Operation_1 = new Operation(20, 6);
    $totalAdd = $Operation_1->getAdd();
    echo $totalAdd;

?>