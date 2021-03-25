<?php

//************************************
// Function of the file registration.php:
// To show and a handle a new user registration.
// Author: J. de Klijn
// Date of creation: 9 feb. 2021
// Last edited by: J. de Klijn @ 
// Version: v0.1
//*************************************

// ================ Array demonstration ========================

// The variable array()

// Keys values     0       1         2          3
//$aNames = array("Hans","Grietje","Roodkapje","Reus");
//var_dump($aNames);
//echo("<hr/>");
//echo($aNames[3]);
//echo("<hr/>");
//$aName = array();
//$aName['firstname'] = "Frank";
//$aName['insertion'] = "van der";
//$aName['surname'] = "Boom";
//$aName['street'] = "dorpstraat";
//$aName['homenumber'] = 24;
//var_dump($aName);
//echo("<hr/>");
//echo("Uw achternaam is: ".$aName['surname']);
//echo("<hr/>");
//$aDemoVariables = array("string",234523,54.13456,true);
//echo("<hr/>");
//echo("<hr/>");
//
//// An array with fruitstypes
//$aSoftFruits = array("Bosbessen","Frambozen","Bramen","Rode bessen");
//$aHardFruits = array("Appel","Peer","Mango","Granaatappel");
//$aCitrusFruits = array("Sinasappel","Manderijn","Citroen","Grapefruit");
//// An array filled with fruits
//$aFruits = array($aSoftFruits,$aHardFruits,$aCitrusFruits);
//var_dump($aFruits);
//echo("<hr/>");
//echo($aFruits[1][3]);
//echo("<hr/>");
//foreach($aFruits as $aFruitarray){
//    echo($aFruitarray[2]."<br/>");
//} // End foreach fruit
//echo("<hr/>");
//for($iCounter = 0;$iCounter<=2;$iCounter++){
//    for($iKeyCounter=0;$iKeyCounter<=3;$iKeyCounter++){
//        echo($aFruits[$iCounter][$iKeyCounter]."<br/>");
//    } // End for keycounter
//} // End for iCounter

$aFord = array("Ford","Focus","Meriva","Fiesta","Mondeo","Mustang");
$aOpel = array("Opel","Corsa","Astra","Karl","Insignia","Grandland");
$aTesla = array("Tesla","Model S","Model X","Roadstar","Model 3","Model T");
$aPeugeot = array("Peugeot","206","208","306","3008","508","308","608");
$aSmart = array("Smart","ForTwo","ForFour");

$aCarbase = array($aFord,$aOpel,$aTesla,$aPeugeot,$aSmart);

echo("Mijn type auto is een: ".$aCarbase[2][3]." van het merk: ".$aCarbase[2][0]);

foreach($aCarbase as $aModel){
    $iTypeCount = count($aModel);
    echo("<hr/>De typen van merk: ".$aModel[0]."<select name='".$aModel[0]."'>");
    for($iModelCounter = 1;$iModelCounter<$iTypeCount;$iModelCounter++){        
     echo("<option value='".$iModelCounter."'>$aModel[$iModelCounter]</option>");
    }
    echo("</select>");
} // End foreach carbase

// ======================= File handling ==========================


// ====================== Form handling ===========================
if(!empty($_POST)){                                                             // If there is a form posted, then
  $sFirstname           = $_POST['sFirstname'];                                 // Create the variable for the firstname
  $sInsertion           = $_POST['sInsertion'];                                 // Create the variable for the insertion
  $sSurname             = $_POST['sSurname'];                                   // Create the variable for the surname
  $sStreetname          = $_POST['sStreetname'];                                // Create the variable for the streetname
  $iHomeNumber          = $_POST['iHomeNumber'];                                // Create the variable for the home number
  $sHomeNumberExtension = $_POST['sHomeNumberExtension'];                       // Create the variable for the extension
  $sPostalcode          = $_POST['sPostalcode'];                                // Create the variable for the postalcode
  $sCity                = $_POST['sCity'];                                      // Create the variable for the city
  $sEmailAddress        = $_POST['sEmailAddress'];                              // Create the variable for the email address
  $sPassword            = $_POST['sPassword'];                                  // Create the variable for the password
  var_dump($_POST);
}

// ==================== Show a registation form ===================
echo("
  <!doctype html>
  <html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <h2> Please fill out the registration form </h2>                                          <!-- Header of the form -->
    <form method='post'>                                                                      <!-- Method of postting is POST -->
      Firstname:    <input type='text'    name='sFirstname'     placeholder='Your firstname'><br/> <!-- The users firstname -->
      Insertion:    <input type='text'    name='sInsertion'><br/>                                  <!-- The users insertion -->
      Surname:      <input type='text'    name='sSurname'       placeholder='Your surname'><br/>   <!-- The users surname -->
      Streetname:   <input type='text'    name='sStreetname'    placeholder='Your streetname'><br/><!-- The users streetname -->
      Homenumber:   <input type='number'  name='iHomeNumber'    placeholder='999'><br/>            <!-- The users homenumber -->
      Extension:    <input type='text'    name='sHomeNumberExtension'><br/>                        <!-- The users home number extension -->
      Postalcode:   <input type='text'    name='sPostalcode'    placeholder='1234 AA'><br/>        <!-- The users postalcode -->
      City:         <input type='text'    name='sCity'          placeholder='Cityname'><br/>       <!-- The users city -->
      Email:        <input type='text'    name='sEmailAddress'  placeholder='email@provider'><br/> <!-- The users email address-->
      Your password:<input type='text'    name='sPassword'      placeholder='xxxxxxxxx'><br/>      <!-- The users password -->
      <button type='submit'>Registrate</button>                                               <!-- A button to submit this form-->
    </form>
  </body>
  </html>  
");



