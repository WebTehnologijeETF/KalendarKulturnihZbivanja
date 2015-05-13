<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>Art - Main</TITLE>
    <link rel="stylesheet" type="text/css" href="../CSS/stil.css" media="all"/>
    <link rel="icon" type="image/png" href="../Images/tray.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <SCRIPT src="../JS/js_1.js"></SCRIPT>
</HEAD>
<BODY onload="changeToJS();">
<noscript>
    <?php include("../PHP/AlternateMenu.php"); ?>
</noscript>
<div id = "MenuWithScript" style="display: none">
    <?php include("../PHP/MenuWithScript.php"); ?>
</div>
<div id="Podstranica">
<?php

$data = array($_GET[0],$_GET[1],$_GET[2],$_GET[3],$_GET[4],$_GET[5],$_GET[6],$_GET[7]);

$to = "aklacar1@etf.unsa.ba";
$subject = "Sent from Kalendar Kulturnih Zbivanja";
$txt = "Ime:" . $data[0] . "\r\n" . "Prezime:" . $data[1] . "\r\n" . "Zip:" . $data[2] . "\r\n" . "Mjesto:" . $data[3] . "\r\n" .
    "Spol:" . $data[4] . "\r\n" ."Datim Rodjenja:" . $data[5] . "\r\n" . "Poruka:" . $data[6] . "\r\n";
$headers = "From:".$data[7]."\r\n"."CC: arminija2309@gmail.com";
if(mail($to,$subject,$txt,$headers)) {
    echo "<div class='mainOkvirFormaD''> <h2>Zahvaljujemo se što ste nas kontaktirali</h2></div>";
}
else{
    echo "Mail nije poslan";
}
?>
</div>
</BODY>