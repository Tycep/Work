<!DOCTYPE html>
<html>
<head>
	<?php
		include 'scripts/database.php';
	?>
	<meta charset="utf-8">
	<script src="js/jquery-3.3.1.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Weed</title>

	<style type="text/css">
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-image: url("img/desert.gif");
		}
	</style>
</head>

<?php

	if(isset($_POST['login']) && isset($_POST['password'])){
		header('Location: lobby.php', true, 301);

		
		// Get_Data();
	}
?>

<body style="height: 100vh;">
	<div class="all" style="display: flex; height: 100%;">
		<form id="submit_form" method="POST" action="/" style="margin: auto; display: block;">
			<div style="margin-top: -150px">
				<input type="text" name="login" style="display: block; border-radius: 5px;  margin: auto;">
				<input type="password" name="password" style="display: block; margin: auto; ;margin-top: 7px; border-radius: 5px;">
				<input type="button" id="btn" style="display: block; margin: 7px auto; width: 90%; letter-spacing: 1px; border-radius: 8px; outline: none;" value="press de baton">
				<div style="margin-top: -5px; position: absolute; left: 50%">
					<? echo $_POST['login']; ?>
					<div id="error" style="color: red; position: relative; left: -50%"></div>
				</div>
			</div>
		</form>
	</div>



	<script type="text/javascript">
		$(function(){
			// var constLogin = 'Tycep'; var constPassword = 'maxzbl';
	
			
 
 		
		$('#btn').click(function valid(){
			// $( "#submit_form" ).submit(function( event ) {
			// event.preventDefault();
			// var $form = $(this),
				var login = $("input[name='login']").val(),
				password = $("input[name='password']").val();
				// urlfrm = $form.attr("action");
	
			

			if (!login || !password){
				$("#error").text('Заполните все поля!');
			}
			else {
				alert(login + " " + password);
				$.ajax({
				  method: "POST",
				  url: "index.php",
				  data: { login: login, password: password }
				})
				  .done(function( msg ) {
				    alert( "Data Saved: " + msg );
				  });
				// $.post( "/", { login: login, password: password } );
				// posting.done(function(data));

				// $.post( "test.php", { login: login, password: password } );

				// if(login == constLogin && password == constPassword){
				// 	$(location).attr('href', 'lobby.php');
				// }
				// else {
				// 	$("#error").text('Неправильный логин или пароль!')
				// }
			}
		});

		});

		

	</script>
	<?php

	?>
</body>
</html>