<?php
    #conexion a base de datos
    $user = 'root'; //demo_maicol -- root
    $password = ''; //kD,q(d+B5o)v
    $host = 'localhost';
    $dbname = 'torneo'; //demo_maicol -- cursodwp
    $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

    try
    {
        $connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $parametros);
        //echo 'Conectado a '.$connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }


?>
