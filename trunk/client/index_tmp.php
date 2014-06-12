<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<script src='bootstrap/js/jquery.js'></script>
		<script src='bootstrap/js/bootstrap.js'></script>
		<script src='bootstrap/js/blockUI.js'></script>
		<title>Memory</title>
	</head>
	<body>
		<?php
			session_start();
			
			if(isset($_SESSION["login"]))
			{
				echo "<script>$(document).ready(function() { $('#modalStart').modal('hide'); $('#modalBeforeGame').modal('show');});</script>";
			}
			else
			{
				include_once ("signIn.php");
			}
		?>
		<div id="modalBeforeGame" class="modal hide fade" tabindex="-1" role="dialog">
			<div class="modal-header">
				<h3>Avant de jouer :</h3>
			</div>
			<div class="modal-body">
				<div class="row-fluid">
					<div class="accordion" id="accordion2">
						<div class="accordion-group">
						  <div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							  Creer une partie !
							</a>
						  </div>
						  <div id="collapseOne" class="accordion-body collapse in">
							<div class="accordion-inner">
								<div class="row-fluid" style="text-align:center">
									<p>Type de partie :</p>
									<span class="btn-group" data-toggle="buttons-radio" id="typePartie">
									  <button class="btn active" data-value="0">Arcade</button>
									  <button class="btn" data-value="1">Versus</button>
									</span>
								</div>
								<br />
								<div class="row-fluid">
									<div class="span3">
										<p>Nom de la partie :</p>
										<input type="text" name="nomPartie" id="nomPartie" class="span12"/>
									</div>
									<div class="span1"></div>
									<div class="span4">
										<p>
											Nombre de joueurs : 
										</p>
										<select id="nbJoueur" name="nbJoueur" class="combobox span10" >
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
									</div>
									<div class="span3 pull-right">
										<p>
											Nombre paire : 
										</p>
										<span class="btn-group" data-toggle="buttons-radio" id="nbPaire">
										  <button class="nbPaire btn active" data-value="8">8</button>
										  <button class="nbPaire btn" data-value="18">18</button>
										  <button class="nbPaire btn" data-value="32">32</button>
										</span>
									</div>
								</div>
								<div class="row-fluid" style="text-align:center">
									<button class="btn btn-primary"> Creer la partie </button>
								</div>
							</div>
						  </div>
						</div>
						<div class="accordion-group">
						  <div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							  Rejoindre une partie !
							</a>
						  </div>
						  <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
							<div class="accordion-inner">
								<div class="table-responsive">
											<table class="table table-small-font table-bordered table-striped">
											<thead>
											<tr>
											<th>Nom de la partie</th>
											<th>Createur</th>
											<th>Nombre de joueurs</th>
											<th>Rejoindre</th>
											</tr>
											</thead>
											<tbody>
											<tr class="active">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="active">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="active">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="active">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="active">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											<tr class="success">
											<td></td>
											<td></td>
											<td></td>
											<td style="padding:0"><button class="btn btn-default span12"> GO ! </button></td>
											</tr>
											</tbody>
											</table>
											</div>
								
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
<script type="text/javascript"> 
    //$(document).ajaxStop($.unblockUI); 
 
   /* function test() { 
        $.ajax({ url: 'wait.php', cache: false }); 
    } */
 
    $(document).ready(function() { 
        $('#pageDemo1').click(function() { 
            $.blockUI(); 
            test(); 
        }); 
        $('#pageDemo2').click(function() { 
            $.blockUI({ message: '<h1><img src="busy.gif" /> Just a moment...</h1>' }); 
            test(); 
        }); 
        $('#pageDemo3').click(function() { 
            $.blockUI({ css: { backgroundColor: '#f00', color: '#fff' } }); 
            test(); 
        }); 
 
        $('#pageDemo4').click(function() { 
            $.blockUI({ message: $('#domMessage') }); 
            test(); 
        }); 
    }); 
 
</script> 
<script>
$(function(){
	// Gestion de la configuration d'une partie

	$('#nbJoueur').on('change', function() {
		nbJoueur = $('#nbJoueur').val();
		if (nbJoueur == 2){
			$( ".nbPaire[data-value=8]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=18]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
		else if ((nbJoueur > 2)&&(nbJoueur <= 4)){
			$( ".nbPaire[data-value=8]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=18]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
		else if (nbJoueur > 4){
			$( ".nbPaire[data-value=8]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=18]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
	});

});	
</script>
<script>
$(function(){
	// Gestion de la page de login et inscription
	$('#modalStart').modal('show');
	$('#validMdp').hide();
	$("#activeInscription").click(function(){
		$('#validMdp').show();
		$('#validForm').val('inscription');
		console.debug($('#validForm').val());
		return false;
	});
	$("#activeConnexion").click(function(){
		$('#validMdp').hide();
		$('#validForm').val('connexion');
		console.debug($('#validForm').val());
		return false;
	});
	$("#validForm").click(function(){
		// requete ajax TODO (validation login server)
		var pseudo = $("#pseudo").val();
		var pwd = $("#mdp").val();
				
		var connexionValid  = false;
		if (pseudo.length != 0  && pseudo.length <= 10 && pseudo.length >= 3 && pwd.length != 0 && pwd.length >= 4){
			if ($('#validForm').val() == "inscription"){
				// Inscription de l'utilisateur
				var pwdValid = $('#validMdp').val();
				if (pwd == pwdValid){
					console.debug("inscription de l'utilisateur");
					
					// requete ajax d'inscription
					$.ajax({
					async: false,
					dataType: "json",
					type: "POST",
					url: "../dev/Memory_dev/players/signUp",
					data: ({login:pseudo, password:pwd}),
					success: function (data, textStatus)
							{
								alert(data.message);
								connexionValid = data.status;
							}
					});
				}
				else{
					connexionValid = false;
				}
			}
			else{
				// connexion de l'utilisateur
				console.debug("connexion de l'utilisateur");
				/*$('html').block({ message: '<h1>Connexion en cours...</h1>',overlayCSS:{backgroundColor:'#0'},theme: true,
    baseZ: 2000  });*/
				// requete ajax de connexion
				$.ajax({
					async: false,
					dataType: "json",
					type: "POST",
					url: "../dev/Memory_dev/players/signIn",
					data: ({login:pseudo, password:pwd}),
					success: function (data, textStatus)
							{
								alert(data.message);
								connexionValid = data.status;
							}
					});
			}
			
			
		}
		//connexionValid = true;
		if ( connexionValid == true){
			// Redirection vers l'acceuil
			console.debug("tout est correct -> accès jeu");
			$('#modalStart').modal('hide');
			$('#modalBeforeGame').modal('show');
			
		}
		else{
			//rien
			if ((pseudo.length > 10) ||(pseudo.length < 3)){
					alert("Le pseudo doit etre compris entre 3 et 10 caractere, veuillez saisir un autre pseudo");
					return false;
			}
			if (pwd.length < 4){
				alert("Le mot de passe doit faire plus de 3 caractere, veuillez saisir votre mot de passe");
				return false;
			}
			if ($('#validForm').val() == "inscription"){
				if (pwd != pwdValid){
					alert("La confirmation du mot de passe est incorrecte, veuillez saisir votre mot de passe");
					return false;
				}
			}
		}
		return false;
	});
});
</script>