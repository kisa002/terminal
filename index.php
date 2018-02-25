<html>
	<head>
		<meta charset="UTF-8">
		<title>HolyKnight Terminal</title>
		
		<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>

		<style>
			@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
            *
            {
                font-family: "Inconsolata", sans-serif;
                -webkit-overflow-scrolling : touch;
                
                font-size: 20px;
            }
            
			body
			{
				background-color: black;
				margin: 1%;
			}
			
			input
			{
				font-size: 20px;
				
				color: #FFFFFF;
				
				background-color: transparent;
				border: none;
				outline: none;
			}
			
			.command, .command_log
			{
				color: white;
			}
			
			.dollar
			{
				color: #FFEC40;
			}
		</style>
		
		<script>
			function send_command(command)
			{
				document.getElementById('command_log').innerHTML += "HAEYUM:~ HolyKnight " + command;
				
				switch(command)
				{
					case "help":
						command = "developer : show developer informaition<br>ls : show folder list<br>rm : remove file<br>clear : clear terminal log";
						break;
					
					case "developer":
						command = "성스러운기사라는 사람은 레알 핵존잘";
						break;
						
					case "ls":
						command = "Activation&nbsp&nbsp&nbspProjects<br>Loli&nbsp&nbsp&nbspGood";
						break;
					
					case "clear":
						command = "응 그딴거 없어";
						break;
						
					default:
						command = command + ": command not found";
						break;
				}
				
				str = "<div class='command_log' id='command_log'>" + command + "<br></div>";
				
				document.getElementById('command_log').innerHTML += str;
				document.getElementById('command').value = "";
			}
		</script>
	</head>
	
	<body>
		<?php	
			echo "<div class='command_log'>Hello, HolyKnight World!</div>\n";
			echo "<div class='command_log' id='command_log'>".date('Y. m. d. h:i:s', time())."<br><br></div>\n";
			echo "<span id='input'>\n";
				echo "<span class='dollar'>HAEYUM:~ HolyKnight$</span>\n";
				echo " <input id='command' autofocus onkeydown='if(event.keyCode == 13) send_command(this.value);'>";
			echo "</span>\n";
		?>
		<br>
	</body>
</html>