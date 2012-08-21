
	
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
	<div class="span4 offset8">
		<address>
			<p>Menuiserie-Ebenisterie Hervé Vassant<br>
			1885 rue de Courlieu<br>
			60510 La Rue Saint Pierre<br>
			herve.vassant@gmail.com</p>
		</address>
    </div>
</div>	
  
<div class="row-fluid">
	<div class="span4">
		<form name="direction" id="direction" class=" well">
		<div class="control-group">
			<div class="controls">
			<fieldset>
				<legend>Itinéraire pour venir nous rencontrer</legend>
				<!--<label>Adresse de départ :</label>-->
				<input type="text" name="origin" id="origin" placeholder="Adresse de départ">
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
<!--
<div class="row">
	<div class="span8 offset3">
		<div id="map">
			<p>Veuillez patienter pendant le chargement de la carte...</p>
		</div>
	</div>
</div>
-->
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
			$("div.alert").show("slow").delay(4000).hide("slow");
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