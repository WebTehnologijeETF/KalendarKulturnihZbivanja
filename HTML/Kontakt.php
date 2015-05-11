<!DOCTYPE HTML>
<HTML>
<HEAD>
    <TITLE>Art - Kontakt</TITLE>
    <meta charset="utf-8">
</HEAD>
<BODY>


<div id="Podstranica">


    <div class="mainOkvirForma">
    <FORM action="#" onsubmit="return validateForm()" name="mojaForma" method="post" autocomplete="on" id="usrform">


        <!--Ajax Validacija-->
        <div class="formaWrap"><label class="labelA" for="zip">Postanski Br. :</label></div>
        <div class="formaWrap">
            <input type="text" name="zip" id="zip" placeholder="71000" onkeyup="validateByAjax();"
                   onblur="validateByAjax();">
            <span class="validation" title="Mjesto i postanski broj se ne slažu !"></span>
        </div>


        <div class="formaWrap"><label class="labelB" for="mjesto">Mjesto :</label></div>
        <div class="formaWrap">
            <input type="text" name="mjesto" id="mjesto" placeholder="Sarajevo" onkeyup="validateByAjax();"
                   onblur="validateByAjax();">
            <span class="validation" title="Mjesto i postanski broj se ne slažu !"></span>
        </div>
        <!--JS Validacija-->

        <div class="formaWrap"><label class="labelA" for="ime">Ime:</label></div>
        <div class="formaWrap">
            <input type="text" name="ime" id="ime" placeholder="Imenko" onkeyup="validate('ime');"
                   onblur="validate('ime');">
            <span class="validation" title="Obavezno Ime"></span>
        </div>


        <div class="formaWrap"><label class="labelB" for="spolLista">Spol:</label></div>
        <div class="formaWrap">
            <input list="spol" id="spolLista" onkeyup="validate('spolLista');"
                   onblur="validate('spolLista');">
            <datalist id="spol">
                <option value="Muško">Odaberi</option>
                <option value="Žensko">Odaberi</option>
                <option value="Drugo">Odaberi</option>
            </datalist>
            <span class="validation" title="Spol : Muško,Žensko ili Drugo ; Obavezno"></span>
        </div>

        <div class="formaWrap"><label class="labelA" for="prezime">Prezime:</label></div>
        <div class="formaWrap">
            <input type="text" name="prezime" id="prezime" placeholder="Prezimenko" onkeyup="validate('prezime');"
                   onblur="validate('prezime');">
            <span class="validation" title="Obavezno Prezime"></span>
        </div>


        <div class="formaWrap"><label class="labelB" for="emailA">E-Mail:</label></div>
        <div class="formaWrap">
            <input type="email" name="emailA" id="emailA" onkeyup="validate('emailA');"
                   onblur="validate('emailA');">
            <span class="validation" title="Format : email@example.com ; Oba EMail polja moraju biti Ista !"></span>
        </div>


        <div class="formaWrap"><label class="labelA" for="bday"> Datum Rodjenja:</label></div>
        <div class="formaWrap">
            <input type="date" name="bday" id="bday" onkeyup="validate('bday');"
                   onblur="validate('bday');">
            <span class="validation" title="Format : mm/dd/yyyy; Max Godina : 1999!"></span>
        </div>

        <div class="formaWrap"><label class="labelB" for="emailB">E-Mail:</label></div>
        <div class="formaWrap">
            <input type="email" name="emailB" id="emailB" onkeyup="validate('emailB');"
                   onblur="validate('emailB');">
            <span class="validation" title="Format : email@example.com ; Oba EMail polja moraju biti Ista !"></span>
        </div>

        <div class="formaText1"> Tekst Poruke:</div>
        <div class="formaText2">
            <textarea name="comment" form="usrform" placeholder="Pisi poruku ovdje"></textarea>

        </div>


        <div class="dugmeWrap">
            <div class="formaDugme1"><input type="submit" value="Potvrdi"></div>
            <div class="formaDugme2"><input type="reset" value="Poništi"></div>
        </div>


    </FORM>


    </div>
</div>


</BODY>