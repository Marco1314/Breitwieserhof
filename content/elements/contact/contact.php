<?php 
    
    $Vorname = $_POST["Vorname"];
    $Nachname = $_POST["Nachname"];
    $Email = $_POST["Email-Adresse"];
    $Betreff = $_POST["Betreff"];
    $message = $_POST["Nachricht"];

    $to = "guenter.edelsbrunner@liwest.at";
    $body = "Nachname: ".$Nachname." "."Vorname: ".$Vorname." "."Betreff: ".$Betreff. " "."Email-Adresse vom Absender: ".$Email."Nachricht".$message;

    mail($to, $Betreff, $body);
?>