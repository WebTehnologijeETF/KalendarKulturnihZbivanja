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
















































