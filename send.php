<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$societe = $_POST['societe'];
$message = $_POST['message'];

$to = 'contact@aplicaen.fr';
$subject = 'Mail du site';
$message = 'FROM: ' . $nom . " " . $prenom . "\n Email: " . $email . "\n Societe: \n\n" . $societe . "\n Message: \n\n" . $message;
$headers = 'From: mailfrommywebsite@ensicaen.fr' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    echo "yes"; // success message
} else {
    echo "no";
}
?>