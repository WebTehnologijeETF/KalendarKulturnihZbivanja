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
<BODY onload="refreshPage();">
<noscript><?php include("../PHP/AlternateMenu.php"); ?></noscript>

<div id="Podstranica">
    <div class="mainOkvir1">
        <table id = "TableID">
            <CAPTION>Kalendar Dešavanja<a id = "Kontrola" onclick="ucitaj('Proizvodi',2,0)">(Edit)</a></CAPTION>
            <TR>
                <TH>Slika</TH>
                <TH>Naziv</TH>
                <TH>Tip i Autor</TH>
                <TH colspan="2">Opis</TH>
                <TH>Lokacija</TH>
                <TH>Datum/i dešavanja</TH>
            </TR>
            <TR class="prazanRed">
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
                <TD></TD>
            </TR>
        </table>
    </div>
</div>

</BODY>