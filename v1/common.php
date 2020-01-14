<?php

function arrayNicePrint($array)
{
    if(is_array($array)){
        $i = 0;
        foreach ($array as $key => $value)
        {
            echo "[$i] : [$key] => [$value] <br>";
            $i++;
        }
    } else {
        echo 'No Array!';
    }
    
}