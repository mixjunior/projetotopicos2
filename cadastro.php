<?php 
	
	if(isset($_POST['criar'])){

		echo("<script type='text/javascript'>alert('Conta criada com sucesso!');</script>");

	}

?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="#" method="post">
			<p>Login:<input type="text" name="login" class="campos" required></p>
			<p>Senha:<input type="password" name="senha" class="campos" required></p>
			<p>Email:<input type="email" name="email" class="campos" required></p>
			<input type="submit" value="Cadastrar" name="criar">
		</form>
	</body>
</html>