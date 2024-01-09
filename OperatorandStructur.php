<?php

    //ternary operator and null coalescing operator

    $name = "";

    print_r ($name ? $name : "Pone Chit");

    print_r ($name ?: " Pone  Pone");

    print_r (isset ($name) ? $name : "Thant Sin");


    //null coalescing operator

    print_r ($name ?? "Unknown");

    $result = "Pone Pone ";

    $name = " Pone Chit";
    $result ??= $name;

    echo $result;
?>



<?php

 //date time  and condition checking

   function dating() {
    $date = date("h");

    if ($date > 6 and $date < 12) {
        echo "day time";
    }else 
         echo "night time";
   }

   function date1() : void{

    $date = date("D");

    if ($date == "Sat"){
        echo "Today is Saturday";
    }else if ($date == "Sun") {
        echo "Today is Sunday";
    }else 
        echo "Today is WeekDay";  

   }
   //switch case 

   function switchingCase(){

    $result = Date ("D");

    switch ($result){
        case "Sat":
        case "Sun":
            echo "Today is Weekend";
            break ;
        case  "Mon":
        case  "Tue":
        case  "Wed":
        case  "Thu":
            echo "Today is Weekday";
            break;
        default: 
        echo "TGIF";
    }
    // match 

    function matching() {

        $date  = date("D");
        
        $result = match( $date) {

            "Sat", "Sun" => "Today is a Day",
            "Fri" => "TGIF",
            default => "Today is Weekday"
        };

    echo $result;
    }

   }

   dating();
   date1();
   switchingCase();
   matching();
?>


<?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");  // 2001-03-10 17:16:18 (the MySQL DATETIME format)

echo $today;
?>

