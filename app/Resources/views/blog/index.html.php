<!DOCTYPE html>
<html>
<head>
	<title>Início</title>
</head>
<body>

	<form action="<?php echo $view['router']->path('index') ?> " method="POST">

		<label>Nome</label>
		<input type="text" name="nome"/><br/><br/>
		<label>Idade</label>
		<input type="number" name="idade"/><br/><br/>
		<label>Senha</label>
		<input type="password" name="senha"/><br/><br/>
		<input type="submit" name="enviar"/>

	</form>

</body>
</html>