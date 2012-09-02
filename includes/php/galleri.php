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
								echo "<p><h1>".$fichier."</h1></p>";
								//echo ' <div id="lightbox"><ul class="thumbnails">';
								echo ' <div><ul class="thumbnails">';
								createGalleri("$dir/$fichier");
							}
							
						}	
					
					if(!is_dir($dir.'/'.$fichier))
						{
						echo " <li class='span3'><a href=".$dir."/".$fichier." rel='lightbox[".$dir."]' class='thumbnail'><img src=".$dir."/".$fichier." alt=''></a></li>";
						//echo "<li class='span3'><div class='thumbnail'><img src=".$dir."/".$fichier."></div></li>";
						
						}
					} 
		 
			} 
	//	echo '</ul></div>';	
		echo '</ul></div>';	
		}
}
?>