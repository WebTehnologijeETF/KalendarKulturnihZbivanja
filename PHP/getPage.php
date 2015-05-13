<?php
$open=0;
if(isset($_GET["open"])&&$_GET["open"]!=1){$open = $_GET["open"];}
else{echo "<script>"."ucitaj('Novosti',1,0);"."</script>";}
switch($open) {
    case 2:
        echo "<script>ucitaj('Aktuelno',1,0);</script>";
        break;
    case 3:
        echo "<script>ucitaj('Kontakt',1,0);</script>";
        break;
    case 4:
        echo "<script>ucitaj('ONama',1,0);</script>";
}?>