$(function(){
// Déclaration des variables global du jeu
var startGame = false;
var nbClick = 0; // Nombre de click sur les cartes
var nbPairTotal = 5; // Nombre de pair sur la grille
var nbPair = 0 ;// Nombre de pair trouvé initialisation importante
var firstCard = {}; // Information sur la première carte cliqué
var secondCard = {}; // Information sur la seconde carte cliqué
var playerWait; // Variable pour l'attente a chaque tours

//$(document).ajaxStop($.unblockUI);
	$("#validLaunchGame").click(function(){
	//
	});
//// script de gestion de la fin du jeu
	$(".validEndGame").click(function(){
		if ($(this).val() == 'rejouer'){
			// On redemarre le jeu, on patiente. si on est host alors on peut démarrer la partie si nbjoueur > 1
			$('#modalWin').modal('hide');
			$('#modalWaitPlayer').modal({
			  backdrop: 'static',
			  keyboard: false
			});
			// Lancement du pool ajax selon si on est host ou visiteur
		}
		else{
			// On retourne à la page de configuration de la partie
			$('#modalWin').modal('hide');
			$('#modalBeforeGame').modal({
			  backdrop: 'static',
			  keyboard: false
			});
		}
	});
			
////// Mise à jour du temps toutes les secondes
		if (startGame == true){
		  $('.countdown').html(10);
		  var doUpdate = setInterval(
			function() {
			$('.countdown').each(function() {
			  var count = parseInt($(this).html());
			  if (count != 0) {
				$(this).html(count - 1);
					if (count <= 4) {
						$(".countdown").css('color','red');
					}
			  }
			  else if (count == 0)
			  {
				$(".countdown").css('color','black');
				nbClick = 3;
				waitPlayer();
				clearInterval(doUpdate);
			  }
			});
			},1000
			);
			// var setInterval(doUpdate, 1000);
			  
					new WOW().init();
				  $(".card").height($(".card").width());// Mise en forme des cartes (largeur = longueur)
				 } 
				  
				  $('.card').click(function(){
					// si la zone ne correspond pas à une zone deja trouvé
					if ($(this).attr('found') == 'false'){
						switch (nbClick){
							case 0 :// Premier click
								$(this).addClass('hover');	
								firstCard['ligne'] = $(this).attr('ligne');
								firstCard['colonne'] = $(this).attr('colonne');
								firstCard['idPair'] = $(this).attr('idPair');
								firstCard['set'] = true;
								nbClick ++;
								// requête ajax  première carte retournée
								break;
							case 1 :// Second click
								// Test Carte non cliqué
								if ((firstCard['ligne'] != $(this).attr('ligne')) || (firstCard['colonne'] !=  $(this).attr('colonne'))){
									secondCard['ligne'] = $(this).attr('ligne');
									secondCard['colonne'] = $(this).attr('colonne');
									secondCard['idPair'] = $(this).attr('idPair');
									secondCard['set'] = true;
									// Test si c'est une paire
									$(this).addClass('hover'); 
									if (($(this).attr('idPair') == firstCard['idPair'])){
										$(".card[idPaire='"+$(this).attr('idPair')+"']").attr( 'found','true');
										nbClick = 0; // le joueur peut rejouer car il a trouvé une paire
										$('.countdown').html(10);
										secondCard['set'] = false;
										firstCard['set'] = false;
										nbPair ++;
										// Test si toute les cartes ont été retournéeq
										if ( nbPair == nbPairTotal){
											// On affiche Bravo et perdu sur les autres joueur puis le tableau des scores
											//alert('bravo');
											$.unblockUI();
											
											$('#modalWin').modal({
											  backdrop: 'static',
											  keyboard: false
											});
											//return false:
											// requete ajax pour informer de la fin de la partie
										}
										// requête ajax seconde carte retournée
										break;
									}
									else
									{ 
									// On bloque le joueur (patiente) car c'est au joueur suivant de jouer
										// On attends un peu avant de retourner les cartes puis on donne la main au joueur suivant
										var playerWait = setInterval(
											function() {
												if (playerWait){
												   clearInterval(playerWait);
													// On retourne les cartes
													$(".card[ligne='"+firstCard['ligne']+"'][colonne='"+firstCard['colonne']+"']").removeClass('hover'); 
													$(".card[ligne='"+secondCard['ligne']+"'][colonne='"+secondCard['colonne']+"']").removeClass('hover');
													 $.blockUI({ 
													message: '<h1>Veuillez patienter !</h1>',	
													css: { 
														border: 'none',										
														padding: '15px', 
														bottom : '10px',
														left: '25%',
														right: '',
														top: '',
														backgroundColor: '#000', 
														'-webkit-border-radius': '10px', 
														'-moz-border-radius': '10px', 
														opacity: 0.5, 
														color: '#fff'													
													} });
													//$(this).addClass('hover'); 
													// requête Ajax On passe au joueur suivant
												}
											}
										, 1000);
										
									}
								}
								//nbClick ++;
								break;
							default :
							break;
						}
					}
					return false;
				  });
				  function waitPlayer(){
					var playerWait = setInterval(
						function() {
							if (playerWait){
							   clearInterval(playerWait);
								if (firstCard['set'] == true){
								   // On retourne les cartes
									$(".card[ligne='"+firstCard['ligne']+"'][colonne='"+firstCard['colonne']+"']").removeClass('hover'); 
								}
								if (secondCard['set'] == true){
									$(".card[ligne='"+secondCard['ligne']+"'][colonne='"+secondCard['colonne']+"']").removeClass('hover');
								}
								 $.blockUI({ 
								message: '<h1>Veuillez patienter !</h1>',	
								css: { 
									border: 'none',										
									padding: '15px', 
									bottom : '10px',
									left: '25%',
									right: '',
									top: '',
									backgroundColor: '#000', 
									'-webkit-border-radius': '10px', 
									'-moz-border-radius': '10px', 
									opacity: 0.5, 
									color: '#fff'													
								} });
								//$(this).addClass('hover'); 
								// requête Ajax On passe au joueur suivant
							}
						}
					, 1000);
					}
				});