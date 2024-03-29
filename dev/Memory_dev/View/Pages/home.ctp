<?php
			session_start();
			
			if(isset($_SESSION["login"]))
			{
				echo "<script>
								$(document).ready(function()
												{
													$('#modalStart').modal('hide');
													$('#modalBeforeGame').modal({
									  backdrop: 'static',
									  keyboard: false
									});
											})
					;</script>";
					?>
					<script>
						var login = '<?php echo $_SESSION["login"]; ?>';
						var id = '<?php echo $_SESSION["id_player"]; ?>';
					</script>
		<?php
			}
		?>
		
<div id="JEU" style="height:100%;">
		<div class="row-fluid" style="height:100%; >
			<div class="span9">
				<div class="row-fluid wow bounceInUp" id="gridGame" style="padding:5%;height:100%;">
					<!-- ZONE DE JEU -->
					
				</div>
			</div>

			<div class="span3" style="background-color:white;height:100%;position:absolute;right:0;top:0;margin-left:2%;border-left:2px solid black;text-align:center">
				<!-- Zone information partie -->
				<div class="row-fluid" style="height:50%;">
					<div class="row-fluid">
						<p > Temps : <p>
						<p><span style="font-size:30px" class="countdown wow pulse" data-wow-iteration="10"></span> </p>
					</div>
					<div class="row-fluid">
						<p> Score : </p>
					</div>
					<div class="row-fluid" style="border-top:1px solid black">
						<div class="span6" style="border-right:1px solid black">
							<div class="row-fluid" style="border-bottom:1px solid black">Joueur</div>
							<table class="table table-small-font table-bordered table-striped">
					<tbody>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
					</tbody>
				</table>
						</div>
						<div class="span6" style="border-left:1px solid black">
							<div class="row-fluid" style="border-bottom:1px solid black">Nb de Paires</div>
							<table class="table table-small-font table-bordered table-striped">
					<thead>
					<tbody>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
						</tr>
					</tbody>
				</table>
						</div>
					</div>
				</div>
				<div class="row-fluid" style="height:40%;position:relative;bottom:0;right:0;border-top:1px solid black;border-bottom:1px solid black;">
					<?php //include('chat.php'); ?>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="modalStart" class="modal hide fade">
		<div class="modal-header">
			<h3>Bienvenue, veuillez vous identifier :</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span4">
						<input id="pseudo" name="pseudo" placeholder="Votre Pseudo" class="input-xlarge"  type="text" required/>
						<input id="mdp" name="mdp" placeholder="Votre mot de passe" class="input-xlarge"  type="password" required/>
						<a href="#"  id="activeInscription">S'inscrire</a>
						ou
						<a href="#" id="activeConnexion">Se connecter</a>
						<input id="validMdp" style="display:none" name="validMdp" placeholder="Confirmer le mot de passe" class="input-xlarge"  type="password" required/> 
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
	</div>
	<div id="modalBeforeGame" class="modal hide fade" >
		<div class="modal-header">
			<h3>Avant de jouer :</h3>
		</div>
		<div class="modal-body">
			<div class="row-fluid">
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
					  <div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						  Créer une partie !
						</a>
					  </div>
					  <div id="collapseOne" class="accordion-body collapse in">
						<div class="accordion-inner">
							<div class="row-fluid" style="text-align:center">
								<p>Type de partie :</p>
								<span class="btn-group" data-toggle="buttons-radio" id="typePartie">
								  <button class="typePartie btn active" data-value="0">Arcade</button>
								  <button class="typePartie btn" data-value="1">Versus</button>
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
								<button id="creerPartie" class="btn btn-primary"> Créer la partie </button>
							</div>
						</div>
					  </div>
					</div>
					<div class="accordion-group">
					  <div class="accordion-heading">
						<a id="joinGame" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
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
										<tbody id="gameList">
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
	<div id="modalWin" class="modal hide fade" >
		<div class="modal-header">
		<h3> Bravo, vous avez gagne ! </h3>
		</div>
		<div class="modal-body">	
			<div class="table-responsive">
				<table class="table table-small-font table-bordered table-striped">
					<thead>
						<tr>
							<th>Joueur</th>
							<th>Score</th>
						</tr>
					</thead>
					<tbody>
						<tr class="active">
							<td></td>
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
							<td></td>
						</tr>
						<tr class="active">
							<td></td>
							<td></td>
						</tr>
						<tr class="success">
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span5" style="text-align:center">
					<button  class="btn validEndGame" value="rejouer">Rejouer</button>
				</div>
				<div class="span5" style="text-align:center">
					<button  class="btn validEndGame" value="quitter">Quitter</button>
				</div>
				<div class="span1"></div>
			</div>
		</div>
	</div>
	<div id="modalWaitPlayer" class="modal hide fade" >
		<div class="modal-header">
		<h3> Attente des joueurs </h3>
		</div>
		<div class="modal-body">	
			<div class="table-responsive">
				<table class="table table-small-font table-bordered table-striped">
					<thead>
						<tr>
							<th>Joueurs</th>
						</tr>
					</thead>
					<tbody id="playerList">

						
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10" style="text-align:center">
					<button  class="btn btn-primary" id="validLaunchGame" disabled="disabled">Patientez ...</button>
				</div>
				<div class="span1"></div>
			</div>
		</div>
	</div>


