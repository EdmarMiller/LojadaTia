<?php
include "connectbd.php";

if (isset($_POST['nome']) && isset($_POST['mensagem']))
{
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO comentarios (nome, mensagem) values ('$nome', '$mensagem')";
    $result = $connect->query($sql);

    // Fim Conexão 

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/contato.css">


    <script src="https://kit.fontawesome.com/8c94550fe6.js" crossorigin="anonymous"></script>
    <title>Contatos</title>
</head>

<body>

    <?php
        include ("menu.html");
    ?>
    <hr>
    
    <section id="sectionContato">
        

            <div class="divEmail">
                <h2>Formulário</h2>

                <form  method="POST"  action="receberdados.php">
                    <label for="nome">Escreva seu nome:</label><br>
                    <input style="width: 90%;" type="text" name="nome" id="nome" placeholder="Escreva seu nome aqui!">
                    <br>
                    <br>
                    <label for="">Digite sua mensagem:</label><br>
                    <textarea style="width: 90%;" name="mensagem" id="" cols="30" rows="10" placeholder="Ficaremos gratos pela sua mensagem, Digite aqui!"></textarea><br>
                    <input type="submit" name="submit" value="Enviar!">
                </form>
            </div>

            <div class="divEmail">
                <div>
                    <a href="https://wa.me/5511975401380">
                        <img src="./imagens/WhatsApp-para-PC.png" alt="Whats" width="100px" title="Fale conosco pelo whats">
                    </a>
                </div>
                <div style="height: 50px;"></div>
                <div>
                    <a href="mailto:edmarmiller@hotmail.com">
                        <img src="./imagens/email.jpg" alt="Email" width="100px" title="envie um email: edmarmiller@hotmail.com">
                    </a>
                </div>
            </div>
        

    </section>
    <hr>
    <div style="margin-top: 100px;"></div>
    <footer>
        <h4 class="textCenter textSize25 ">Formas de Pagamento</h4>
        <img class="imgFormasPagamento " src="./imagens/formar-pagamento.png " alt="Formas de pagamento " title="Aceitamos quase todos os meios de pagamento!! ">
        <hr>&copy;Edmar Miller
    </footer>
</body>

</html>