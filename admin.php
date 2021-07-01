<?php

$conn = mysqli_connect("localhost", "root", "", "john_database");

if (!$conn) {
    die("Site niet bereikbaar door " . mysqli_connect_error());
}
  
  $delete = "DELETE FROM members WHERE (volledige_naam, vereniging, datum, email, telnummer)";
  
  if (mysqli_query($conn, $delete)) {
    echo "Reservering succesvol verwijdert";
  } else {
    echo "Reserveringen verwijderen is niet geslaagd " . $conn->error;
  }
  
  mysqli_close($conn);
  ?>
 <!DOCTYPE html>
<html lang= "en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>RSFC</title>
        <link rel="stylesheet" href="index.css">   
        <style>
          table, th, td {
            border: 1px solid black
          }
        </style>                             
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
                   <li><a href="Inloggen.html"><h1>Inloggen</h1></a></li>   
                   <li><a href="Curriculum.html"><h1>Curriculum Vitae</h1></a></li>   
                   <li><a href="Opnames.html"><h1>Opnames</h1></a></li>   
                   <li><a href="Reserveren.html"><h1>Reservering aanvragen</h1></a></li>   
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
            
            <div>
		    	<input type="button" name="reservering verwijderen" value="Reservering verwijderen">
		    	</div>
     
            <?php

// Create connection
$conn = new mysqli("localhost", "root", "", "john_database");
// Check connection
if ($conn->connect_error) {
  die("Kan niet met server verbinden " . $conn->connect_error);
}

$show = "SELECT volledige_naam, vereniging, datum, email, telnummer FROM members";
$result = $conn->query($show);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Naam</th><th>Vereniging</th><th>Datum</th><th>E-mail</th><th>Telefoonnummer</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["volledige_naam"]."</td><td>".$row["vereniging"]."</td><td>".$row["datum"]."</td><td>".$row["email"]."</td>
    <td>".$row["telnummer"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
          </body>
          </html>
		