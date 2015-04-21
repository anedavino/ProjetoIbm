<?php
	$db['server']   = 'localhost';
	$db['user']     = '';
	$db['passuord'] = '';
	$db['bdname']   = 'bdigreja';
	
		$conn = mysql_connect($db['server'],$db['user'],$db['passuord']);
			mysql_select_db($db['dbnome'],$conn);
?>