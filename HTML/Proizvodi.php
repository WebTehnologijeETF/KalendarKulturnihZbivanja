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
<BODY>
<noscript><?php include("../PHP/AlternateMenu.php"); ?></noscript>

<div id="Podstranica">


    <div class="mainOkvirForma">




        <div class="formaWrap"><label class="labelA" for="odabir">Odaberi :</label></div>
        <div class="formaWrap">
            <select id="odabir" onchange="promjenaIzbora()">
                <option>Dodaj Element</option>
                <option>Izmjeni Element</option>
                <option>Obriši Element</option>
            </select>
        </div>

        <div class="formaWrap"><label class="labelB" for="naziv">Naziv :</label></div>
        <div class="formaWrap">
            <input type="text" name="naziv" id="naziv" placeholder="Neki Naziv" required>
        </div>

        <div class="formaWrap"><label class="labelA" for="autor">Tip i Autor :</label></div>
        <div class="formaWrap">
            <input type="text" name="autor" id="autor" placeholder="nekiTip - nekiAutor" required>
        </div>

        <div class="formaWrap"><label class="labelB" for="slika">Slika :</label></div>
        <div class="formaWrap">
            <input type="text" name="slika" id="slika" placeholder="url" required>
        </div>


        <div class="formaWrap"><label class="labelA" for="lokacija">Lokacija :</label></div>
        <div class="formaWrap">
            <input type="text" name="lokacija" id="lokacija" placeholder="Example Lokacija" required>
        </div>


        <div class="formaWrap"><label class="labelB" for="url">URL:</label></div>
        <div class="formaWrap">
            <input type="text" name="url" id="url" placeholder="url" required>
        </div>


            <div class="formaWrap"><label class="labelA" for="datum">Datum :</label></div>
            <div class="formaWrap">
                <input type="text" name="datum" id="datum" placeholder="DD/MM/GGGG - DD/MM/GGGG" required>
            </div>


        <div class="formaWrap"><label class="labelB" for="autor">ID :</label></div>
        <div class="formaWrap">
            <input type="text" name="id" id="id" placeholder="123" required>
        </div>

        <div class="formaText1"> Opis :</div>
        <div class="formaText2">
            <textarea name="opis" id="opis" placeholder="Pisi poruku ovdje" required></textarea>
        </div>



            <div class="dugmeWrap">
                <div class="formaDugme1"><input type="button" onclick="loadFunction();" value="Spasi"></div>
            </div>



    </div>
</div>

</BODY>