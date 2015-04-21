<html>


<head>


<title>página de login</title>


</head>





<body>
<? include("protecao.php"); ?>

<form action="logar.php" method="post" name="formulario" id="formulario">


Â Â login: 


Â Â <input type="text" name="login" id="login">


Â Â <p>senha: 


Â Â Â Â <input type="text" name="senha" id="senha">


Â Â </p>


Â Â <p>


Â Â Â Â <input type="submit" name="botao" id="botao" value="logar">


Â Â </p>


</form>


</body>


</html>