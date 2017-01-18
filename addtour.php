<html>
	<head></head>
	<title>Ajouter un tour</title>
	<body>
		<h2>Ajouter un tour</h2>
		<form action="tarot.php" method="post">
		Nombre de bout <select name="select">
        <option value="0" selected>0 Aucun</option> 
        <option value="2">1 bout</option>
        <option value="3">2 bouts</option>
        <option value="4">3 bouts</option>
        </select>
		<p>
		Nombre de point du gagnant <input type="text" name="champs2"/>
		</p>
		<a href="tarot.php"><input type="submit" value = "Ajouter" name="submit"></a>
		</form>
		</body>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>