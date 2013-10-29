<?php
/* === Daten aus dem Formular auslesen und in Variablen speichern === */
  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $betreff = $_POST['betreff'];
  $nachricht = $_POST['nachricht'];
 
  $name = $vorname.' '.$nachname; 
 
/* === Empfängeradresse und Betreff === */
  $an = 'bratmeister@storchbraterei.de'; //Hier Ihre E-Mail-Adresse eintragen
  $betreff = "Kontaktformularnachricht | $betreff | $name ";
 
/* === Wenn Bedingung erfüllt, dann E-Mail abschicken - andernfalls Fehlermeldung ausgeben === */
    if ((!empty($name))&&(!empty($email))&&(!empty($betreff))&&(!empty($nachricht))) {
 
      mail($an, $betreff, $nachricht, 'From:' . $email); //Mail versenden
 
      echo 'Ihre Kontaktnachricht wurde zugestellt. Sie werden bald möglichst eine Antwort erhalten.';
    }
    else {
      echo 'Sie müssen alle Felder ausfüllen. <a href="breefkasten.php">Zurück</a>';
    }
?>