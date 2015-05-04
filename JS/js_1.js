function showSubMenu(test, id) {
    var x = document.getElementById(id);
    if (test == 1) {
        x.style.display = "block";
    }
    else {
        x.style.display = "none";
    }
}


var x = false;
var textForOutput = "";


function validateForm() {
    changeTextOutput();
    if (textForOutput != "") {
        textForOutput += "Hover over '!' Image for more details !";
        alert(textForOutput);
        return false;
    }
    else {
        return true;
    }
}

function changeTextOutput() {
    textForOutput = "";
    x = true;
    validate("ime");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validate("prezime");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validate("emailA");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validate("emailB");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validate("spolLista");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validate("bday");
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
    validateByAjax();
    if (!x) {
        textForOutput = "Forma nije korektno popunjena !" + "\n";
    }
}
function validate(id) {

    var y = document.getElementById(id);
    var z = y.parentNode;
    var p = z.children[1];
    if (id == "ime" || id == "prezime" || id == "bday") {
        validateString(y, p);
    }
    else if (id == "spolLista") {
        validateSpolLista(y, z.children[2]);
    }
    else if (id == "emailA" || id == "emailB") {
        validateEMail();
    }
}


function validateString(y, p) {

    if (y.id == "bday" && y.value >= "2000-01-01" && (y.value != "" || y.value != null)) {
        x = false;
        p.style.width = "21px";
        p.style.height = "21px";
    }
    else {
        if (y.value == "") {
            p.style.width = "21px";
            p.style.height = "21px";
            x = false;
        }
        else {
            p.style.width = "0";
            p.style.height = "0";
            x = true;
        }
    }
}


function validateSpolLista(y, p) {
    if (y.value != "Muško" && y.value != "Žensko" && y.value != "Drugo") {
        p.style.width = "21px";
        p.style.height = "21px";
        x = false;
    }
    else {
        p.style.width = "0";
        p.style.height = "0";
        x = true;
    }
}

function validateEMail() {

    var yA = document.getElementById("emailA");
    var zA = yA.parentNode;
    var pA = zA.children[1];

    var yB = document.getElementById("emailB");
    var zB = yB.parentNode;
    var pB = zB.children[1];

    var re = /(\w+)@((\w+).){2}.(\w+){2}/i;

    if (!re.test(yA.value) || !re.test(yB.value) || yA.value != yB.value || yA.value == "" || yB.value == "") {
        x = false;
        pA.style.width = "21px";
        pA.style.height = "21px";
        pB.style.width = "21px";
        pB.style.height = "21px";
    }
    else {
        x = true;
        pA.style.width = "0";
        pA.style.height = "0";
        pB.style.width = "0";
        pB.style.height = "0";
    }
}

//Ajax Single Page Application
function ucitaj(id) {
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {

            document.getElementById("Page").innerHTML = ajax.responseText;
            refreshPage();
        }
    };
    ajax.open("GET", "HTML/" + id + ".html", true);
    ajax.send();
}


// Ajax Validacija
var xtreme = false;
function validateByAjax() {
    var ajax = new XMLHttpRequest();
    var y = document.getElementById("mjesto");
    var z = y.parentNode;
    var p = z.children[1];
    var y1 = document.getElementById("zip");
    var z1 = y1.parentNode;
    var p1 = z1.children[1];
    if (!xtreme) {
        p.style.width = "21px";
        p.style.height = "21px";
        p1.style.width = "21px";
        p1.style.height = "21px";
        x = false;
    }
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var obj = JSON.parse(ajax.responseText);
            if (Object.keys(obj)[0] == "ok") {
                p.style.width = "0";
                p.style.height = "0";
                p1.style.width = "0";
                p1.style.height = "0";
                x = true;
                xtreme = true;
            }
            else if (Object.keys(obj)[0] == "greska") {
                p.style.width = "21px";
                p.style.height = "21px";
                p1.style.width = "21px";
                p1.style.height = "21px";
                x = false;
                p.title = obj.greska;
                p1.title = obj.greska;
            }
        }
    };

    var grad = document.getElementById("mjesto").value;
    var postanskiBroj = document.getElementById("zip").value;
    ajax.open("GET", "http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto=" + grad + "&postanskiBroj=" + postanskiBroj, true);
    ajax.send();

}

//Ajax Tabela
function loadFunction(){
var izbor = document.getElementById("odabir").selectedIndex;
    if(izbor==0){addElement();}
    else if (izbor==1){changeElement();}
    else if(izbor==2){removeElement();}
}
function addElement() {

    var _naziv = document.getElementById("naziv");
    var _opis = document.getElementById("opis");
    var _slika = document.getElementById("slika");
    var _lokacija = document.getElementById("lokacija");
    var _autor = document.getElementById("autor");
    var _datum = document.getElementById("datum");
    var _url = document.getElementById("url");

    var collection = _lokacija.value+"!|SplitHereEverything|!"+_autor.value+"!|SplitHereEverything|!"+_datum.value;
    var collection2 = _opis.value+"!|SplitHereEverything|!"+_url.value;
    var proizvod = {
        naziv: _naziv.value,
        opis: collection2,
        slika: _slika.value,
        url:collection
    };


    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        if (ajax.status == 200 && ajax.readyState == 4) {
            alert("Dodavanje uspjesno");
            return true;
        }
        else if ((ajax.status == 400 || ajax.status == 404) && ajax.readyState == 4) {
            alert("Dodavanje neuspjesno");
            return false;
        }
    };
    ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16131", true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.send ("akcija=dodavanje&proizvod=" + JSON.stringify(proizvod));
}
function removeElement(){

        var proizvod = {
            id: parseInt(document.getElementById("id").value),
            naziv: "",
            opis: "",
            slika: "",
            url: "",
            cijena: "",
            dostupnost: ""
        };

        var ajax = new XMLHttpRequest();

        ajax.onreadystatechange = function() {
            if (ajax.status == 200 && ajax.readyState == 4) {
                alert("Brisanje uspjesno");
            }
            else if ((ajax.status == 400 || ajax.status == 404) && ajax.readyState == 4) {
                alert("Brisanje neuspjesno");
            }
        };
        ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16131", true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send ("akcija=brisanje&proizvod=" + JSON.stringify(proizvod));
}
function changeElement() {
    var _naziv = document.getElementById("naziv");
    var _opis = document.getElementById("opis");
    var _slika = document.getElementById("slika");
    var _lokacija = document.getElementById("lokacija");
    var _autor = document.getElementById("autor");
    var _datum = document.getElementById("datum");
    var _url = document.getElementById("url");

    var collection = _lokacija.value+"!|SplitHereEverything|!"+_autor.value+"!|SplitHereEverything|!"+_datum.value;
    var collection2 = _opis.value+"!|SplitHereEverything|!"+_url.value;

    var proizvod = {
        id: parseInt(document.getElementById("id").value),
        naziv: _naziv.value,
        opis: collection2,
        slika: _slika.value,
        url:collection
    };

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if (ajax.status == 200 && ajax.readyState == 4) {
            alert("Izmjena uspjesna");
        }
        else if ((ajax.status == 400 || ajax.status == 404) && ajax.readyState == 4) {
            alert("Izmjena neuspjesna");
        }
    };
    ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16131", true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.send ("akcija=promjena&proizvod=" + JSON.stringify(proizvod));
}
function refreshPage() {
    var table = document.getElementById("TableID");
    var tableDefault = table.innerHTML;

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            var tekst = ajax.responseText;
            proizvodi = JSON.parse(tekst);
            for (var i=0; i<proizvodi.length; i++) {
                var _naziv = proizvodi[i]["naziv"];
                var _slika = proizvodi[i]["slika"];
                var KolekcijaA = proizvodi[i]["opis"].split("!|SplitHereEverything|!");
                var KolekcijaB = proizvodi[i]["url"].split("!|SplitHereEverything|!");
                var _opis = KolekcijaA[0];
                var _lokacija = KolekcijaB[0];
                var _autor = KolekcijaB[1];
                var _datum = KolekcijaB[2];
                var _url = KolekcijaA[1];
                tableDefault +=
                    "<tr> <TD><img src='" + _slika + "' alt=''></TD>" +
                    "<td>" + _naziv + "</td>" +
                    "<td>" + _autor + "</td>" +
                    "<TD colspan='2' class='opisTabela'>" + _opis + "<a href='" + _url + "'>...</a></TD>" +
                    "<TD>" + _lokacija + "</TD>" +
                    "<TD>" + _datum + "</TD>" +
                    "</TR>";
            }
            tableDefault+="<TR class='prazanRed'><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD></TR>";
            table.innerHTML = tableDefault;
        }
    };


    ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16131", true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.send ();
}
