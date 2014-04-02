 <!doctype html>
<html lang="nl">

	<head>
		<meta charset="utf-8">
		<meta name="author" content="Koen">
		<title> werkzoekende</title>
		<link rel="stylesheet" href="css/style.css">
                <script type="text/javascript" src="javascript/werk.js"></script>
		</head>
		<body>
 
 
 							<form action="formulier.php" method="post">
                                <label>naam: </label><input type="text" name="naam" id="naam"><br>
                                <label>voornaam: </label><input type="text" name="voornaam" id="voornaam"><br>
                                <label>huisnummer: </label><input type="text" name="huisnummer" id="huisnummer"><br>
                                <label>toevoeging: </label><input type="text" name="toevoeging" id="toevoeging"><br>
                                <label>emailadres: </label><input type="text" name="email" id="email"><br>
                                <label>telefoonnummer: </label><input type="text" name="telefoon" id="telefoon"><br>
                                <input type="submit" value="verstuur!" name="Submit">
                                <input type = "reset" value = "clear">
                            </form>
                            <?php 
                            if(isset($_POST["naam"])){
								echo $_POST["naam"] . "</br>";
								echo $_POST["voornaam"] . "</br>";
								echo $_POST["huisnummer"] . "</br>";
								echo $_POST["toevoeging"] . "</br>";
								echo $_POST["email"] . "</br>";
								echo $_POST["telefoon"];
                            }
							?>
        </body>
</html>