<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "sgu";

// Crie a conexão
$connection = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME);

if (mysqli_connect_error()) {
    echo "FALHA AO CONECTAR-SE A BASE DE DADOS";
}
