<?


session_start(); //iniciamos a sessão





$data=date("dmY"); //aqui pegamos a data pois foi ela quem usamos como valor da sessao logado





if($_SESSION[logado]!=$data){


echo "você não pode acessar essa página pois não está logado";


}


?>