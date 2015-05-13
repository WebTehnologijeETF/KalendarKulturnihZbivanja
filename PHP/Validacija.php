<?php
// define variables and set to empty values
$imeErr = $prezimeErr = $emailAErr = $emailBErr = $emailErr = $spolErr = $bdayErr = "";
$prezime = $emailA = $emailB = $spol = $comment = $bday = $ime = "";
$ready_to_send = false;
$zip = $mjesto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["prezime"])) {
        $prezimeErr = 'style="width:21px;height: 21px;" title = "Last name is required"';
    } else {
        $prezime = $_POST["prezime"];
        $prezimeErr = "";
        if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
            $prezimeErr = 'style="width:21px;height: 21px;" title = "Only letters and whitespace is allowed"';
        }
    }


    if (empty($_POST["ime"])) {
        $imeErr = 'style="width:21px;height: 21px;" title = "First name is required"';
    } else {
        $ime = $_POST["ime"];
        $imeErr = "";
        if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
            $imeErr = 'style="width:21px;height: 21px;" title = "Only letters and whitespace is allowed"';
        }
    }



    if (empty($_POST["spol"])) {
        $spolErr = 'style="width:21px;height: 21px;" title = "Gender is required"';
    } else {
        $spol = $_POST["spol"];
        $spolErr = "";
        if($spol!="Muško"&&$spol!="Žensko"&&$spol!="Drugo"){
            $spolErr='style="width:21px;height: 21px;" title = "Please choose: Muško,Žensko or Drugo"';
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = $_POST["comment"];
    }


    if (empty($_POST["emailA"])) {
        $emailAErr = 'style="width:21px;height: 21px;" title = "EMail is required"';
    } else {
        $emailA = ($_POST["emailA"]);
        $emailAErr = "";
        if (!preg_match('/(\w+)@((\w+).){2}.(\w+){2}/', $emailA)) {
            $emailAErr = 'style="width:21px;height: 21px;" title = "Invalid EMail Format"';
        }
    }
    if (empty($_POST["emailB"])) {
        $emailBErr = "EMail is required";
    } else {
        $emailB = ($_POST["emailB"]);
        $emailBErr = "";
        if (!preg_match('/(\w+)@((\w+).){2}.(\w+){2}/', $emailB)) {
            $emailBErr = 'style="width:21px;height: 21px;" title = "Invalid EMail Format"';
        }
    }

    if($emailA!=$emailB){
        $emailErr = 'style="width:21px;height: 21px;" title = "EMails must be same"';
    }
    else{
        $emailErr = "";
        if($emailAErr!=""){
            $emailErr=$emailAErr;
        }
        else if($emailBErr!=""){
            $emailErr=$emailBErr;
        }
    }

    if (empty($_POST["bday"])) {
        $bdayErr = 'style="width:21px;height: 21px;" title = "Birthday is required"';
    } else {
        $bday = $_POST["bday"];
        $bdayErr = "";
    }

    if($emailAErr==""&&$emailBErr==""&&$emailErr==""&&$imeErr==""&&$prezimeErr==""&&$bdayErr==""&&$spolErr==""){
        $ready_to_send = true;
    }
    else{
        $ready_to_send = false;
    }
    if (empty($_POST["zip"])) {
        $zip = "";
    } else {
        $zip = $_POST["zip"];
    }
    if (empty($_POST["mjesto"])) {
        $mjesto = "";
    } else {
        $mjesto = $_POST["mjesto"];
    }
}

?>