<?php
function createGalleri($dir)
 {
		
	//	echo '<ul  class="thumbnails">';

		if($dossier = opendir($dir))
		{
			//echo "Répertoire: ".$dir;
			while(false !== ($fichier = readdir($dossier)))
			{
				if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
					{
					if(is_dir($dir.'/'.$fichier))
						{
							if (($fichier != ".") && ($fichier != ".."))
							{
								
								echo"<div class='row-fluid'><div class='span12'><div class='page-header'><h1>".buildName($fichier)."</h1></div></div></div>";
								//echo"<div class='row-fluid'><div class='span12'><div class='page-header'><h1>".$fichier."</h1></div></div></div>";
								echo " <div class='offset1'><ul class='thumbnails'>";
								createGalleri("$dir/$fichier");
							}
							
						}	
						
					//si le fichier n'est pas un répertoire et que c'est un jpg
					if(!is_dir($dir.'/'.$fichier) && isJpg($fichier))
						{
						/*echo " <li class='span3'><a href=".$dir."/".$fichier." rel='lightbox[".$dir."]' class='thumbnail'><img src=".$dir."/".$fichier." alt=''></a></li>";*/
						echo " <li class='span2'><a href=".$dir."/".$fichier." rel='lightbox[".$dir."]' class='thumbnail'><img src=".$dir."/".$fichier." alt='' class='thumbnail-rounded'></a></li>";
						//echo "<li class='span3'><div class='thumbnail'><img src=".$dir."/".$fichier."></div></li>";
						
						}
					} 
		 
			} 
	//	echo '</ul></div>';	
		echo '</ul></div>';	
		}
}

function buildName($fichier)
{
	return str_replace('_',' ',$fichier);
}

function getExtension($fichier)
{
	// Je récupère les sous chaines de $fichier avec comme élément séparateur  '.'
	$extension = explode('.', $fichier);
	
	// J'inverse le tableau de sous chaine de sorte à avoir la dernière sous chaine en premier
	$extension = array_reverse($extension);
	
	// Je récupère la première sous chaine du tableau, qui est donc l'extension du fichier
	return $extension = $extension[0];
}
function isJpg($fichier)
{
	if(strcasecmp(getExtension($fichier),'jpg')==0) return 1;
	else return 0;
}

?>