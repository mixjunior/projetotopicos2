<!DOCTYPE html>
<html>
	<head>
		<style>

			#main{

				width:900px;
				margin:auto;
				padding:50px;

			}

			#arquivos{

				width:100%;


			}

			.arquivo{

				width:75px;
				margin-left:20px;
				float:left;

			}
		</style>
	</head>
	<body>
		<header>
			<a href="index.php?sair=1">Sair</a>
		</header>
		<section id="main">
			<form>
				Nome:<input type="text" value="" name="nome" required class="campos">
				<input type="file" name="arquivo" class="botoes">
				<input type="submit" name="enviar" value="enviar" class="botoes">
			</form>
			<div id="arquivos">
				<div class="arquivo">
					<iframe id="teste" src='arquivos/teste.pdf' style='width:200px; height:200px;' frameborder='0'></iframe>
				</div>
				<div class="arquivo">
					<iframe id="teste" src='arquivos/teste2.png' style='width:200px; height:200px;' frameborder='0'></iframe>
				</div>
			</div>
		</section>
		<footer></footer>
	</body>
</html>