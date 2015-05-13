<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>Art - Main</TITLE>
    <link rel="stylesheet" type="text/css" href="CSS/stil.css" media="all"/>
    <link rel="icon" type="image/png" href="Images/tray.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <SCRIPT src="JS/js_1.js"></SCRIPT>
</HEAD>
<BODY onload="ucitaj('Novosti',1);">
<?php include($_SERVER['DOCUMENT_ROOT']."/PHP/Menu.php");?>
<noscript><meta http-equiv="refresh" content="0;url=HTML/Novosti.php"></noscript>
<div id="Page" onchange="refreshPage();">
</div>
<audio controls loop>
    <source src="https://d1490khl9dq1ow.cloudfront.net/music/mp3preview/mozart-eine-kleine-nachtmusik-full_zJ8IiEVd.mp3"
            type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</BODY>
</HTML>