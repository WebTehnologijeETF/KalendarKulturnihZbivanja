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
<noscript><?php include($_SERVER['DOCUMENT_ROOT']."/PHP/AlternateMenu.php"); ?></noscript>
<div id="Podstranica">
    <?php
    $showFullPage = true;
    $dataFull = array();
    if(isset($_GET["data"])){
        $showFullPage = false;
    }
    ?>
<div class="mainOkvir">
    <?php include($_SERVER['DOCUMENT_ROOT']."/PHP/NovostiUpdate.php");?>
    <?php if(!$showFullPage):
        $datax = $GLOBALS['dataFull'];
        if(isset($_GET["data"])){
            echo $datax[$_GET["data"]];
        }
     endif; ?>
</div>

</div>

</BODY>