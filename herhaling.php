<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showAllUsersOnSurname(){
    $sQuery = "SELECT * FROM `users` ORDER BY `sSurname`";
    $aFetchedResults = executeQuery($sQuery);
    foreach($aFetchedResults as $aRecord){
        echo("De naam is: ".$aRecord['sSurname']."<br/>");
    }
}

function showAllUsersOnRecordnumber(){
    $sQuery = "SELECT * FROM `users` ORDER BY `iID_recordnumber`";
    $aFetchedResults = executeQuery($sQuery);
    foreach($aFetchedResults as $aRecord){
        echo("De naam is: ".$aRecord['sSurname']."<br/>");
    }
}

function createWebpage($p_sTitle,$p_aParagraphs){
    echo("<html><head><title>".$p_sTitle."</title></head><body>");
    foreach($p_aParagraphs as $sParagraph){
        echo("<p>".$sParagraph."</p>");
    }
    echo("</body></html>");
}

// echo();  To display text on the screen.
echo("<b class='bold text-center'>Hello world<b>");
echo($sCity);
echo("Hallo jij woont in: ".$sCity);
echo("U bent ".$sFirstname." ".$sInsertion." ".$sSurname);
$sSql = "Select * from `database` where `Surname`='".$Surname."';";

// Form to gather new data for the database
echo("
<form method='post'>
    Uw voornaam: <input type='text' name='sFirtsname'>
    <input type='submit' value='Verstuur'>
    <button type='submit'>Verstuur</button>
</form>
");
// $_POST['sFirstname'];
$sFirstname = $_POST['sFirstname'];
// Variable integer is used for whole numbers -123456789 - 123456789
$iHomeNumber = 2345;
// Variable float is used for decimal numbers
$fPi = 99876655543.1456885439125;
// Double
// Boolean is used to a yes or no situation 1 or 0, true or false
$bSuccess = false;
$bSuccess = true;
// Date variables are used to store a date/time
$dToday = date('d-m-Y');
// Array is used to store one or more variables.
$aWeekdays = array("Ma","Di","Wo","Do","Vr");

// if(Condtion==true){Execute this code}else{execute the other code}

if(!empty($_POST)){
    $sFirstname = $_POST['sFirstname'];
}
$iNumberOne = 6;

if($iNumberOne > 8){
    echo("Ruime voldoende");
}elseif($iNumberOne > 5){
    echo("Voldoende");
}else{
    echo("Onvoldoende");
}

// Switch is used to verify multiple conditions

switch($iNumberOne){
    case 1: echo("U kunt beter stoppen met leren");break;
    case 2: echo("U kunt bijna zeker gaan stoppen met leren");break;
    case 3: echo("Een zware onvoldoende");break;
    case 4: echo("Een zware onvoldoende");break;
    case 5: echo("Een zware onvoldoende");break;
    case 6: echo("Een zware onvoldoende");break;
    case 7: echo("Een zware onvoldoende");break;
    case 8: echo("Een zware onvoldoende");break;
    case 9: echo("Een zware onvoldoende");break;
    case 10: echo("Een zware onvoldoende");break;
    default: echo("error: invalid number iNumberOne");
}

// Array is used to store multiple variables
// Keys values      [0]  [1]  [2]  [3]  [4]
$aWeekdays = array("Ma","Di","Wo","Do","Vr");
echo("Vandaag is het: ".$aWeekdays[3]);
$aAddress = array();
$aAddress['Street'] = "Dorpstraat";
$aAddress['Housenumber'] = 34;
$aAddress['Postalcode'] = "6543 AA";
$aAddress['City'] = "Heerlen";
echo("Uw huisnummer is :". $aAddress['Housenumber']);

//                        [0]       [1]
$aNestedArray = array($aWeekdays,$aAddress);
echo("Morgen is het :".$aNestedArray[0][4]);
echo("U postcode is: ".$aNestedArray[1]['Postalcode']);

// The for() statement is used to loop thru code

for($iRecordNumber=1;$iRecordNumber<=10;$iRecordNumber++){
    echo("This is number: ".$iRecordNumber."<br/>");
}

foreach($aWeekdays as $sDay){
    echo("Het is vandaag :".$sDay."<br/>");
}
//
//// A function is used to define own statements
//showAllUsersOnSurname();
//
//// On a totaly different place
//showAllUsersOnSurname();
//
//showAllUsersOnSurname();
//
//showAllUsersOnRecordnumber();

$aParagraphs = array("Dit is de eerste paragraaf", "dit de tweede", "dit de derde", "en dit de vierde.");
createWebpage("Mijn webpagina", $aParagraphs);


