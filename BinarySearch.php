<?php

    function binarySearch(  Array $arr,
                             $low, 
                             $high,
                              $key) : int  {


            
                 $mid = ($high+ $low) /2 ;

                 while ($low <= $high){

                    if ( $arr[$mid] < $key){

                       return $low = $mid + 1;
                    }else if ( $arr[$mid] == $key){

                        return $mid;
                    }else 
                                $high = $mid  - 1;
                 }

                 if ( $low > $high){
                    echo -1;
                 }
                
                 return -1;
    }


    $arr = [2,5,8,12,16,23,38,56,72,91];
    $high = count($arr);
    $low = 0;
    $target = 38;

    echo binarySearch($arr, $low, $high, $target);

?>