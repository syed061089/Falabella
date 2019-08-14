<?php 
    $num_count = 100;
    $div_3 = "Linio";
    $div_5 = "IT";
    $div_both = "Linianos";

    for($i=1;$i<=$num_count;$i++)
    {
        switch($i)
        {
            case ($i%15==0):
            echo $div_both."</br>";
            break;
            case ($i%3==0):
            echo $div_3."</br>";
            break;
            case ($i%5==0):
            echo $div_5."</br>";
            break;
            default:
            echo $i."</br>";
            break;
        }
    }
?>