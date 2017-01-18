<html>
	<head></head>
	<title>Compter les points au tarot</title>
	<body>
		<h2>Tarot</h2>
		<a href="addtour.php">Ajouter un tour</a></br>
		<br/>
		Chiffre saisi :
		<?php 
        echo$_POST['champs2']; 
        ?>
        </p>
        Nombre de bout :
		<?php 
        echo$_POST['select'];
        ?>
        </p>
		<table border="1" width="100%">
	  <tr>
		<td><center>Axel</center></td>
		<td><center>Lea</center></td>
		<td><center>Ruben</center></td>
	  </tr>
	  <tr>
		<td><center>-78</center></td>
		<td><center>-78</center></td>
		<td><center>156</center></td>
	  </tr>
	</table>
	<h3>Resultat</h3>
  </p>
	</p>
	</body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>