<?


include("config.php");





$inserir=mysql_query("insert into usuarios (login,senha) values ('$_POST[login]','$_POST[senha]')");


echo "cadastro feito com sucesso";


?>
