
<?php
	include "conecta_mysql.inc";
	
		$id                  =   $_post["id"]
		$nome                =   $_post["nome"];
		$dataDeNascimento    =   $_post["dataDeNascimento"];
		$sexo                =   $_post["sexo"];
		$conjuge             =   $_post["conjuge"];
		$rg                  =   $_post["rg"];
		$cpf                 =   $_post["cpf"];
		$rua                 =   $_post["rua"];
		$numero              =   $_post["numero"];
		$barrio              =   $_post["barrio"];
		$estado              =   $_post["estado"];
		$cidade              =   $_post["cidade"];
		$cep                 =   $_post["cep"];
		$imagemPerfil        =   $_post["imagemPerfil"];
		$statuus              =   $_post["statuus"];
		$nivel               =   $_post["nivel"];
		$fone1               =   $_post["fone1"];
		$fone2               =   $_post["fone2"];
		$email               =   $_post["email"];
		
	$sql  = ("Insert into FORMULÁRIOnovo values");
	$sql .= "('nome', 'dataDeNascimento', 'sexo', 'conjuge', 'rg', 'cpf', 'rua', 'numero', 'barrio', 'estado', 
	'cidade', 'cep', 'imagemPerfil', 'status', 'nivel', 'fone1', 'fone2', 'email')" ;

	$resultado = mysql_query($sql);
	echo" Cadastro realizado com sucesso!";
	
	mysql_close($conexao);
	
?>

