<?php


 function yearly(int $ls, int $rate) : float {


    $percentage = $ls / 100;

    return $percentage * $rate;
}

function  monthly(int $ls, int $rate, int $month) : float {

    $yearly = yearly($ls, $rate);
    return $yearly / $month;
}

function  monthPerYear(int $ls, int $month) : float{

    $mpy = $ls / $month;
    return $mpy;
}

function totalRentPerYear(int $ls, int $rate , int $month) : float {

    $total = monthly($ls, $rate, $month) + monthPerYear($ls, $month);
    return $total;
}

$ls = 17000000;
$rate = 15;
$month = 12;


yearly($ls, $rate);
monthly($ls, $rate, $month);
monthPerYear($ls, $month);
echo totalRentPerYear($ls, $rate, $month);


?>