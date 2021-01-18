<?php
// Variables
$sFirstname = $_POST['sFirstname'];

// Maincode
echo("<p class='paragr'>Hello world, my name is ".$sFirstname."</p>");


// var_dump($_POST);
// put your code here
/*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulier</title>
    </head>
    <body>
        <form method='post'>
            Voornaam: <input type='text' name='sFirstname' placeholder='Voornaam'/><br/>
            Huisnummer: <input type='number' name='iHomenumber' placeholder='999' min='1' max='500' /><br/>
            Telefoonnummer: <input type='number' name='iPhoneNumber' placeholder='+31-06'><br/>
            Datum aankomst: <input type='date' name='dDateOfArrival' /><br/>
            e-mail adres: <input type='email' name='sEmail' placeholder='e-mail adres'/><br/>
            Wachtwoord: <input type='password' name='sPassword'/><br/>
            Geslacht: <input type='radio' name='bGender'>V<br/>
                      <input type='radio' name='bGender'>M<br/>
            Wensen: <input type='checkbox' name='bBreakfast'>Ontbijtservice<br/>
            <input type='checkbox' name='b3Courses'>3-gangen menu<br/>
            <input type='checkbox' name='bSauna'>Sauna service<br/>
            Type kamer:
            <select name='iRoomtype'>
                <option value='0'>Kies een kamer....</option>
                <option value='1'>2-persoons corona proof</option>
                <option value='2'>1-persoons met extra joy</option>
                <option value='3'>2 persoons met badkamer</option>   
            </select><br/>
            <input type='submit' value='Verstuur'><br/>
        </form>
    </body>
</html>

