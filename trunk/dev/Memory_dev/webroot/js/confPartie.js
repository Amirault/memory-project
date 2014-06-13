$(function(){
// Déclaration des variables global du jeu
var startGame = false;
var nbClick = 0; // Nombre de click sur les cartes
var nbPairTotal = 5; // Nombre de pair sur la grille
var nbPair = 0 ;// Nombre de pair trouvé initialisation importante
var firstCard = {}; // Information sur la première carte cliqué
var secondCard = {}; // Information sur la seconde carte cliqué
var playerWait; // Variable pour l'attente a chaque tours
var dataGame = {};
var waiting_user = false;
//$(document).ajaxStop($.unblockUI);

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
			
 
		  
				  
				  $('body').on('click', '.card', function(){
					console.log("un click"+nbClick);
					// si la zone ne correspond pas à une zone deja trouvé
					if ($(this).attr('found') == 'false'){
						switch (nbClick){
							case 0 :// Premier click
								$(this).addClass('hover');
								$.ajax({
										async: true,
										dataType: "json",
										type: "POST",
										url: "gameCards/flipCard",
										data: ({gameCardId:$(this).attr('idGCard'),gameId: dataGame['Game']['id'],isFlippedUp:1}),
										success: function (data, textStatus)
												{
													console.debug("AfficheCard");
													console.debug(data);
													dataGame=data;
												}

										});								
								firstCard['ligne'] = $(this).attr('ligne');
								firstCard['colonne'] = $(this).attr('colonne');
								firstCard['idPair'] = $(this).attr('idPair');
								firstCard['idGCard'] =$(this).attr('idGCard');
								firstCard['set'] = true;
								nbClick ++;
								// requête ajax  première carte retournée
								break;
							case 1 :// Second click
									console.log("clique 2");
								// Test Carte non cliqué
								if ((firstCard['ligne'] != $(this).attr('ligne')) || (firstCard['colonne'] !=  $(this).attr('colonne'))){
									
									secondCard['ligne'] = $(this).attr('ligne');
									secondCard['colonne'] = $(this).attr('colonne');
									secondCard['idPair'] = $(this).attr('idPair');
									secondCard['set'] = true;
									// Test si c'est une paire
									$(this).addClass('hover'); 									
									$.ajax({
										async: true,
										dataType: "json",
										type: "POST",
										url: "gameCards/flipCard",
										data: ({gameCardId:$(this).attr('idGCard'),gameId: dataGame['Game']['id'],isFlippedUp:1}),
										success: function (data, textStatus)
												{
		
													console.debug("AfficheCard");
													dataGame=data;
												}

										});
									if (($(this).attr('idPair') == firstCard['idPair'])){
										$(".card[idPaire='"+$(this).attr('idPair')+"']").attr( 'found','true');
										nbClick = 0; // le joueur peut rejouer car il a trouvé une paire
										$('.countdown').html(10);
										secondCard['set'] = false;
										firstCard['set'] = false;
										nbPair ++;
										
										// Test si toute les cartes ont été retournéeq
										if ( nbPair == nbPairTotal){
										// On regarde le nombre de pair de chacun
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
									console.log("second click");
									$.ajax({
										async: true,
										dataType: "json",
										type: "POST",
										url: "gameCards/flipCardDown",
										data: ({gameCardId:$(this).attr('idGCard'),gameCardId2: firstCard['idGCard'],gameId:dataGame['Game']['id']}),
										success: function (data, textStatus)
												{
		
													console.debug("AfficheCard");
													dataGame=data;
												}

										});
									// On bloque le joueur (patiente) car c'est au joueur suivant de jouer
										// On attends un peu avant de retourner les cartes puis on donne la main au joueur suivant
										// NextUSER ATTENTION NUMBERPLAYER ET NON MAXIMUM CHANGER
										$.ajax({
										async: false,
										dataType: "json",
										type: "POST",
										url: "games/nextPlayer",
										data: ({gameId:dataGame['Game']['id'],currentPlayer:dataGame['Game']['currentPlayer'],nbPlayer:dataGame['GamePlayer'].length}),
										success: function (data, textStatus)
												{
													console.debug("nextPlayer");
													dataGame=data;
													timer = setInterval(function(){refreshStatus(dataGame['Game']['id'])},200);
												}
										});
										
										
									}
								}
								//nbClick ++;
								break;
							default :
							break;
						}
							
					}
				  });
				  
////// Gestion de la configuration d'une partie
var isHost = false;
var timer, timer2;
var game_id;

//console.log(login);

	$('#nbJoueur').on('change', function() {
		// Choix du nombre de joueur dans la combobox
		// Désactivation des difficultées non utilisées
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
	$('.typePartie').click(function(){
		var typePartie = $(".typePartie.active").attr("data-value");
		// 1 = arcade
		// 0 = versus
		if (typePartie == 1){
			$("#nomPartie").attr("disabled", "disabled");
			$("#nbJoueur").attr("disabled", "disabled");
		}
		else{
			$("#nomPartie").removeAttr( "disabled" );
			$("#nbJoueur").removeAttr( "disabled" );
		}
	});
	
	$("#creerPartie").click(function(){
	var gameType = $(".typePartie.active").html();
	var gameName = $("#nomPartie").val();
	var nbPlayers = $("#nbJoueur").val();
	var nbPairs = $(".nbPaire.active").html();

		// requete ajax de creation de partie
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "games/gameCreate",
		data: ({gameType:gameType, gameName:gameName, nbPlayers:nbPlayers, nbPairs:nbPairs}),
		success: function (data, textStatus)
				{
					isHost = true;
					console.debug(data);
					$('#modalBeforeGame').modal('hide');
					$('#modalWaitPlayer').modal({
						  backdrop: 'static',
						  keyboard: false });
					game_id = data.gid;
					timer = setInterval(function(){refreshPlayers(data.gid)},1000);
				}
		});
	 
	});
	
	$("#joinGame").click(function(){
		// requete ajax d'inscription
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "games/gameFindAll",
		data: ({}),
		success: function (data, textStatus)
				{
					var ite = 0;
					var classe;
					$("#gameList").html("");
					jQuery.each(data, function(i, val)
					{
						ite ++;
						if (ite%2==1)
							classe = "active";
						else
							classe = "success";
						$("#gameList").append("<tr class='"+classe+"'><td>"+val["Game"]["name"]+"</td><td>"+val["Player"]["login"]+"</td><td>"+val["GamePlayer"].length+"/"+val["Game"]["numberMaximumOfPlayers"]+"</td><td style='padding:0'><button class='btnJoin' id='"+val["Game"]["id"]+"' class='btn btn-default span12'> GO ! </button></td></tr>");															
					});

				}		
		});
	});
// L'utilisateur join une partie
	$('body').on('click', '.btnJoin',  function() {
		var game_id =  $(this).attr('id');
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "gamePlayers/gameJoin",
		data: ({gameId:game_id}),
		success: function (data, textStatus)
				{
					alert(data.message);
					$('#modalBeforeGame').modal('hide');
					$('#modalWaitPlayer').modal({
						  backdrop: 'static',
						  keyboard: false
					});

				}
		});
		timer = setInterval(function(){refreshPlayers(game_id);},1000);
		timer2 = setInterval(function(){refreshWaitingGame(game_id);},1000)
	});
// Refraichissement en attendant que le jeux démarre	
	function refreshWaitingGame(gid)
	{
		game_id=gid;
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "games/getGame",
		data: ({gameId:game_id}),
		success: function (data, textStatus)
				{
					console.debug(data);
					if (data["Game"]["isPending"] == 1)
					{
						clearInterval(timer);
						clearInterval(timer2);
						$('#modalWaitPlayer').modal('hide');
						timer = setInterval(function(){refreshStatus(game_id);},1000);
					}
					
				}
		});
	}
// Mise à jour du statut de la partie (toutes les infos)	
	function refreshStatus(gid)
	{
		console.log("refresh");
		game_id=gid;
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "games/getGame",
		data: ({gameId:game_id}),
		success: function (data, textStatus)
				{
					dataGame = data;
					console.debug("Current : "+dataGame['Game']['currentPlayer']);
					if (dataGame['GamePlayer'][dataGame['Game']['currentPlayer']]['player_id'] -id == 0){
						$.unblockUI();
						nbClick = 0;
						$('.countdown').html(10);
						clearInterval(timer);
						loadGrid();
						// C'est mon tour je joue
						console.log('joue '+id);
						playerPlay();
						waiting_user = false;
					}else{
						// On attends que ce soit notre tour
						console.log("en attente"+dataGame['GamePlayer'][dataGame['Game']['currentPlayer']]['player_id'] );
						nbClick = 0;
						if (waiting_user == false){
							waitPlayer();
							waiting_user = true;
						}
						loadGrid();
						$(".card").height($(".card").width());// Mise en forme des cartes (largeur = longueur)
					}
				}
		});
	}
	////// Mise à jour du temps toutes les secondes
		function playerPlay(){
		$('.countdown').html(10);
		/*  var doUpdate = setInterval(
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
				clearInterval(doUpdate);
				$.ajax({
						async: false,
						dataType: "json",
						type: "POST",
						url: "games/nextPlayer",
						data: ({gameId:dataGame['Game']['id'],currentPlayer:dataGame['Game']['currentPlayer'],nbPlayer:dataGame['GamePlayer'].length}),
						success: function (data, textStatus)
								{
									console.debug("nextPlayer");
									dataGame=data;
									$(".countdown").html(10);
								}
						});
				
			  }
			});
			},1000
			);*/
			// var setInterval(doUpdate, 1000);
			  
		//	new WOW().init();
		  $(".card").height($(".card").width());// Mise en forme des cartes (largeur = longueur)
		}
	function refreshPlayers(gid)
	{
		game_id=gid;
		console.debug(game_id);
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "gamePlayers/getGame",
		data: ({gameId:game_id}),
		success: function (data, textStatus)
				{
					console.debug(data);
					$('#modalBeforeGame').modal('hide');
					$('#modalWaitPlayer').modal({
						  backdrop: 'static',
						  keyboard: false
			});
			$("#playerList").html("");
			var ite = 0;
			jQuery.each(data, function(i, val)
					{
						ite ++;
						if (ite%2==1)
							classe = "active";
						else
							classe = "success";
						if (val["Player"]["id"] == val["Game"]["player_id"])
							$("#playerList").append("<tr class='"+classe+"'><td> HOST "+val["Player"]["login"]+"</td></tr>");		
						else{
							$("#playerList").append("<tr class='"+classe+"'><td>"+val["Player"]["login"]+"</td></tr>");
							if (isHost == true){
								$("#validLaunchGame").html("Lancer");
								$("#validLaunchGame").removeAttr("disabled");
							}
						}
					});
				}
		});
	}
	
		$("#validLaunchGame").click(function(){
			$.ajax({
				async: false,
				dataType: "json",
				type: "POST",
				url: "games/startGame",
				data: ({gameId:game_id}),
				success: function (data, textStatus)
						{
							alert(data.message);
							startGame=true;
							clearInterval(timer);
							//timer = setInterval(function(){refreshGrille(game_id);},1000);
							refreshStatus(game_id);
							$('#modalWaitPlayer').modal('hide');
						}	
			});	
	});
	function refreshGrid(tab){
		// rechargement des elements de la grille si modification (comparaison)
		for (i=1; i <= 4; i++){
			for (j=1; j <= 8; j++){
				if ($(".card[ligne='"+i+"'][colonne='"+j+"']").attr('flipped') != tab[i][j].found){
					// On retourne la carte du sens du server
					if (tab[i][j].found == 'back'){
						$(".card[ligne='"+i+"'][colonne='"+j+"']").attr('flipped','back');
						$(".card[ligne='"+i+"'][colonne='"+j+"']").removeClass('hover');
					}else{
						$(".card[ligne='"+i+"'][colonne='"+j+"']").attr('flipped','up');
						$(".card[ligne='"+i+"'][colonne='"+j+"']").removeClass('hover');
					}
				}
			}
		}
	}
	function loadGrid(){
		var str;
		var colMax;
		var ligneMax;
		$("#gridGame").html("");
		if (dataGame['Difficulty']['numberOfPairs'] == 8){
			colMax = 4;
			ligneMax = 4;
		}else if (dataGame['Difficulty']['numberOfPairs'] == 16){
			colMax = 8;
			ligneMax = 4;
		}
		for (i=0; i < ligneMax; i++){
			str = '<div class="row-fluid">';
			for (j=0; j < colMax; j++){
				
				if (dataGame['GameCard'][i*colMax+j]['isFlippedUp'] == true){
		console.debug(dataGame['GameCard'][i*colMax+j]['isFlippedUp']);
					str += '<div class="span1 card flip-container hover"';
				}else{
				console.log("faux");
					str += '<div class="span1 card flip-container"';
				}
				str += ' ligne="'+i+'" colonne="'+j+'" idGCard="'+dataGame['GameCard'][i*colMax+j]['id']+'" flippedUp="'+dataGame['GameCard'][i*colMax+j]['isFlippedUp']+'" found="'+dataGame['GameCard'][i*colMax+j]['isGone']+'" idPair="'+dataGame['GameCard'][i*colMax+j]['card_id']+'" style="position:relative;overflow:hidden">'
					+'<div class="flipper">'
						+'<div class="flip-front">'
								+'<img src="img/back-card.png" />'
						+'</div>'
						+'<div class="flip-back">'
								+'<img class="img-card" src="img/trombi/Info/'+dataGame['GameCard'][i*colMax+j]['card_id']+'.jpg" />'
						+'</div>'
					+'</div>'
				+'</div>';
			}
			str += '</div><br />';
			$("#gridGame").append(str);
		}
	}
	function waitPlayer(){
							   if (firstCard != {}){
								if (firstCard['set'] == true){
								   // On retourne les cartes
									$(".card[ligne='"+firstCard['ligne']+"'][colonne='"+firstCard['colonne']+"']").removeClass('hover'); 
								}
								if (secondCard['set'] == true){
									$(".card[ligne='"+secondCard['ligne']+"'][colonne='"+secondCard['colonne']+"']").removeClass('hover');
								}
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
});