<?php

$html = 'o meu HTML pronto tal como vai para o navegador!';

require_once("dompdf/dompdf_config.inc.php");

if ( get_magic_quotes_gpc() )
    $documentTemplate = stripslashes($documentTemplate);

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper("A4", "portrail");
$dompdf->render();

// enviar documento destino para download
$dompdf->stream("dompdf_out.pdf");

exit(0);

?>