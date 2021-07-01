<?php

if (isset ($_POST['submit']))
{
$naam = $_POST['naam'];
$vereniging = $_POST['vereniging'];
$datum = $_POST['datum'];
$email = $_POST['email'];
$telnummer = $_POST['telnummer'];

$errors = [];

if($naam == ''){
$errors[] = 'Het veld "Naam" is nog leeg.';
}

if($vereniging == ''){
$errors[] = 'Het veld "Vereniging" is nog leeg.';
}

if($datum == ''){
$errors[] = 'Het veld "Datum" is nog leeg.';
}

if($email == ''){
$errors[] = 'Het veld "Email" is nog leeg.';
}

if(empty($errors)){

}
}
 
?>
<source src="horse.ogg" type="audio/ogg">

<?php if(isset($errors)) { ?>
			
			<ul class="errors">
			<?php foreach ($errors as $error){?>
			<li><?= $error ?></li>
			<?php } ?>
			</ul>
			