-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 02:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalendarkulturnihzbivanja`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vijest` int(11) NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vijest` (`vijest`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `vijest`, `tekst`, `autor`, `vrijeme`, `email`) VALUES
(1, 1, 'Neki text\r\n\r\ntetst\r\netet\r\netet', 'neki autor', '2015-05-27 10:00:08', 'example@example.com'),
(2, 1, 'test', 'test', '2015-05-27 10:11:52', 'arminija@hotmail.com'),
(3, 1, 'test', 'test', '2015-05-27 10:12:04', ''),
(4, 1, '', '', '2015-05-28 10:25:42', ''),
(5, 1, '', '', '2015-05-28 10:25:47', ''),
(6, 1, '', '', '2015-05-28 10:25:50', ''),
(7, 1, 'test', 'test', '2015-05-28 11:57:50', ''),
(8, 1, 'ttest', 'test', '2015-05-28 12:00:03', 'tes'),
(9, 1, 'validacija', 'validacija', '2015-05-28 12:00:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE IF NOT EXISTS `vijest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `detaljnije` text COLLATE utf8_slovenian_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`id`, `naslov`, `link`, `tekst`, `detaljnije`, `autor`, `vrijeme`) VALUES
(1, '12. Beogradski festival igre', 'https://www.youtube.com/embed/F5lel2oGYyw', 'Uživajući jednu od najistaknutijih pozicija meðu evropskim manifestacijama umetnièke igre, Beogradski festival igre, i u okviru svog dvanaestog izdanja, od 23. marta do 9. aprila, predstavlja publici atraktivan izbor naslova sa svetske scene.\r\n\r\nBeograd je, zahvaljujuæi ovom festivalu, postao važno mesto u biografiji baletskih umetnika, grad u kome se svakog aprila predstavljaju i prepliæu novi i kultni plesni komadi, u koji rado dolaze baletske zvezde i mladi umetnici koje je svetska kritika tek najavila. Znaèaj manifestacije na svetskoj mapi, ogleda se u aktuelnosti programa, produkcijama koje se u istovremeno izvode u velikim svetskim metropolama, odnosno dogaðajima koji su premijernog karaktera za širi region. Otkrivajuæi umetnièku igru kroz njene najsavremenije domete, Beogradski festival igre je brzo pridobio brojnu publiku. Do sada je izvedeno blizu 200 vrhunskih postavki najvažnijih koreografa našeg vremena, dok svaku ediciju u proseku prati preko 18.000 gledalaca i 120 akreditovanih novinara iz zemlje i inostranstva.\r\n\r\nVisoki standardi programa i uvodjenje nove plesne i pozorišne estetike, podjednako unapreðuju oèekivanja publike i izazov kreiranja sadržaja. Festival je pružio nemerljivu podršku domaæim profesionalnim igraèima, pedagozima, koreografima i mladim ljudima iz svih umetnièkih oblasti, koji su bili dovoljno hrabri u sagledavanju novih moguænosti i spremni za izazove. Pokretanje lokalne plesne scene rezultiralo je osnivanjem novih kompanija, privatnih škola, studija i èasopisa, ukljuèivanjem inostranih koreografa koje je festival predstavio, u domaæe produkcije, ali i odlaskom naših igraèa u svet.\r\n\r\nBeogradski festival igre se razvijao zahvaljujuæi podršci Ministarstva kulture Republike Srbije, ambasada i kulturnih centara zemalja uèesnica, kao i Grada Beograda. Znaèajno ulaganje u afirmaciju umetnièke igre i realizaciju programa u gradovima Vojvodine, podržava Pokrajinski sekretarijat za kulturu AP Vojvodine, gradovi Novi Sad, Vršac, Panèevo... Beogradska Opština Stari Grad na èijoj teritoriji posluje Festival, od prve edicije prepoznaje dogaðaj kao važnu inicijativu u kulturi. Na samom poèetku, Festival je osvojio nagradu Fonda Jelena Šantiæ, a UNESCO ga je proglasio vodeæim plesnim projektom u regionu Jugoistoène Evrope (2006), nakon èega je usledio prijem u Svetsku plesnu alijansu. Godine 2011., festival je realizovan pod pokroviteljstvom Predsednika Republike, i dobio priznanje „Zvezda Beograda“ od strane Agencije za Evropske integracije. Nemaèki èasopis BalletTanz, oznaèio je 2012. godine Beogradski festival igre kao “najreprezentativniju plesnu manifestaciju starog kontinenta” i “plesnog trendsetera”. Godine 2013., predstavljena je monografija “Decadance – 10. godina Beogradskog festivala igre” u izdanju Službenog glasnika.\r\n\r\nVeæ tri godine zaredom, Beogradski festival igre se realizuje u saradnji sa Delegacijom EU u Srbiji, dok se njegova dvanaesta edicija održava pod visokim pokroviteljstvom Ministarstva kulture Republike Srbije.\r\n\r\nKao glavni partner Beogradskog festivala igre, Vip mobile je uveo prepoznatljiv model ulaganja velikih kompanija u srpsku kulturu, dok zajednièki kreiran slogan „Komunikacija u pokretu“, najbolje oslikava snagu osmogodišnje saradnje. Kroz razlièite projekte, meðu kojima su najznaèajniji nagrada „Vip poziva“, nagrada „Vip iskorak “ i projekat za najmlaðe „Vip talenti”, Vip doprinosi razvoju umetnièke igre u Srbiji.\r\n\r\nDugogodišnju naklonost i važnu podršku festivalskom programu pruža Societe Generale banka, koja je i ove godine glavni sponzor, u kategoriji državnih i gradskih institucija. Kroz pokroviteljstvo Festivala, Societe Generale banka nastavlja svoje zalaganje kako bi se vrhunski umetnièki programi uèinili dostupnim domaæoj publici. Ponosni smo na podršku brenda Nivea, koga odlikuje kvalitet, poverenje potrošaèa, duga tradicija i ulaganje u proverene vrednosti. Tradicionalni prijatelji festivala su Fondacija Hemofarm, DDOR Novi Sad, kompanije Bambi, Nestlé Adriatic, Heineken, Doncafé, Roche, Grand Casino Beograd, Telegroup, hotel Hyatt Regency Beograd, saobraæajno preduzeæe Lasta, i drugi.\r\n', '23. mart |Srpsko narodno pozoriste, Novi Sad\r\n\r\n25. mart u 20h | Sava Centar\r\nSvečano otvaranje Festivala u Srpskom narodnom pozorištu u Novom Sadu i Centru Sava, predstavlja londonski Sadlers Vels, sa produkcijom „m¡longa“, čiju koreografiju potpisuje Sidi Larbi Šerkauji. Duboko ukorenjen u argentinskoj kulturi, tango oduševljava i privlači ljude svojom senzualnošću, snagom i lepotom. Koreograf koji je u svetu priznat po inovativnim i od kritike visoko cenjenim produkcijama, ovom prilikom sarađuje sa izuzetnim argentinskim igračima i muzičarima, stvarajući predstavu koja provlači njegov osobeni rukopis kroz tango. Ideja milonge služi kao vodilja, a istraživanje otkriva neponovljive čari plesnih večeri u intimnim barovima Buenos Ajresa. Britanski Dejli Telegraf navodi da je “m¡longa neponovljiva i prelepa predstava”.\r\n\r\n26. mart u 16h i 20h| Pozorište Atelje 212\r\nIzraelska Kompanija Inbal Pinto, nastupa po drugi put na Beogradskom festivalu igre, i to sa svojom kultnom produkcijom “Ostriga”. Kombinujući kvalitete iz snova kakve srećemo kod Felinija i oštar intelekt karakterističan za Pinu Bauš, Inbal Pinto i Avšalom Polak stvaraju fantastični svet cirkusa sazdan od lutajućih uličnih akrobata, čudno lepih kreatura i neverovatne igre u izvođenju 12 umetnika. Inspirisan drevnom pričom o dečjem prijateljstvu, ovo je komad koji zamagljuje granice između sna i jave. Nestvarni kostimi, zadivljujuća scenografija i magični pozorišni efekti, jednostavno oduzimaju dah.\r\n\r\n27. mart u 20h| Beogradsko dramsko pozorište\r\nŽenevsku Kompaniju 7273 osnovali su koreografi Nikolas Kantijon i Lorens Jadi. Njihov stil je utemeljen na inspiraciji i istraživanjima hipnotišuće igre i muzike dalekog orjenta. „Tarab” je naziv predstave, odnosno ključni koncept arapske kulture, osećajnost nastala sinergijom muzike, poezije i duhovnosti. Nešto kao gruv u fanku, sving u džezu, duende u flamenku… Cilj umetničkog pristupa jeste da stvori plesni jezik koji uvodi gledaoce u posebnu atmosferu ispunjenu krivinama i plutajućim veznicima karakterističnim za arapsku kaligrafiju. Po francuskom magazinu Le Temps, ovaj komad je “čist trenutak plesne ekstaze”.\r\n\r\n28. mart u 20h| Sava Centar\r\n\r\n26. mart, 20h| Narodno pozorište, Vršac\r\nBalet Visbaden dolazi po prvi put u Srbiju, sa programom koji potpisuju dva koreografa, i koji će svoju međunarodnu premijeru imati upravo na Beogradskom festivalu igre. Američki plesni stvaralac Ričard Sigal, se po prvi put predstavlja našoj publici sa komadom “Pesme” na muziku kultnih savremenih kompozitora elektronske muzike, i sa posve futurističkom tehnikom umetničke igre i pozorišne rasvete. Drugi deo večeri, rezervisan je za postavku “Levo Desno Levo Desno”, najpopularnijeg evropskog koreografa i reditelja, miljenika beogradske publike, Aleksandera Ekmana.\r\n\r\n29. mart, 20h| Pozorište na Terazijama\r\n\r\n30. mart, 20h| Srpsko narodno pozorište, Novi Sad\r\nOsnovana pre 40 godina u cilju predstavljanja duhovite strane tradicionalnog baleta kroz parodiju i zamenu uloga među polovima, trupa Balet Trokadero od Monte Karla najpre je nastupala u kasnim predstavama off Brodveja. Nakon kritika u Njujork Tajmsu, zahvaljujući spoju dobrog poznavanja repertoara, komičnih situacija na sceni, i zapanjujućom tehnikom muškaraca na vrhovima prstiju, poneli su status pozorišnog fenomena. Profesionalni muški igrači izvode niz baletskih naslova, negujući poseban manir u predstavljanju “gvozdenog” ruskog stila. Komedija se postiže preuveličavanjem slabosti i nezgoda, ili podvlačenjem bajkovite banalnosti ozbiljne igre. Činjenica da krupna tela delikatno balansiraju na prstima, kao labudovi, vazdušasti duhovi, vodene vile, romantične princeze, očajne viktorijanske dame – prikazuje fantastičan duh igre kao umetničke forme, ne rugajući se, već oduševljavajući podjednako najiskusniju i početničku publiku. U naš region stižu po prvi put, na Beogradski festival igre.\r\n\r\n31. mart, 20h| Beogradsko dramsko pozorište\r\nU pejzažu pustoši i razaranja, tri lika se upuštaju u avanturu koja će im promeniti živote. Plesni komad čudnog naslova – “Memoari jedne buve”, je jedinstveni pas de trois postavljen na muziku Čajkovskog. Koda iz “Labudovog jezera” je dekonstruisana, a zatim prekinuta ehom iz prošlosti i signalima koji upućuju na pustoš i beznađe. Sol Piko dobro vlada klasičnim baletom, savremenom igrom i flamenkom, i koristi sve ove forme u kreiranju posebnog koreografskog stila, zapanjujućih vizuelnih prikaza, i neverovatnih situacija koje odišu crnim humorom. Ovo je predstava koja pruža svež i frenetičan, posve lični doživljaj vezan za najveći izazov koji je zadesilo Evropu od Drugog svetskog rata. Zvezda u Španiji, Sol Piko tokom poslednjih sezona niže uspehe na svetskim festivalima. Ovo je prvo gostovanje njene trupe u Srbiji.\r\n\r\n1. april, 20h| Pozorište na Terazijama\r\nKada se nakon nastupa na prethodnom festivalu rasuo nezaustavljiv aplauz nakon prvog nastupa sicilijanske trupe Zappala Danza u Beogradu, publika je poželala da vidi još nešto sa repertoara ove kompanije. Na zahtev svih onih koji su bili u sali ili ostali ispred zbog ogromnog interesovanja, koreograf Roberto Zappala se vraća sa jednim posve drugačijim ostvarenjem. “Antitela” su naučnički deo projekta Virus Juga, u stilu fotografskog negativa. Koreografija je utemeljena na ideji posmatranja virusa pod mikroskopom, i razvija se grčevito, ali pedantno, kroz pokret igrača koji teži progresivnom, razarajućem, i prenosivom ophođenju...\r\n\r\n2. i 3. april, 20h| Sava Centar (scena)\r\nDolazak slavnog Kilijana u Beograd, bi bio dovoljan da se u svetu govori o jednom festivalu. Njegove koreografije smo gledali u izvođenju neponovljivog Holandskog plesnog teatra, trupe koju je godinama predvodio, dok njegovi novi komadi nastaju danas pod firmom Kilijanove produkcije. Pred limitiranim brojem gledalaca (kapacitet svega 200 mesta), imaćemo priliku da premijerno pogledamo jedan film, dva fantastična plesna komada, i na kraju – da uživamo u diskusiji sa Kilijanom. “Postoji mnogo stvari koje možete naučiti u životu, ali ne i iskustvo. Iskustvo se mora živeti i proživeti. I trebalo bi živiti što intenzivnije, kako bi imali nešto čega ćete se sećati i što ćete deliti kada ostarite. Kilijan je iskustvo!” © New York Times\r\n\r\n4. april, 20h| Beogradsko dramsko pozorište\r\nzero visibilty corp. je jedna od vodećih norveških plesnih kompanija, sa velikim uspehom predstavljena na međunarodnoj plesnoj sceni. Prvo igranje u Beogradu, ujedno je i prilika da upoznamo Inu Kristel Johansen, koreografkinju koja je već osvojila mnoge nagrade, ali i publiku prestižnog Foruma u Monaku. Trupa dolazi sa najnovijim komadom “Gost”, odmah nakon premijere u Oslu. Norveški mediji su najavili “moćan pokret kroz prostor, uz kamernu, intimnu i tajanstvenu muziku… Hipnotišuću strukturu i ritmičnu mantru….”\r\n\r\n4. april, 20h| Kulturni centar, Pančevo\r\n5. april, 20h| Beogradsko dramsko pozorište Bivši igrač Akrama Kana, Slovak Anton Laki, odavno se bavi koreografijom, a nedavno je pokrenuo i svoju kompaniju u Briselu, sa kojom je za kratko vreme uspeo da se predstavi evropskoj publici i osvoji značajne nagrade. Čini se da je upravo predstava “Pazi na raskorak”, jedan od najtraženijih naslova poznatih festivala. Pet igrača na sceni stvaraju likove iz crtanog filma. Karaktere je teško prepoznati jer se ne dolaze iz poznatih “crtaća”. Njihov život se odvija kroz svojeručno napisana poglavlja, u prostoru maštovito izmišljene zemlje. Uvrnuta priča nudi kretanje po liniji nesavršenosti, i vodi u avanturu koja se otkriva usput. Kritičari su složni da je ovaj komad “garantovani favorit”.\r\n\r\n6. april, 20h| Pozorište na Terazijama\r\nPoznati koreograf Murad Merzuki, stiže pred beogradsku publiku po prvi put, sa komadom koji govori o sličnosti umetničke igre i borilačkih veština. Predstava “Boks, Boks”, prikazjuje sve aspekte borbe koji imaju svoj ekvivalent u koreografiji: ring i scena, udarac gonga i podizanje zavese, sudije i kritika orlovskih očiju... Poput borilačkih veština, umetnička igra zahteva težak rad, znoj, nepoštedni napor; podjednako davanje i patnju „izvođača“, kao i sudar sa prazninom u obliku protivnika, odnosno publike. Francuski Le Monde navodi da se “kolektivni performans probija se iz senke, poput sekvenci iz starog filma, u duhovitoj zbrci hip-hopa i pesnica. Franc Šubert, Moris Ravel, Feliks Mendelson i Glen Miler: izbor i pedantan tajming muzike istovremeno ubrizgavaju dah romantizma i melanholije u scene koje lebde poput mehurića, svetlosnim godinama daleko od klišea krvave arene.”\r\n\r\n7. i 8. april, 20h | Opera Madlenianum\r\nHofeš Šehter je jedan od najzanimljivijih britanskih umetnika, podjednako priznat kao koreograf i kao kompozitor. Njegova plesna kompanija izazvala je pravu eksploziju na svetskoj plesnoj sceni, donoseći “ljute” komade, poput predstave “Politička majka”, koju je gledala i publika Beogradskog festivala igre. “Sunce” je njegov najnoviji komad, koji se bavi pojmom savršenstva, iz posebnog ugla. Savršenstvo postaje iskrivljeno i harmonija otvara put ka unutrašnjem prikazu antagonizma i nasilja u ovoj uznemirujućoj pozorišnoj predstavi. Britanski Telegraf navodi da je “Hofeš Šehter i dalje jedini kreator igre na svetu, dovoljno hrabar da stvara ovakve iznenađujuće predstave, pune nezaustavljuve energije i ludih ambicija.”\r\n\r\n9. april, 20h| Sava Centar\r\nDvojica najtraženijih evropskih koreografa, Aleksander Ekman i Johan Inger, u saradnji sa tradicionalno kvalitetnom i inovativnom kompanijom kakva je Balet Bazel, svoje veče su nazvali „Potpuna igra“, i zaista ponudili publici potpuno uživanje. “Oluja entuzijazma je ispratila premijeru Baleta Bazel. Poetičan, delikatan i osetljiv je Ingerov “Tempus Fugit”. Smešan, zabavan i teataralan je Ekmanov “Udruženi rad”. Oba komada izazivaju uraganski aplauz. © Basellandschaftliche Zeitung', 'Imenko Prezimenko', '2015-05-26 12:14:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`vijest`) REFERENCES `vijest` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
