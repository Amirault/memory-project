$(function(){
////// Gestion de la page de login et inscription
	$('#modalStart').modal({
	  backdrop: 'static',
	  keyboard: false
	});
	$("#activeInscription").click(function(){
		// L'utilisateur veut s'incrire
		$('#validMdp').show();
		$('#validForm').val('inscription');
		return false;
	});
	$("#activeConnexion").click(function(){
		// L'utilisateur veut se connecter
		$('#validMdp').hide();
		$('#validForm').val('connexion');
		console.debug($('#validForm').val());
		return false;
	});
	$("#validForm").click(function(){
		// Validation du formulaire de login/inscription
		var pseudo = $("#pseudo").val();
		var pwd = $("#mdp").val();
		var connexionValid  = false;
		
		if (pseudo.length != 0  && pseudo.length <= 10 && pseudo.length >= 3 && pwd.length != 0 && pwd.length >= 4){
			// Le pseudo et le mot de passe semble cohérant
			if ($('#validForm').val() == "inscription"){
				// Inscription de l'utilisateur
				var pwdValid = $('#validMdp').val();
				if (pwd == pwdValid){
					// Le mot de passe de confirmation est correct
					console.debug("inscription de l'utilisateur");
					// requete ajax d'inscription
				}
				else{
					// Le mot de passe de confirmation est incorrecte
					console.debug("mot de passe incorrecte");
					connexionValid = false;
				}
			}
			else if ($('#validForm').val() == "connexion"){
				// Connexion de l'utilisateur
				console.debug("connexion de l'utilisateur");
				/*$('html').block({ message: '<h1>Connexion en cours...</h1>',overlayCSS:{backgroundColor:'#0'},theme: true,
    baseZ: 2000  });*/
				// requete ajax TODO (validation login server)	
			}
		}
		connexionValid = true;
		// Si tout est ok coté serveur alors on accède au page suivante
		if ( connexionValid == true){
			// Tout est OK
			// Redirection vers la configuration avant la partie
			console.debug("tout est correct -> accès jeu");
			// On quitte la page de login
			$('#modalStart').modal('hide');
			// On affiche la page de configuration avant le jeu
			$('#modalBeforeGame').modal({
			  backdrop: 'static',
			  keyboard: false
			});
		}
		else{
			// Problème, on verifie le type d'erreur pour informer l'utilisateur
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
		return false; // Dans tout les cas on ne recharge pas la page
	});
});