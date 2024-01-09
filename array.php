 <?php

    $users = array ("pone pone", "chit", "pone chit");
    $fruits = ["apple", "durian", "fish", "orange"];

    print_r ($users);
    print_r ($fruits);
    var_dump ($fruits);
?> 


<?php
        $fruits = ["apple", "mango"];
        $fruits[] = 'date';
        $fruits = "orange";
        

        print_r ($fruits);

        print_r ($fruits[3]);
?>

<?php 

    $array = [
        ["name"=> "pone pone", "pone chit", "chit pone", "age" => "22", "23", "24"],
    ];

    

    var_dump ($array);

    print_r ($array[0]['name']);
 

?>

//Associative Array
<?php

    $user = ["John Doe", 21];

    [$name, $age] = $user;

    echo $name;
 
 ?>

 <?php

        $user = ["Thomas Hardy", 33];

        list($name, $age) = $user;

        echo $name;

?>

//array spread php v 8

<?php

    $user = ["name" =>"Alice", "age" => 22];

    ["name" => $name, "age" => $age] = $user;

    print_r ($user);
    echo $name;

?>
//array spread php v5


<?php

        $user = ["Pone Pone", "Chit Myo"];

        $user1 = [...$user, "Thant"];

        print_r ($user1);

    
?>


//array methods 

<?php

    $user = ["John Doe", "Thomas Hardey", "BOB"];



    echo count ($user); // counting

    echo in_array('John Doe', $user); // showing array index

    echo is_array ($user); // is array or not if not show Empty else 1

    echo array_search ('BOB', $user); //same as in_array

   echo array_push ($user, "Meme"); // adding another array in exists

  echo  array_pop ($user); // deleting last index

   echo array_shift ($user); // delete first index

   $result = array_splice ($user, 1);

   print_r ($result);

   print_r($user);

   $add = array_push($user, "hi", "me", "you", "and", "i");
   print_r ($user);

   $result = array_splice ($user, 2);

   print_r ($result);

  print_r ($keys = array_keys ($result));

  print_r ($values = array_values ($result));


 //sorting

  $usa = ["tom" => 23, "thomas" => 32, "hardy" => 21, "james" => 12, "yeeezy" => 11];
  sort ($usa);

  print_r ($usa);

  //index 
  $usb = ["tom" => 23, "thomas" => 32, "hardy" => 21, "james" => 12, "yeeezy" => 11];
  ksort($usb);
  print_r($usb);

  //reverse sort 

  $usc = ["tom" => 23, "thomas" => 32, "hardy" => 21, "james" => 12, "yeeezy" => 11];
  rsort ($usc);
  print_r ($usc);

  //index reverse sort
  $usd = ["tom" => 23, "thomas" => 32, "hardy" => 21, "james" => 12, "yeeezy" => 11];
  krsort ($usd);
  print_r  ($usd);

  //explode

    $pone = "Hi My Name is Pone Chit . Strongest girl in human alive"; 

   $arr =  explode(" ", $pone);
    print_r($arr);

  //implode

  $arr1 = implode(" ", $arr);
  print_r($arr1);  


?>