<?php
//Inicijalizacija
$news = array();
$RootDirectory = $_SERVER['DOCUMENT_ROOT'];
$files = scandir($RootDirectory ."/TXT/");
//Upis putanje fajlova
for ($i=2; $i<count($files); $i++) {
   $files[$i] = $RootDirectory."/TXT/".$files[$i];
}
// Sortiranje fajlova po datumu kreacije tih fajlova.
usort($files,"sort_by_date_created");
function sort_by_date_created($fileA,$fileB){
    if(filectime($fileA) == filectime($fileB))
    {
        return 0;
    }
    return filectime($fileA) < filectime($fileB) ? 1 : -1;
}
// Ucitavanje Fajlova
for ($i=0; $i<count($files)-2; $i++) {
    array_push($news, file($files[$i]));
}


//Upis na stranicu
for($i=0;$i<count($news);$i++):
    if(count($news[$i])):
        //Naslov
        $naslov = "<article class='MainP'>"."<h2 class='centered'>".ucfirst(strtolower($news[$i][2]))."</h2>";
        // Video Fajl (Kod mene je video umjesto slike)
        if($news[$i][3]=="\r\n"){
            $video = "";
        }
        else{
            $video = "<div class='iframePozicija'>"."<iframe src='".$news[$i][3]."'></iframe></div>";
        }
        //Glavni Dio
        $l=4;
        $opis = "<p>";
        do{
            if($news[$i][$l]=="\n"||$news[$i][$l]=="\r\n"){
                $opis.="</p>"."<p>";
            }
            else{
                $opis=$opis.$news[$i][$l];
            }
            $l=$l+1;
            if(($l<count($news[$i])&&($news[$i][$l] == "--\n" ||$news[$i][$l] == "--\r\n" || (strpos($news[$i][$l], "--") && strlen($news[$i][$l]) == 3)))){
                $test = false;
            }
            else{
                $test=true;
            }
        }while($l<count($news[$i])&&$test);
        $opis.="</p>";

        //Detaljnije
        if($l==count($news[$i])) {
            $detaljnije = "";
            $detaljnijeLink = "";
        }
        else{
            $l++;
            $detaljnije = "<p>";
            do{
                if($news[$i][$l]=="\n"||$news[$i][$l]=="\r\n"){
                    $detaljnije.="</p>"."<p>";
                }
                else{
                    $detaljnije=$detaljnije.$news[$i][$l];
                }
                $l=$l+1;
                if(($l<count($news[$i])&&($news[$i][$l] == "--\n" ||$news[$i][$l] == "--\r\n" || (strpos($news[$i][$l], "--") && strlen($news[$i][$l]) == 3)))){
                    $test = false;
                }
                else{
                    $test=true;
                }
            }while($l<count($news[$i])&&$test);
        }
        //Datum i Autor
        $date = "<div class='right'><span class='textdecoration'>Datum objave:</span>".$news[$i][0]."</div>";
        $autor = "<div class='left'><span class='textdecoration'>Autor:</span>".$news[$i][1]."</div></article>";
        array_push($GLOBALS['dataFull'], $naslov.$video.$opis.$detaljnije.$date.$autor);
        $detaljnijeTest = false;
        if($detaljnije==""&&$showFullPage){
            // SPA za detaljnije
            $data = $naslov.$video.$opis.$date.$autor;
            echo $data;
            $GLOBALS['detaljnijeTest'] = false;
        }
        else if($showFullPage){
            $GLOBALS['detaljnijeTest'] = true;
        }

?>

        <?php if ($detaljnijeTest==true) :?>
            <?php
                $data = $naslov.$video.$opis;
                echo $data;
                 ?>
             <p><a class='ArticleLinks' onclick="loadNews('Novosti.php?data=<?=urlencode($i)?>')">Detaljnije...</a></p>

            <?php
                 $data = $date.$autor;
                 echo $data;
            ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endfor; ?>