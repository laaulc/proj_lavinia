<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<h1>Oi, <?php echo $nome ?>. <br/> Você inseriu a senha <?php echo $senha ?> e sua idade é <?php echo $idade ?> anos. </h1>


	<a href="<?php echo $view['router']->path('blog_detalhe', array('id' => 1)) ?>">Link 1 </a>
	<br>
	<a href="<?php echo $view['router']->path('blog_detalhe', array('id' => 2)) ?>">Link 2</a>

</body>
</html>