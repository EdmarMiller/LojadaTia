<?php
    $servername = "localhost";
    $username = "root";
    $password= "";
    $database = "lojadatia";

    //Criando a conexão 

    $connect = mysqli_connect($servername, $username, $password, $database);

    $connect->query("set nome utf8");
    $connect->query("set descricao utf8");
    

    if (!$connect)
    {
        die("A conexão do BD falhou: " .mysqli_connect_error());
    }

?>