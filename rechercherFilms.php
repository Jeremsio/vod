<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Infos titre</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/vod.css">
    </head>

    <body>
		
		
		<?php
			$lines = file("data/vod.csv");
			foreach($lines as $n => $line){
		
			$infos = explode( ":" , $line ) ;
		
		
			$titreOK = FALSE ;
			if( $_POST["titre"]==$infos[0]){
				$titreOK = TRUE ;
			}
		
		?>
		
		<h3>
			<?php
				if( $titreOK ){
					echo "Titre :".$infos[0]."<br/>".
						 "Année :".$infos[1]."<br/>".
						 "Réalisateur :".$infos[2]."<br/>";
				}
				
			
			}
			if ($titreOK==False){
					echo"La recherche n'a pas aboutie";
				} 
			?>
			
			
	
		</h3>
		<br/>
		<br/>
		<br/>
		<a href="vod.html">
			Retour à l'acceuil
		</a>
		
	</body>

</html>	

