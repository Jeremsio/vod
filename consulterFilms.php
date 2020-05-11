<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style/vod.css">
		<title>Consultation</title>

	</head>

	<body>
		
		
		<h1>Liste des Films</h1>
		
		<table border align="center">
		
			<thead>
				
				<tr>
					
					<th>Titre</th>
					<th>Année</th>
					<th>Réalisateur</th>
				
				</tr>
				
			</thead>
		
			<tbody>
				
				<?php
				
					$lines = file("data/vod.csv");
					foreach($lines as $n => $line){
						
						echo "<tr>" ;
						
						$infos = explode( ":" , $line ) ;
						
						echo "<td>" . strtoupper( $infos[ 0 ] ) . "</td>" ;
						echo "<td>" . ucfirst( strtolower( $infos[ 1 ] ) ) . "</td>" ;
						echo "<td>" . ucwords( strtolower( $infos[ 2 ] ) ) . "</td>" ;
						
						echo "</tr>" ;
						
					}
				
				?>
				
			</tbody>
		
		</table>
		<br/>
		<br/>
		<br/>
		<a href="vod.html">
			Retour à l'acceuil
		</a>
	</body>
	
</html>
		

