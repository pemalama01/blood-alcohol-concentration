<?php

$weight = $_POST["weight"];
$unit = $_POST["unit"];
$gender = $_POST["gender"];  
$numDrinks = $_POST["drinks"];
$alcoholcontent = $_POST["alcohol_content"];
$time = $_POST["time_elapsed"]; 
global $totalAlcohol;
//  (Alcohol Consumed (grams) * 5.14) / (Weight (lbs) * Gender Constant) - 0.015 * Time Elapsed
function bac($gender,$unit,$weight,$alcoholcontent,$time,$numDrinks){
    
    $totalAlcohol = $alcoholcontent * $numDrinks;
    if($gender == "male")
    {
        if($unit=="kg")
        {
            $weight = $weight * 2.204623;

            return ($totalAlcohol*5.14) / ($weight*0.73) - 0.015 * $time;
          
        }
        elseif($unit=="lbs")
        {
         return ($totalAlcohol*5.14) / ($weight*0.73) - 0.015 * $time;    
        }

    }

    elseif($gender == "female")
    {
        if($unit=="kg")
        {
            $weight = $weight*2.204623;

            return ($totalAlcohol*5.14) / ($weight*0.66) - 0.015 * $time;
        }
        elseif($unit=="lbs")
        {
            return ($totalAlcohol*5.14) / ($weight*0.66) - 0.015 * $time;
        }
    }
}


$res = bac($gender, $unit, $weight, $alcoholcontent, $time, $numDrinks);

$message = $res > 0.08 ? "Check the beer" : "Safe to drive";

header("Location: index.php?bac=" . urlencode(round($res, 4)) . "&message=" . urlencode($message));
?>