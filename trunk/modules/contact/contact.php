
	
	<style type="text/css"> 
    #map{height:300px;margin:auto;}
    #panel{margin:auto;padding:20px}
  </style>

<div class="row-fluid">
	<div class="span12">
		<div class="page-header"><h1>Nos coordonnées</h1></div>
	</div>
</div>

<div class="row-fluid">
	<div class="offset1">
		<address>
			<abbr title="Nom"><i class="icon-user"></i></abbr><strong> Menuiserie-Ebenisterie Hervé Vassant</strong><br>
			  <abbr title="Adresse"><i class="icon-home"></i></abbr> 1185 rue de Courlieu<br>
			  <abbr title="Adresse"><i class="icon-home"></i></abbr> 60510 La Rue Saint Pierre<br>
			  <abbr title="Téléphone"><i class="icon-comment"></i></abbr> 03 44 78 10 43<br>
			  <abbr title="E-mail"><i class="icon-envelope"></i></abbr><a href="mailto:herve.vassant@gmail.com"> herve.vassant@gmail.com</a>
		</address>
    </div>
</div>	
  
 <div class="row-fluid">
	<div class="span12">
		<div class="page-header"><h1>Itinéraire pour venir à notre rencontre</h1></div>
	</div>
</div> 
  
<div class="row-fluid">
	<div class="span4">
		<form name="direction" id="direction" class="form-vertical well">
		<div class="control-group">
			<div class="controls">
			<fieldset>
				<legend>Adresse de départ</legend>
				<input type="text" name="origin" id="origin" placeholder="Saisissez une adresse">
				<button  type="submit" onclick="javascript:calculate()" class="btn btn-primary"><i class="icon-white icon-road"></i> Calculer l'itinéraire</button>
				<div class="alert alert-error hide">
						<h4 class="alert-heading">Erreur !</h4>
						L'adresse saisie pose problème. 
				</div>		
			</fieldset>			
			</div>
		</div>
		</form>
	</div>	
	<div class="span8">
		<div id="map">
			<p>Veuillez patienter pendant le chargement de la carte...</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="span8 offset3">
		<div id="panel">
		</div>
	</div>
</div>

 
 <script type="text/javascript" src="includes/javascript/jquery-ui-1.8.12.custom.min.js"></script>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=fr"></script>
 <script type="text/javascript" src="includes/javascript/functions.js"></script>	
<script>
$(document).ready(function(){
	var form =$("#direction");
	var address=$("#origin");
	var panel=$("#panel");
	
	form.submit(function(){
		if(address.val().length<2 ){
			$("div.control-group").addClass("error");
			$("div.alert").show("slow").delay(3000).hide("slow");
			return false;
			}
		else{		
			$("div.control-group").removeClass("error");
			calculate();
			panel.css("background","#FFFFFF");
			return false;			
			}
	});
});	
</script>