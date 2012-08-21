<?php
	if (empty ($_GET['page']))	{
	include ("modules/default/default.php");
	}
	
	/* Lien module accueil */
	elseif($_GET['page'] == 'accueil') {
	include("modules/accueil/accueil.php");
	}

	/* Lien module realisation */
	elseif($_GET['page'] == 'realisations') {
	include("modules/realisations/realisation.php");
	}
	
	/* Lien module contact */
	elseif($_GET['page'] == 'contact') {
	include("modules/contact/contact.php");
	}
?>	