<html>

<head>
<title>Connection</title>
</head>

<body>

<?php
$host = "localhost";  

$user = "root";

$bdd = "pmpro265788";

$passwd  = "";
// Sous WAMP (Windows)
//$bdd = new PDO('mysql:host=localhost;dbname=pmpro265788 ;charset=utf8', 'root', '');


mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");

mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");
?>

</body>

</html>