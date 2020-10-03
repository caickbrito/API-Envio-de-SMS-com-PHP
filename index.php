<!DOCTYPE html>
<html>
<head>
	<!--BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/c975c3f558.js" crossorigin="anonymous"></script>
	<title>Envio de SMS com API</title>
</head>
<body>

	<div class="container d-flex justify-content-center my-5" >
		<div class="row">
			<form class="form-group"  method="POST" action="request.php" style="border: solid 1px #444; border-radius: 10px; padding: 10px 50px;" >
				<label for="name">Nome</label>

				<input class="form-control"  type="text" id='name' name="name">		
				<label for="phoneremetente">Telefone remetente</label>
				<input class="form-control"  type="number" id='phoneremetente' name="phoneremetente">
				<label for="phonedestino">Telefone Destinatario</label>
				<input class="form-control"  type="number" id='phonedestino' name="phonedestino">					
				<label for="msg">Mensagem</label>
				<textarea class="form-control" rows="6" name="msg" id="msg"></textarea>

				<button type="submit" class="btn btn-primary btn-sm my-3">Enviar mensagem</button>	
			</form>
		</div>
	</div>







	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVB
	nE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>





