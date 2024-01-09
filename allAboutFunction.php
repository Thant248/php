<?php

    $name = "Alice";

    $two = function ($a) {

        echo $a;
    };

    $three = function() use ($name){

        echo "Hello $name ";
    };

    $three();
    $two($name);
?>

<?php


    $b = 5;
    $two = fn ($a) => $a * $b;

    echo $two(2, 3);
    echo $b;

?>

<?php

    $name = "pone";

    $change = function () use ($name){

        $name = "chit";
        echo "hello $name";
    };

    $change();

    echo $name;

?>


<?php

//in php 7.3 argument

    function nameing($name, $age, $email){

        echo "Hi my name is $name . I'm $age years old. This $email is my mail";
    }

    nameing("pone Chit", 23, "myoponeponechit123@gmail.com");

    //in php 8.3 argument doesn't need to be sorting
    function args ($name, $age, $email){    
        
        echo "Hi my name is $name . I'm $age years old. This $email is my mail";
    }
    args (age: 12, name: "ArKar", email: "arkarphyoe123@gmail.com");

?>
