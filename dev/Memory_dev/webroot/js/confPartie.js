$(function(){
////// Gestion de la configuration d'une partie
var isHost = false;
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
					setInterval(function(){refreshPlayers(data.gid)},1000);
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
		setInterval(function(){refreshPlayers(game_id)},1000);
	});
	
	
	function refreshGame(game_id)
	{
		console.debug(game_id);
		$.ajax({
		async: false,
		dataType: "json",
		type: "POST",
		url: "games/getGame",
		data: ({gameId:game_id}),
		success: function (data, textStatus)
				{

				}
			});	
	}
	
	function refreshPlayers(game_id)
	{
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
});