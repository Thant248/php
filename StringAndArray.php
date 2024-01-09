<?php

    $str = "HI My Lovely Pone Pone";

    echo  substr($str, 0, 6);

    echo strlen($str);

?>

<?php

        $name = "Come Here, quick, quick.";

        echo $name;
    
        echo str_replace("Come", "Pone", $name);
?>

<?php

        function reverse(String $str)  {

            $answer = true;
            $me = strrev($str);

            if ($str == $me){

                return  var_dump($answer);
            }else 
            return  var_dump(!$answer);
        

        }

       echo  reverse("level");
        

?>