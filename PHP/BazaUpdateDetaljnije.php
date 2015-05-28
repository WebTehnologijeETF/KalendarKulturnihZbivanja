<article class="MainP">
    <h2 class="centered"><?php echo $vijest['naslov'] ?></h2>

    <div class="iframePozicija">
        <iframe src="<?php echo $vijest['link'] ?>"></iframe>
    </div>

    <?php
    $vijest1 = str_replace("\n\r", "</p>\n\r<p>", '<p>'.$vijest['tekst'].'</p>');
    $vijest2 = str_replace("\n\r", "</p>\n\r<p>", '<p>'.$vijest['detaljnije'].'</p>');
    $vijestS = $vijest1."\n\r".$vijest2;
    echo $vijestS;
    ?>

    <div class="right"><span class="textdecoration">Datum objave:</span><?php echo date("d.m.Y. (h:i)", $vijest['vrijeme2']) ?></div>
    <div class="left"><span class="textdecoration">Autor:</span><?php echo $vijest['autor'] ?></div>

    <!-- Forma za komentare -->
    <br>
    <h2>Komentari :</h2>

    <?php
    $rezultatKomentar = $veza->query("select id, vijest, tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentar where vijest=".$_POST['newsID']." order by vrijeme desc");
    foreach ($rezultatKomentar as $komentar):?>
        <h4>Komentar - <?php echo $komentar['id'] ?></h4>
        <?php
        $komentarS = str_replace("\n\r", "</p>\n\r<p>", '<p>'.$komentar['tekst'].'</p>');
        echo $komentarS;
        ?>
        <?php if($komentar['email']!=""):?>
        <div class="left"><span class="textdecoration"><small>E-Mail</small>:</span><small><?php echo $komentar['email'] ?></small></div>
        <?php endif; ?>
        <div class="right"><span class="textdecoration">Datum objave:</span><?php echo date("d.m.Y. (h:i)", $komentar['vrijeme2']) ?></div>
        <div class="left"><span class="textdecoration">Autor:</span><?php echo $komentar['autor']." "?></div>

        ----------------------------------------------------------------------------------------------------------------------------
    <?php endforeach;?>
</article>