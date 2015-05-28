<?php
$veza = new PDO("mysql:dbname=kalendarkulturnihzbivanja;host=127.11.174.2;charset=utf8", "wt8user", "wt8pass");
$veza->exec("set names utf8");
$rezultat = $veza->query("select id, naslov, link, tekst, detaljnije, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2 from vijest order by vrijeme desc");

if (!$rezultat) :
    $greska = $veza->errorInfo();
    print "SQL greška: " . $greska[2];
    exit();
endif;

//Unos komentara u bazu
if ($_SERVER["REQUEST_METHOD"] == "POST"):
    $vijestPoruke = $_POST["newsIDKomentar"];
    if(isset($_POST["autorPoruke".$vijestPoruke])&&isset($_POST["commentPoruke".$vijestPoruke])){
    $stmt = $veza->prepare("INSERT INTO komentar (vijest, tekst , autor, email) VALUES (:vijest, :tekst , :autor, :email)");
    $stmt->bindParam(':vijest', $vijestPoruke);
    $stmt->bindParam(':tekst', $tekstPoruke);
    $stmt->bindParam(':autor', $autorPoruke);
    $stmt->bindParam(':email', $emailPoruke);
        $tekstPoruke = $_POST["commentPoruke".$vijestPoruke];
        $autorPoruke = $_POST["autorPoruke".$vijestPoruke];

    if(isset($_POST["email".$vijestPoruke])&& preg_match('/(\w+)@((\w+).){2}.(\w+){2}/', $_POST["email".$vijestPoruke])):
        $emailPoruke = $_POST["email".$vijestPoruke];
    else:
        $emailPoruke = "";
    endif;
        if(trim($tekstPoruke) != "" && trim($autorPoruke) != ""){
            $stmt->execute();
        }
    }
endif;
// Kraj unosa komentara u bazu

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["formID"])&& $_POST["formID"] == "2"):
    $rezultat = $veza->query("select id, naslov, link, tekst, detaljnije, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2 from vijest where id=".$_POST['newsID']);
foreach ($rezultat as $vijest): ?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/PHP/BazaUpdateDetaljnije.php");?>
<?php endforeach;?>
<?php
else:
foreach ($rezultat as $vijest) :
$result = 0;
$query = "SELECT COUNT(*) as broj FROM komentar WHERE vijest=".$vijest['id'];
if($x = $veza->query($query)) {
    $result = $x->fetchColumn();
}
?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/PHP/BazaUpdateMain.php");?>
<?php
endforeach;
endif;
?>

