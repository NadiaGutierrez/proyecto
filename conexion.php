<?php
$link
=mysql_connect( "localhost" , "root" , "rootroot" );
mysql_select_db( "pastoral" , $link ) OR DIE ( "Error: No es posible establecer la conexión" );
?>