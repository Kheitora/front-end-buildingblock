<?php
/** @var $db */
require_once "mysql_connect.php";
//print_r($_POST);

if(isset($_POST['submit'])) {

 $VolledigeNaam = $_POST['volledige-naam'];
 $Vereniging = $_POST['vereniging'];
 $Datum = $_POST['datum'];
 $Email = $_POST['email'];
 $Telefoonnummer = $_POST['telnummer'];
 
 $errors = [];
 if($VolledigeNaam == ""){
 $errors['volledige-naam'] = "U moet uw naam invullen";
 }
 
 if($Vereniging == ""){
 $errors['vereniging'] = "U moet uw vereniging invullen";
 }
 
 if($Datum == ""){
 $errors['datum'] = "U moet de datum invullen";
 }
 
 if($Email == ""){
 $errors['email'] = "U moet uw email invullen";
 }
 
 if($Telefoonnummer == ""){
 $errors['telnummer'] = "U moet uw telefoonnummer invullen";
 }
 
 if(empty($errors)){
 $query = "INSERT INTO members (volledige_naam, vereniging, datum, email, telnummer)
  VALUES('$VolledigeNaam', '$Vereniging', '$Datum', '$Email', '$Telefoonnummer')";
  //echo $query;
 $result = mysqli_query($db, $query);
 
 if ($result){
 $success = "Hij is toegevoegd aan de database";
 }else{
 $errors['db'] = mysqli_error($db);
  } 
 }
}
?>
<!doctype html>
<html lang= "en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>RSFC</title>
        <link rel="stylesheet" href="index.css">                                
    </head>
    <body>
	<div id="blok2">
             <div id="menu">
                <nav>
				<h3>.....</h3>
				<h3>.....</h3>
				<h3>.....</h3>
				<h3>.....</h3>
				<h3>.....</h3>
                 <ul id="menulist">
                   <li><a href="index.html"><h1>Home</h1></a></li>      
                   <li><a href="Curriculum.html"><h1>Curriculum Vitae</h1></a></li>   
                   <li><a href="Opnames.html"><h1>Opnames</h1></a></li>   
                   <li><a href="Reserveren.php"><h1>Reservering aanvragen</h1></a></li>   
                 </ul>
                 <ul id="Social">
                   <li><a href="#"><h2>Facebook</h2></a></li>
                   <li><a href="#"><h2>+31647576272</h2></a></li>
                   <li><a href="#"><h2>JohnenYobrouwer@casema.nl</h2></a></li>
                   <li><a href="#"><h2>Naar het BVO</h2></a></li>
                 </ul>
             </nav>   
            </div>
       
            <div id="blok1" style="background-color: white;">
			
		    <form action="" method="post">
			<div>
			<label for="volledige-naam">Volledige naam</label>
			<input type="text" id="volledige-naam" name="volledige-naam" >
			<?php
			if (isset($errors['volledige-naam'])){
			echo $errors['volledige-naam'];
			}
			?>
			</div>
			
			<div>
			<label for="vereniging">Vereniging</label>
			<input type="text" id="vereniging" name="vereniging" >
			<?php
			if (isset($errors['vereniging'])){
			echo $errors['vereniging'];
			}
			?>
			</div>
			
			<div>
			<label for="datum">Datum</label>
			<input type="date" id="datum" name="datum" >
			<?php
			if (isset($errors['datum'])){
			echo $errors['datum'];
			}
			?>
			</div>
			
			<div>
			<label for="email">Email</label>
			<input type="email" id="email" name="email" >
			<?php
			if (isset($errors['email'])){
			echo $errors['email'];
			}
			?>
			</div>
			
			<div>
			<label for="telnummer">Telefoon nummer</label>
			<input type="text" id="telnummer" name="telnummer">
			<?php
			if (isset($errors['email'])){
			echo $errors['email'];
			}
			?>
			</div>
			
			<div>
			<input type="submit" name="submit" value="Reservering aanvragen">
			</div>
			
			<?php
			if (isset($errors['db'])){
			echo $errors['db'];
			}elseif (isset($success)){
			echo $success;
			}
			?>
			
			</form>
			</div>
			</div>
    </body>
