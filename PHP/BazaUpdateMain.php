<article class="MainP">
    <h2 class="centered"><?php echo $vijest['naslov'] ?></h2>

    <div class="iframePozicija">
        <iframe src="<?php echo $vijest['link'] ?>"></iframe>
    </div>

    <?php
    $vijestS = str_replace("\n\r", "</p>\n\r<p>", '<p>'.$vijest['tekst'].'</p>');
    echo $vijestS;
    ?>

    <?php if(!$result):?>
        <p>
            <!-- Ako nema komentara na vijest -->
        <div class="left"> <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input type="hidden" name="newsID" value="<?php echo $vijest['id'];?>" />
                <input type="hidden" name="formID" value="2" />
                <a class="ArticleLinks" href="#" onclick="this.parentNode.submit()">Detaljnije...</a><small>(Nema komentara)</small>
            </form></div>
        </p>
    <?php else : ?>
        <!-- Ako ima komentara na vijest -->
        <p>
        <div class="left">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <input type="hidden" name="newsID" value="<?php echo $vijest['id'];?>" />
                <input type="hidden" name="formID" value="2" />
                <a class="ArticleLinks" href="#" onclick="this.parentNode.submit()">Detaljnije sa komentarima...</a><small>(<?php echo $result?>komentara)</small>
            </form></div>
        </p>
    <?php endif;?>


    <div class="right"><span class="textdecoration">Datum objave:</span><?php echo date("d.m.Y. (h:i)", $vijest['vrijeme2']) ?></div>
    <div class="left"><span class="textdecoration">Autor:</span><?php echo $vijest['autor'] ?></div>

    <!-- Forma za komentare -->
    <br>
    <h2>Ostavi komentar :</h2>

    <div class = komentarOkvirForma>
    <form id="usrform<?php echo $vijest['id'];?>" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <input type="hidden" name="newsIDKomentar" value="<?php echo $vijest['id'];?>" />

        <p>
        <div class="KomentarformaWrap"><label for="autorPoruke<?php echo $vijest['id'];?>">Autor:</label></div>
        <div class="KomentarformaWrap"> <input type="text" name="autorPoruke<?php echo $vijest['id'];?>" placeholder="Imenko Prezimenko"></div>
        </p>
        <p>
        <div class="KomentarformaWrap"><label  for="email<?php echo $vijest['id'];?>">E-Mail:</label></div>
        <div class="KomentarformaWrap"> <input  name="email<?php echo $vijest['id'];?>" id="email"></div>
        </p>
        <p>
        <div class="KomentarformaWrap"> <label  for="commentPoruke<?php echo $vijest['id'];?>">Komentar:</label></div>
        <div class="komentarText"><textarea name="commentPoruke<?php echo $vijest['id'];?>" form="usrform<?php echo $vijest['id'];?>" placeholder="Pisi poruku ovdje"></textarea></div>
        </p>
        <div class="dugmeWrap">
            <div class="formaDugme1"> <p><input type="submit" value="Potvrdi"></p></div>
            <div class="formaDugme2"><p><input type="reset" value="Poništi"></p></div>
            </div>
    </form>
    </div>
</article>