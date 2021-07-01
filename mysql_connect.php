

<?php
//Hieronder zie je de variabelen $Host, $name, $password, $database en $db.
//de $host is waar je de server host
$host = "localhost";
//de $name is welke naam de map heeft waar je de server informatie in hebt staan.
$name = "root";
//de $password is het wachtwoord van die op de server staat. In dit geval is er geen wachtwoord.
$password = "";
//de $database is de naam van de database die je wilt gaan koppelen.
$database = "john_database";
//de $db zorgt er voor dat alle variabelen die hierboven zijn weergegeven gebruikt worden om te connecten met de database.
$db = mysqli_connect($host, $name, $password, $database)
or die("MySQL connection failed" . mysqli_connect_error());

$db = mysqli_connect($host, $name, $password, $database)
or die("error: " . mysqli_connect_error());
?>




