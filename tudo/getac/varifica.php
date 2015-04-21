<html>
<body>
<?PHP
	include "inseri.inc";?>
	
	<?php
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
		$status              =   $_post["status"];
		$nivel               =   $_post["nivel"];
		$fone1               =   $_post["fone1"];
		$fone2               =   $_post["fone2"];
		$email               =   $_post["email"];
		$erro				 =   $_post["erro"];
		
	//dados pessoais
	if(empty($nome) or strstr ($nome, '')== false) {
	echo"Digite o Nome corretamente.<br>"; $erro=1; 
	}
	
	if(empty($dataDeNascimento) or strstr ($dataDeNascimento, '')== false) {
	echo"Digite a Data de nascimento corretamente.<br>"; $erro=1; 
	}
	
	if(empty($sexo) or strstr ($sexo, '')== false) {
	echo"Digite o Sexo corretamente.<br>"; $erro=1; 
	}
	
	if(empty($conjuge) or strstr ($conjuge, '')== false) {
	echo"Digite o Conjuge corretamente.<br>"; $erro=1; 
	}
	
	if(empty($rg) or strstr ($rg)== false) {
	echo"Digite o RG corretamente.<br>"; $erro=1; 
	}
	
	if(empty($cpf) or strstr ($cpf)== false) {
	echo"Digite o CPF corretamente.<br>"; $erro=1; 
	}
	
	//dados de endereço
	if(empty($rua) or strstr ($rua, '')== false) {
	echo"Digite o nome da Rua corretamente.<br>"; $erro=1; 
	
	if(empty($numero) or strstr ($numero, '')== false) {
	echo"Digite o Número corretamente.<br>"; $erro=1; 
	
	if(empty($barrio) or strstr ($barrio, '')== false) {
	echo"Digite o Barrio corretamente.<br>"; $erro=1; 
	
	if(empty($estado) or strstr ($estado, '')== false) {
	echo"Digite o Estado corretamente.<br>"; $erro=1; 
	
	if(empty($cidade) or strstr ($cidade, '')== false) {
	echo"Digite o Cidade corretamente.<br>"; $erro=1; 
	
	if(empty($cep) or strstr ($cep, '')== false) {
	echo"Digite o CEP corretamente.<br>"; $erro=1; 
	
	//dados do perfil
	
	 $imagemPerfil = $_FILES["imagemPerfil"]; 
	 $host = "localhost"; 
	 $username = "gabriela"; $password = "gabi86588391"; 
	 $db = "BdIgreja"; 
	 if($imagemPerfil != NULL) 
	 {  $nomeFinal = time().'.jpg'; if (move_uploaded_file($imagemPerfil['tmp_name'], $nomeFinal)) { $tamanhoImg = filesize($nomeFinal);
		$mysqlimagem = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); mysql_connect($host,$username,$password) or die("Impossível Conectar");
		@mysql_select_db($db) or die("Impossível Conectar");
		mysql_query("INSERT INTO cadastro(imagem) VALUES ('$mysqlimagem')") or die("O sistema não foi capaz de executar a query");
		unlink($nomeFinal); header("location:FORMULÁRIOnovo.html"); } } else { echo"Você não realizou o upload de forma satisfatória."; } 

	//
	if(empty($status) or strstr ($status, '')== false) {
	echo"Informe o Status corretamente.<br>"; $erro=1;
	
	if(empty($nivel) or strstr ($nivel, '')== false) {
	echo"Informe o Nivel corretamente.<br>"; $erro=1;
	
	//dados de contatos
	
	if(empty($fone1) or strstr ($fone1, ' ')== false) {
	echo"Informe o Fone 1 corretamente.<br>"; $erro=1;
	
	if(empty($fone2) or strstr ($fone2)== false) {
	echo"Informe o Fone 2 corretamente.<br>"; $erro=1;
	
	
	if(strlen($email)>2|| strstr ($email, '@')== false) {
	echo"Digite o Email corretamente.<br>"; $erro=1; 
	}
	if ($erro==' ')
	{ echo"Todos os dados foram incluidos corretamente!"; }
?>
	</body> 
	</HTML>