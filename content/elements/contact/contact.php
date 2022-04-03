<?php 
    
    $Vorname = $_POST["Vorname"];
    $Nachname = $_POST["Nachname"];
    $Email = $_POST["Email-Adresse"];
    $Betreff = $_POST["Betreff"];

    $to = "MarcoHadzija@gmx.at";
    $body = "Nachname: ".$Nachname." "."Vorname: ".$Vorname." "."Betreff: ".$Betreff. " "."Email-Adresse vom Absender: ".$Email;

    mail($to, $Betreff, $body);
?>