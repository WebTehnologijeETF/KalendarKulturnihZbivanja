<img class="bgimg" src="../Images/BackG1.jpg" alt="">
<div class="logoPozicija"><p class="test">ART</p></div>
<div id="MainMenuIndex" class="okvir">

    <div class="menu">
        <ul>
            <li id="Novosti" class="notClicked"><a class="MenuItems"  onclick="ucitaj('Novosti',1,1)">Novosti</a></li>
            <li id="Aktuelno" class="notClicked"><a class="MenuItems" onclick="return ucitaj('Aktuelno',1,2)">Aktuelno</a></li>
            <li id="Kontakt" class="notClicked"><a class="MenuItems" onclick="ucitaj('Kontakt',1,3)">Kontakt</a></li>
            <li id="ONama" class="notClicked" onmouseover="showSubMenu(1,'ONamaSub',0);" onmouseout="showSubMenu(0,'ONamaSub');">
                <a class="MenuItems" onclick="ucitaj('ONama',1,4)">O Nama</a>

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
