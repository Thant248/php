<?php


$num = [1,2,3,4,6];
$result = 0;

    function looping() {

        global $num;
        global $result;
        //forEach

        foreach ($num as $nu){

            $result = $nu;
        }
        echo $result; 
    }

    function looping1 () {

        global $num;    
        global $result;

        for ($i = 0; $i < count($num); $i++) {

          echo  $result = $num[$i];

        }
    }

    function looping3 () {

        $name = ["name" => "Pone Pone", "Chit Pone"];
        $user = ["Alice" => 98, "Bo Bo" => 99];

        $result = [];

        foreach ($user as $key => $value) {
            $result[] = $key;

        }

        print_r ($result);

    }

    looping();
    looping1();
    looping3();

?>



<?php
    //rest parameter new version
    function   solution ($a, ... $b) {

        print_r ($a);
        print_r ($b);

    }

    //old version rest parameter

    function solutions() {

        $args = func_get_args();

        print_r ($args);
    }

    solutions (1,2,3,4,5);
    solution (1, 2, 3, 4, 5);


?>