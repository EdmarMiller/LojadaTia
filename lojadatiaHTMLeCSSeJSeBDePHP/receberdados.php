<?php
include("connectbd.php");

if(isset($_POST["nome"]) && isset($_POST['mensagem']))
{
    $nome = $_POST["nome"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO comentarios (nome, mensagem) values ('$nome', '$mensagem')";
    $result = $connect->query($sql);

    if($result)
    {
        echo "Inserido com sucesso!";
    }
    else
    {
        echo "Houve um erro ao salvar...";
    }
}
// Daqui pra baixo não precisa
$sql = "select * from comentarios";
$result = $connect->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "Nome: ", $row['nome'], "<br>";
            echo "Mensagem: ", $row['mensagem'],"<br>";
            echo "<hr>";
        }
    }    
    else 
    {
        echo "Nenhum cometário ainda";
    }

?>