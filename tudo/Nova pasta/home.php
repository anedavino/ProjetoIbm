<html>
 <head>
  <title>Menu-home</title>
  <link rel="stylesheet" href="doc-guia pernambuco.css">
 </head>
 
 
 <body class="home">

<?#_______________________________CALENDARIO.PHP_______________________________________?>



<?php
     $domingo  = "style=color:#C30;";
     $hoje     = "style=color:#CC0;";

     $mes  = date("m");
     $dia  = date("d");
     $ano  = date("Y");
     $ano_ = substr($ano,-2);

     function meses($a)  {
              switch($a) {
                     case 1:  $mes = "Dicas de Eventos do Mês de Janeiro";
						break;
                     case 2:  $mes = "Dicas de Eventos do Mês de Fevereiro";
						break;
                     case 3:  $mes = "Dicas de Eventos do Mês de Março";     
						break;
                     case 4:  $mes = "Dicas de Eventos do Mês de Abril";     
						break;
                     case 5:  $mes = "Dicas de Eventos do Mês de Maio";      
						break;
                     case 6:  $mes = "Dicas de Eventos do Mês de Junho";     
						break;
                     case 7:  $mes = "Dicas de Eventos do Mês de Julho";     
						break;
                     case 8:  $mes = "Dicas de Eventos do Mês de Agosto";   
						break;
                     case 9:  $mes = "Dicas de Eventos do Mês de Setembro";  
						break;
                     case 10: $mes = "Dicas de Eventos do Mês de Outubro";   
						break;
                     case 11: $mes = "Dicas de Eventos do Mês de Novembro";  
						break;
                     case 12: $mes = "Dicas de Eventos do Mês de Dezembro"; 
						break;
              }
              return $mes;
     }
?>
<table border="0" summary="Calendário" class="calendario">
     <caption class="caption1"><?php echo "".meses($mes)." ".$ano.""; ?></caption>
     <thead>
     <tr>
         <th class="th1" abbr="Domingo" title="Domingo"><b <?php echo("$domingo");?>>D</b></th>
		 
         <th class="th1" abbr="Segunda" title="Segunda"><b>S</b></th>
         <th class="th1" abbr="Terça"   title="Terça"><b>T</b></th>
         <th class="th1" class="td1" abbr="Quarta"  title="Quarta"><b>Q</b></th>
         <th class="th1" abbr="Quinta"  title="Quinta"><b>Q</b></th>
         <th class="th1" abbr="Sexta"   title="Sexta"><b>S</b></th>
         <th class="th1" abbr="Sábado"  title="Sábado"><b>S</b></th>
     </tr>
     </thead>
     <tbody>
     <?php
          $Data = strtotime($mes."/".$dia."/".$ano_);
          $Dia  = date('w',strtotime(date('n/\0\1\/Y',$Data)));
          $Dias = date('t',$Data);
          for ($i=1,$d=1;$d<=$Dias;) {
               echo("<tr>");
               for ($x=1;$x<=7 && $d <= $Dias;$x++,$i++) {
                    if ($i > $Dia) {
            $destaque = '';
                        if ($x == 1)    { $destaque = $domingo; }
                        if ($d == $dia) { $destaque = $hoje; }
                        if (($x == 1) && ($d == $dia)) { $destaque = $hoje; }
              
						echo("<td  ".$destaque.">".$d++."</td>");
                    }
                    else { echo("<td> </td>"); }
               }
               for (;$x<=7;$x++) { echo("<td> </td>"); }
               echo("</tr>");
			   
           }
     ?>
     </tbody>
</table> 
<?#_______________________________________________________________________________________________________________?>

 </body>
</html>