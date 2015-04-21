<?
$socket = mysql_connect("localhost","teste");
$res = mysql_db_query("cad","insert into cadastro values('$nome', '$empresa', '$endereco', '$cidade', '$estado', '$fone', '$descricao')", $socket);
mysql_close($socket);
if ($res == 0){
	echo ("Erro...");
}
else
	echo ("Seu Cadastro foi efetuado com SUCESSO!!! ;)");
?>