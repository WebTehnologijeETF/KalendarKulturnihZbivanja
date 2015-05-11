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
<img class="bgimg" src="Images/BackG1.jpg" alt="">
<div class="logoPozicija"><p class="test">ART</p></div>


<div id="MainMenuIndex" class="okvir">

    <div class="menu">
        <ul>
            <li id="Novosti" class="notClicked"><a class="MenuItems" onclick="ucitaj('Novosti',1)">Novosti</a></li>
            <li id="Aktuelno" class="Clicked"><a class="MenuItems" onclick="ucitaj('Aktuelno',1)">Aktuelno</a></li>
            <li id="Kontakt" class="notClicked"><a class="MenuItems" onclick="ucitaj('Kontakt',1)">Kontakt</a></li>
            <li id="ONama" class="notClicked" onmouseover="showSubMenu(1,'ONamaSub');" onmouseout="showSubMenu(0,'ONamaSub');">
                <a class="MenuItems" onclick="ucitaj('ONama',1)">O Nama</a>

                <ul id="ONamaSub">
                    <li class="notClicked" onmouseover="showSubMenu(1,'ONamaSubB');"
                        onmouseout="showSubMenu(0,'ONamaSubB');">
                        <a href="#">Sponzori</a>
                        <ul id="ONamaSubB">
                            <li class="notClicked">
                                <a class="MenuItems" href="http://cinemacity.ba/">CinemaCity</a>
                            </li>
                            <li class="notClicked">
                                <a class="MenuItems"
                                   href="http://www.urbanbug.net/">UrbanBug</a>
                            </li>
                            <li class="notClicked">
                                <a class="MenuItems" href="http://www.sff.ba/en">SarajevoFF</a>
                            </li>
                            <li class="notClicked">
                                <a class="MenuItems" href="http://www.kinomeetingpoint.ba/">MeetingPoint</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </li>
        </ul>
    </div>


</div>


<div id="Page" onchange="osvjezi();"></div>
<audio controls loop>
    <source src="https://d1490khl9dq1ow.cloudfront.net/music/mp3preview/mozart-eine-kleine-nachtmusik-full_zJ8IiEVd.mp3"
            type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</BODY>
</HTML>