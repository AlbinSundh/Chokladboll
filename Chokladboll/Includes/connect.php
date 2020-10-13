<?php
	$dbh = new mysqli("localhost", "dbUser", "Iemma", "webbshop");
	
	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}
	
	$sql = "SELECT * FROM products";
	$res=$dbh->prepare($sql);
	$res->execute();
	$result=$res->get_result();
	
	if(!$result){
		echo "Felaktiga SQL fråga";
		exit;
	}
	$dbp->close();
	
	var_dump($result);
	
	while($row = $resul->fetch_assoc()){
		echo $row['name'];
		echo "<br>";
		echo $row['price']." kronor";
	}
	
?>