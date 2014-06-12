<div id="modalStart" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-header">
		<h3>Bienvenue, veuillez vous identifier :</h3>
	</div>
	<form id="formConnexion" name="formConnexion">
		<div class="modal-body">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span4">
					<input id="pseudo" name="pseudo" placeholder="Votre Pseudo" class="input-xlarge"  type="text" required/>
					<input id="mdp" name="mdp" placeholder="Votre mot de passe" class="input-xlarge"  type="password" required/>
					<a href="#"  id="activeInscription">S'inscrire</a>
					ou
					<a href="#" id="activeConnexion">Se connecter</a>
					<input id="validMdp" class="hide" name="validMdp" placeholder="Confirmer le mot de passe" class="input-xlarge"  type="password" required/> 
				</div>
				<div class="span1">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row-fluid">
				<div class="span1">
				</div>
				<div class="span10" style="text-align:center">
					<button  class="btn" id="validForm" value="connexion" type="submit">Connexion</button>
				</div>
				<div class="span1">
				</div>
			</div>
		</div>
	</form>
</div>