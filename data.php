<h1> Date Time </h1>
<?php 

    $hour = date("h");
?>

<p>

<?php

        if( $hour > 9 || $hour < 18 ){
            echo "<b>Day Time</b>";
        }else{

            echo "<i>Night Time</i>";
        }
?>
</p>