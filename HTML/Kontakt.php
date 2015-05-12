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
<?php
$hide_menu = false;
$noscript_menu = false;
?>
<noscript>
    <?php include("../PHP/AlternateMenu.php"); ?>
    <?php
    $hide_menu = true;
    $noscript_menu = true;
    ?>
</noscript>
    <?php include("../PHP/Validacija.php"); ?>
<!--Ovdje je potrebna manipulacija Menu-ima  u cilju jednog menu-a za NoScript, jednog menu-a za Script Ajax i jednog menu-a za Script no Ajax-->
<?php if($noscript_menu==false) : ?>
    <?php include("../PHP/AlternateMenu.php"); ?>
<?php endif; ?>
<!--End Comment-->

        <?php if($ready_to_send==true) : ?>
        <?php include("../PHP/confirmationPage.php"); ?>
        <?php else : ?>

<div id="Podstranica">
    <div class="mainOkvirForma">
    <FORM action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" name="mojaForma" method="post" autocomplete="on" id="usrform">


        <!--Ajax Validacija-->
        <div class="formaWrap"><label class="labelA" for="zip">Postanski Br. :</label></div>
        <div class="formaWrap">
            <input type="text" name="zip" id="zip" placeholder="71000" onkeyup="validateByAjax();"
                   onblur="validateByAjax();" value="<?php echo $zip;?>">
            <span class="validation" title="Mjesto i postanski broj se ne slažu !"></span>
        </div>



        <div class="formaWrap"><label class="labelB" for="mjesto">Mjesto :</label></div>
        <div class="formaWrap">
            <input type="text" name="mjesto" id="mjesto" placeholder="Sarajevo" onkeyup="validateByAjax();"
                   onblur="validateByAjax();" value="<?php echo $mjesto;?>">
            <span class="validation" title="Mjesto i postanski broj se ne slažu !"></span>
        </div>
        <!--JS Validacija-->

        <div class="formaWrap"><label class="labelA" for="ime">Ime:</label></div>
        <div class="formaWrap">
            <input type="text" name="ime" id="ime" placeholder="Imenko" onkeyup="validate('ime');"
                   onblur="validate('ime');" value="<?php echo $ime;?>">
            <span class="validation" <?php echo $imeErr ?> title="Obavezno Ime"></span>
        </div>


        <div class="formaWrap"><label class="labelB" for="spolLista">Spol:</label></div>
        <div class="formaWrap">
            <input list="spol" name = "spol" id="spolLista" onkeyup="validate('spolLista');"
                   onblur="validate('spolLista');" value="<?php echo $spol;?>">
            <datalist id="spol">
                <option value="Muško">Odaberi</option>
                <option value="Žensko">Odaberi</option>
                <option value="Drugo">Odaberi</option>
            </datalist>
            <span class="validation" <?php echo $spolErr ?> title="Spol : Muško,Žensko ili Drugo ; Obavezno"></span>
        </div>

        <div class="formaWrap"><label class="labelA" for="prezime">Prezime:</label></div>
        <div class="formaWrap">
            <input type="text" name="prezime" id="prezime" placeholder="Prezimenko" onkeyup="validate('prezime');"
                   onblur="validate('prezime');" value="<?php echo $prezime;?>">
            <span class="validation" <?php echo $prezimeErr ?> title="Obavezno Prezime"></span>
        </div>


        <div class="formaWrap"><label class="labelB" for="emailA">E-Mail:</label></div>
        <div class="formaWrap">
            <input type="email" name="emailA" id="emailA" onkeyup="validate('emailA');"
                   onblur="validate('emailA');" value="<?php echo $emailA;?>">
            <span class="validation" <?php echo $emailErr ?> title="Format : email@example.com ; Oba EMail polja moraju biti Ista !"></span>
        </div>


        <div class="formaWrap"><label class="labelA" for="bday"> Datum Rodjenja:</label></div>
        <div class="formaWrap">
            <input type="date" name="bday" id="bday" onkeyup="validate('bday');"
                   onblur="validate('bday');" value="<?php echo $bday;?>">
            <span class="validation" <?php echo $bdayErr ?> title="Format : mm/dd/yyyy; Max Godina : 1999!"></span>
        </div>

        <div class="formaWrap"><label class="labelB" for="emailB">E-Mail:</label></div>
        <div class="formaWrap">
            <input type="email" name="emailB" id="emailB" onkeyup="validate('emailB');"
                   onblur="validate('emailB');" value="<?php echo $emailB;?>">
            <span class="validation" <?php echo $emailErr ?> title="Format : email@example.com ; Oba EMail polja moraju biti Ista !"></span>
        </div>

        <div class="formaText1"> Tekst Poruke:</div>
        <div class="formaText2">
            <textarea name="comment" form="usrform" placeholder="Pisi poruku ovdje"><?php echo $comment;?></textarea>

        </div>


        <div class="dugmeWrap">
            <div class="formaDugme1"><input type="submit" value="Potvrdi"></div>
            <div class="formaDugme2"><input type="reset" value="Poništi"></div>
        </div>


    </FORM>


    </div>
</div>
        <?php endif; ?>

</BODY>