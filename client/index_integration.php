<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<script src='bootstrap/js/jquery.js'></script>
		<script src='bootstrap/js/bootstrap.js'></script>
		<script src='bootstrap/js/blockUI.js'></script>
		<script src='bootstrap/js/wow.min.js'></script>
		<title>Memory</title>
		<style type="text/css">


		.flip-container {
    -webkit-perspective: 1000;
    -moz-perspective: 1000;
    -o-perspective: 1000;
    perspective: 1000;
}

.flip-container, .flip-front, .flip-back {
     height: 100%;
    position: absolute;
    width: 100%;
}

.flipper {
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;

    position: relative;
}

.flip-front, .flip-back {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;

    -webkit-transition: 0.6s;
    -webkit-transform-style: preserve-3d;

    -moz-transition: 0.6s;
    -moz-transform-style: preserve-3d;

    -o-transition: 0.6s;
    -o-transform-style: preserve-3d;

    -ms-transition: 0.6s;
    -ms-transform-style: preserve-3d;

    transition: 0.6s;
    transform-style: preserve-3d;


    position: absolute;
    top: 0;
    left: 0;
}

.flip-back {
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
}

.flip-container.hover .flip-back, .flip-container.hover .flip-back {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
}

.flip-container.hover .flip-front, .flip-container.hover .flip-front {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}


.flip-front {
    z-index: 2;
}
		</style>
	</head>
	<body>
		<div id="JEU" style="height:100%">
			<div class="row-fluid" style="height:100%; >
				<div class="span9">
					<div class="row-fluid wow bounceInUp" style="padding:5%;height:100%;">
						<!-- ZONE DE JEU -->
						<div class="row-fluid">
							<div class="span1 card flip-container" ligne="1" colonne="1" found="false" idPair="3" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/tony.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="2" found="false" idPair="2" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/eyal.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="3"  found="false" idPair="0" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/sof.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container"  ligne="1" colonne="4" found="false" idPair="1" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/Dat.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="5" found="false" idPair="0" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/sof.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="6" found="false" idPair="1" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/Dat.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="7" found="false" idPair="2" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/eyal.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="1" colonne="8" found="false"  idPair="3" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/tony.jpg" />
									</div>
								</div>
							</div>
						</div>
						<br/>
						<div class="row-fluid">
							<div class="span1 card flip-container" ligne="2" colonne="1" found="false" idPair="4" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/van.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card flip-container" ligne="2" colonne="2" found="false"  idPair="4" style="position:relative;border:1px solid black; overflow:hidden">
								<div class="flipper">
									<div class="flip-front">
										<img src="img/back-card.png" />
									</div>
									<div class="flip-back" >
										<img src="img/van.jpg" />
									</div>
								</div>
							</div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
						</div>
						<br/>
						<div class="row-fluid">
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
						</div>
						<br/>
						<div class="row-fluid">
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
							<div class="span1 card" style="border:1px solid black"></div>
						</div>
					</div>
				</div>
				<script>
				$(function() {
				$('.countdown').html(10);
				var doUpdate = function() {
				$('.countdown').each(function() {
				  var count = parseInt($(this).html());
				  if (count != 0) {
					$(this).html(count - 1);
				  }
				  else if (count == 0)
				  {
					nbClick = 3;
				  }
				});
			  };
			  // Mise à jour du temps toutes les secondes
			  setInterval(doUpdate, 1000);
			  
					new WOW().init();
				  $(".card").height($(".card").width());// Mise en forme des cartes (largeur = longueur)
				  
				  var nbClick = 0;
				  var firstCard = {};
				  $('.card').click(function(){
					// si la zone ne correspond pas à une zone deja trouvé $
					if ($(this).attr('found') == 'false'){
						switch (nbClick){
							case 0 :// Premier click
								$(this).addClass('hover');	
								firstCard['ligne'] = $(this).attr('ligne');
								firstCard['colonne'] = $(this).attr('colonne');
								firstCard['idPair'] = $(this).attr('idPair');
								nbClick ++;
								break;
							case 1 :// Second click
								// Test Carte non cliqué
								if ((firstCard['ligne'] != $(this).attr('ligne')) || (firstCard['colonne'] !=  $(this).attr('colonne'))){
									// Test si c'est une paire
									$(this).addClass('hover'); 
									if (($(this).attr('idPair') == firstCard['idPair'])){
										$(".card[idPaire='"+$(this).attr('idPair')+"']").attr( 'found','true');
										nbClick = 0; // le joueur peut rejouer car il a trouvé une paire
										$('.countdown').html(10);
										break;
									}
									else
									{ 
										// On passe au joueur suivant
									}
								}
								nbClick ++;
								break;
							default :
							break;
						}
					}
					return false;
				  });
				});
				</script>
				<div class="span3" style="height:100%;position:absolute;right:0;top:0;margin-left:2%;border-left:2px solid black;text-align:center">
					<!-- Zone information partie -->
					<div class="row-fluid" style="height:50%;">
						<div class="row-fluid">
							<p> Temps : <span class="countdown"></span> </p>
						</div>
						<div class="row-fluid">
							<p> Score : </p>
						</div>
						<div class="row-fluid" style="border-top:1px solid black">
							<div class="span6" style="border-right:1px solid black">
								<div class="row-fluid" style="border-bottom:1px solid black">Joueur</div>
							</div>
							<div class="span6" style="border-left:1px solid black">
								<div class="row-fluid" style="border-bottom:1px solid black">Nombre de Paires</div>
							</div>
						</div>
					</div>
					<div class="row-fluid" style="height:40%;position:relative;bottom:0;right:0;border-top:1px solid black;border-bottom:1px solid black;">
						<?php include('chat.php'); ?>
					</div>
				</div>
			</div>
		<!--</div> <button id="accueilStart" class="btn btn-success btn-large"> Start </button>-->
		<!--
		<div id="modalStart" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-header">
				<h3>Bienvenue, veuillez vous identifier :</h3>
			</div>
			<form id="formConnexion" name="formConnexion" >
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span1"></div>
						<div class="span4">
								<input id="pseudo" name="pseudo" placeholder="Votre Pseudo" class="input-xlarge"  type="text" required/>
								<input id="mdp" name="mdp" placeholder="Votre mot de passe" class="input-xlarge"  type="password" required/>
								<a href="#"  id="activeInscription">S'inscrire</a>
								ou
								<a href="#" id="activeConnexion">Se connecter</a>
								<input id="validMdp" class="hide" name="validMdp" placeholder="Confirmer le mot de passe" class="input-xlarge"  type="password" required/> 
						</div>
						<div class="span1"></div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row-fluid">
						<div class="span1"></div>
						<div class="span10" style="text-align:center">
							<button  class="btn" id="validForm" value="connexion">Connexion</button>
						</div>
						<div class="span1"></div>
					</div>
				</div>
			</form>
		</div>
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
		-->
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