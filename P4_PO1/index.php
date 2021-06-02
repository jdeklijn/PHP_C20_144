<?php
/*
 * This file is the end assignment for periode 3
 * In this file there is an address contact application.
 * Filename: index.php
 * Creation date: 29-3-2021
 * Author: J. de Klijn
 * Last edited on: 29-03-2021 by J. de Klijn
 */

/* ============  Start of the application ============ */

// Declare an empty array
$aMyGamesData = array();
$iRecordCounter = 0;

/* ---------- Load all current games from the file -------- */
// Open the file in 'read' modus
$file = fopen('mygames.json', 'r');
// Read the JSON array from the file
$aJSONArray = file_get_contents('mygames.json');
// Convert to JSON array back to a PHP array
$aMyGamesData = json_decode($aJSONArray, TRUE);
// Count the current number of records
$iRecordCounter = count($aMyGamesData);


/* ------------ Handle the new input of the form ------ */
if (!empty($_POST)) {
    $sGameName = $_POST['sGameName'];
    $sGamemaker = $_POST['sGamemaker'];
    $dGameRelease = $_POST['dGameRelease'];
    $dStartDate = $_POST['dStartDate'];
    $iNumberOfHours = $_POST['iNumberOfHours'];
    $sMyOpinion = $_POST['sMyOpinion'];

    /* --------- Store the new game in the file -------- */
    $aMyGamesData[$iRecordCounter] = array();
    $aMyGamesData[$iRecordCounter]['sGameName'] = $sGameName;
    $aMyGamesData[$iRecordCounter]['sGamemaker'] = $sGamemaker;
    $aMyGamesData[$iRecordCounter]['dGameRelease'] = $dGameRelease;
    $aMyGamesData[$iRecordCounter]['dStartDate'] = $dStartDate;
    $aMyGamesData[$iRecordCounter]['iNumberOfHours'] = $iNumberOfHours;
    $aMyGamesData[$iRecordCounter]['sMyOpinion'] = $sMyOpinion;
} // end if not empty
// Use JSON to encode the array into a storeable string
$aJSONArray = json_encode($aMyGamesData);
// Open the file in 'write' modus
$file = fopen('mygames.json', 'w');
// Save the content of the JSON array into the file
file_put_contents('mygames.json', $aJSONArray);
// Close the file
fclose($file);


/* =============End of PHP, start of HTML ============== */
?>
<html>
    <head>
        <title> Mijn spelen </title>
    </head>
    <body>
        <form method='post'>            
            Naam van de het spel: <input type='text' name='sGameName'><br/>
            Uitgebracht door: <input type='text' name='sGamemaker'><br/>
            Uitgebracht op: <input type='date' name='dGameRelease'><br/>
            Begonnen met spelen op: <input type='date' name='dStartDate'><br/>
            Aantal uur gespeeld: <input type='number' name='iNumberOfHours'><br/>
            Mijn mening over het spel: <textarea name='sMyOpinion' rows='4' cols='50'></textarea><br/>
            Eindscore: <input type='number'  min='1' max='10' step='.5'name='iScore'><br/>
            <br/><br/><input type='submit' value='Voeg toe'>
        </form>
    </body>
</html>

<?php
/* ---------- Load all current games from the file -------- */
// Open the file in 'read' modus
$file = fopen('mygames.json', 'r');
// Read the JSON array from the file
$aJSONArray = file_get_contents('mygames.json');
// Convert to JSON array back to a PHP array
$aMyGamesData = json_decode($aJSONArray, TRUE);
// Count the current number of records
$iRecordCounter = count($aMyGamesData);

// List all current games
echo("<table border='1' width='100%'>
    <tr><th>Naam:</th><th>Uitgebracht</th><th>Release datum</th><th>Speel datum</th><th>Aantal uur</th></tr>
    <tr><th colspan='5'>Mijn mening</th></tr>
        ");
foreach ($aMyGamesData as $aGameRecord) {
    echo("<tr><td>" . $aGameRecord['sGameName'] . "</td><td>" . $aGameRecord['sGamemaker'] . "</td><td>" . $aGameRecord['dGameRelease'] . "</td><td>" . $aGameRecord['dStartDate'] . "</td><td>" . $aGameRecord['iNumberOfHours'] . "</td></tr>
    <tr><td colspan='5'>" . $aGameRecord['sMyOpinion'] . "</td></tr>");
}
?>

