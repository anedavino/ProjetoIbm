<? include("protecao.php"); ?>
<?


session_start(); //iniciamos a sessão





include("config.php"); //incluimos o arquivo que conecta ao bd





$sql=mysql_query("select * from usuarios where login='$_GET[login]' and senha='$_GET[senha]'");/*fazemos a consulta no banco de dados*/


$conta=mysql_num_rows($sql); // contamos o numero de resultados no banco de dados de acordo com a pesquisa acima


if($conta<1){ /*aqui vemos se tiver um numero igual a 0 de resultados com os login e senhas usados da o erro*/


echo "Login ou senha errado(s)";


} else { 


/* caso ocontrário, ou seja se dar um resultado maior do que zero ele cria a sessão*/





$data=date("dmY"); //aqui pegamos a data para usarmos com o valor de nossa sessão





$_SESSION["logado"] = "$data";


/* aqui criamos uma sessão com o nome logado, com a qual depois iremos verificar se ela existe para deixar o usuario acessar a área restrita.


você também pode criar outras sessions, como nome do usuário pra dar as boas vindas etc...


 */


echo "você está logado, clique <a href='protegida.php'>aqui</a> para ir a página protegida";


}


?>
