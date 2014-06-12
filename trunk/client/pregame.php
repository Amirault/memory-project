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
									<script>
									$(function(){
										$("#creerPartie").click(function(){
											var gameType = $(".typePartie.active").html();
											var gameName = $("#nomPartie").val();
											var nbPlayers = $("#nbJoueur").val();
											var nbPairs = $(".nbPaire.active").html();

											// requete ajax d'inscription
											$.ajax({
											async: false,
											dataType: "json",
											type: "POST",
											url: "../dev/Memory_dev/games/gameCreate",
											data: ({gameType:gameType, gameName:gameName, nbPlayers:nbPlayers, nbPairs:nbPairs}),
											success: function (data, textStatus)
													{
														alert(data.message);
													}
											});
										});
									});
									</script>
								</div>
							</div>
						  </div>
						</div>
						<div class="accordion-group">
						  <div class="accordion-heading">
							<a id="joinGame" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							  Rejoindre une partie !
							</a>
							<script>
									$(function(){
										$("#joinGame").click(function(){
											// requete ajax d'inscription
											$.ajax({
											async: false,
											dataType: "json",
											type: "POST",
											url: "../dev/Memory_dev/games/gameFindAll",
											data: ({}),
											success: function (data, textStatus)
													{
														var ite = 0;
														var classe;
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
											url: "../dev/Memory_dev/gamePlayers/gameJoin",
											data: ({gameId:game_id}),
											success: function (data, textStatus)
													{
														alert(data.message);
													}
											});
										});

									});
									
									
									</script>
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