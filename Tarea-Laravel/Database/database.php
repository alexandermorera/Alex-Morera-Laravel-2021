<?php

	session_start();
    $mysqli = new mysqli("127.0.0.1","root","","prueba 2");

    if($mysqli->connect_errno){

    	echo "Fallo al conectar con mysql :( ".$mysqli->connect_errno.") ".$mysqli->connect_errno;
    }




?>