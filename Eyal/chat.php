
<?php 
$colours = array('007AFF','FF7000','FF7000','15E25F','CFC700','CFC700','CF1100','CF00BE','F00');
$user_colour = array_rand($colours);
?>
<script language="javascript" type="text/javascript">  
$(document).ready(function(){
var myIDpartie;
	//create a new WebSocket object.
	//var wsUri = "ws://localhost:9000/demo/server.php";
	var wsUri = "ws://localhost:7777/client/server.php";	
	websocket = new WebSocket(wsUri); 
	
	websocket.onopen = function(ev) { // connection is open 
		$('#message_box').append("<div class=\"system_msg\">Connected!</div>"); //notify user
	}

	$('#send-btn').click(function(){ //use clicks message send button	
		var mymessage = $('#message').val(); //get message text
		var myname = $('#name').val(); //get user name
		myIDpartie = $('#IDpartie').val(); //get Id partie
		//console.log(myIDpartie);
		if(myname == ""){ //empty name?
			alert("Entrze votre nom");
			return;
		}
		if(mymessage == ""){ //emtpy message?
			alert("Ecrivez un message!");
			return;
		}
		
		if(myIDpartie == ""){ //emtpy message?
		alert("Ecrivez un message!");
		return;
		}
		
		//prepare json data
		var msg = {
		message: mymessage,
		name: myname,
		color : '<?php echo $colours[$user_colour]; ?>',
		IDpartie : myIDpartie
		};
		//convert and send data to server
		websocket.send(JSON.stringify(msg));
	});
	
	//#### Message received from server?
	websocket.onmessage = function(ev) {
		var msg = JSON.parse(ev.data); //PHP sends Json data
		var type = msg.type; //message type
		var umsg = msg.message; //message text
		var uname = msg.name; //user name
		var ucolor = msg.color; //color
		//var uIDpartie= msg.IDpartie; //ID

		if(type == 'usermsg') 
		{
			$('#message_box').append("<div part="+myIDpartie+" class=\"partie\"><span  class=\"user_name\" style=\"color:#"+ucolor+"\">"+myIDpartie+"  "+uname+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
		}
		if(type == 'system')
		{
		//	$('#message_box').append("<div class=\"system_msg\">"+umsg+"</div>");
		}
		
		$('#message').val(''); //reset text
		$('.partie').each(function(i, obj) {
    //test
	console.debug("rentre ds la focntion");
	if (myIDpartie==50)
	{
	$(".partie[part='"+myIDpartie+"']").hide();
	}
});
	};
	
	websocket.onerror	= function(ev){$('#message_box').append("<div class=\"system_error\">Error Occurred - "+ev.data+"</div>");}; 
	websocket.onclose 	= function(ev){$('#message_box').append("<div class=\"system_msg\">Connection Closed</div>");}; 
	
	//filtrage
	
	

	
});
</script>
<!-- conteneur du chat -->
<div class="row-fluid" style="height:100%; ">
<div style="background-image:linear-gradient(#483D8B, black); color:white" >Chat
</div>
<!-- bloc ou ce trouve les messages -->
	<div id="message_box" class="row-fluid"  style="border:10px;"></div>
	<!-- bloc permettant de saisir le message -->
	<div class="row-fluid" style="position:absolute;bottom:10px;left:0;right:0;border-top:1px solid grey;">
	<!-- <input type="text" name="IDpartie" id="IDpartie" placeholder="Your ID" maxlength="10" style="width:10%"  />
		<input type="text" name="name" id="name" placeholder="Your Name" maxlength="10" style="width:20%"  />-->
		<input type="text" name="message" id="message" placeholder="Message" maxlength="80" style="width:50%;margin:auto;" />
		<button class="btn" id="send-btn">Envoyer</button>
	</div>
</div> 