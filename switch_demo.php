<?php

//************************************
// Function of the file switch_demo.php:
// To demonstrate the switch function
// Author: J. de Klijn
// Date of creation: 23 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************


$iExamScore = 5.4;                        // Set the score value

//if($iExamScore>=8){
//  $sScore = "goed";
//}elseif($iExamScore>=5.6){               // Check the score value
//  $sScore = "voldoende";                // If true then pass
//}else{
//  $sScore = "onvoldoende";              // If not a fail
//}

switch(round($iExamScore)){
    case 10:  $sScore = "uitmuntend"; break;                           
    case 9:   $sScore = "uitmuntend"; break;                           
    case 8:   $sScore = "goed"; break;
    case 7:   $sScore = "goed"; break;
    case 6:   $sScore = "voldoende"; break;
    case 5:   $sScore = "onvoldoende"; break;
    case 4:   $sScore = "onvoldoende"; break;
    case 3:   $sScore = "onvoldoende"; break;
    case 2:   $sScore = "uitermate teleurstellende score"; break;
    case 1:   $sScore = "uitermate teleurstellende score"; break;
    default : $sScore = "FOUTMELDING"; echo("Er zit een fout in je berekening, check je code!");
}

echo("U had voor u examen een: ".$iExamScore."<br/>");
echo("U heeft een ".$sScore." behaald voor u examen."); // Show the score to the user
