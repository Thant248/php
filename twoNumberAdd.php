<?php


    

    function hell ($target, array $num) {

        for ( $i = 0; $i < count($num); $i++ ){

            for ($j = $i + 1 ; $j < count($num); $j++) {
                if ( $num[$i] + $num[$j] == $target ){
                    return [$num[$i], $num[$j]];
                }
            }

        }

        return [];
    }

    $number = [12, 13, 14, 15];
    $target = 25;

    $result = hell( $target, $number);
    print_r ($result);
 
?>