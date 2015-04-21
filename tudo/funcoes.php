<?php
	function adicionar($nome,$id,$nome,$dataDeNascimento,$dataBatismo,$sexo,$conjuge,$rg,$rua,$numero,$barrio,$estado,$cidade,$cep,$imagemPerfil,$statuus,
	$nivel,$fone1,$fone2,$email){
		$sql = "insert into tb_cadastro(nome,id,nome,dataDeNascimento,dataBatismo,sexo,conjuge,rg,rua,numero,barrio,estado,cidade,cep,imagemPerfil,statuus,
				nivel,fone1,fone2,email)" values('$nome','$id','$nome','$dataDeNascimento','$dataBatismo','$sexo','$conjuge','$rg','$rua','$numero','$barrio',
				'$estado','$cidade','$cep','$imagemPerfil','$statuus',
				'$nivel','$fone1','$fone2','$email');
	
	mysql_query($sql); }

?>