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
$aNames = array("Hans","Grietje","Roodkapje","Reus");
var_dump($aNames);
echo("<hr/>");
echo($aNames[3]);
echo("<hr/>");
$aName = array();
$aName['firstname'] = "Frank";
$aName['insertion'] = "van der";
$aName['surname'] = "Boom";
$aName['street'] = "dorpstraat";
$aName['homenumber'] = 24;
var_dump($aName);
echo("<hr/>");
echo("Uw achternaam is: ".$aName['surname']);
echo("<hr/>");

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



