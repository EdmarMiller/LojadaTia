<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/estilo.css">

    <script src="https://kit.fontawesome.com/8c94550fe6.js" crossorigin="anonymous"></script>

    <style>
        #bodyHome {
            background-image: url(imagens/index.png);
            background-attachment: fixed;
            background-size: 150%;
            background-repeat: repeat-y;
            background-color: #eee;
                  }
    </style>
</head>
<body id="bodyHome">
    <?php
        include ("menu.html");
    ?>
    <hr>
    <div id="divEspacoSup"></div>

    </p>
    <hr>
    <div id="divIndex">
        <h2>Seja bem vindo(a) à loja da TiTia!</h2>
        <p>Aqui em nossa loja, <strong>profissionais da linha de frente</strong> têm
            <Strong>DESCONTO!</Strong>

    </div>


    <hr>
    <footer id="footerHome">
        <h4 class="textCenter textSize25 ">Formas de Pagamento</h4>
        <img class="imgFormasPagamento " src="./imagens/formar-pagamento.png " alt="Formas de pagamento " title="Aceitamos quase todos os meios de pagamento!! ">
        <hr> &copy; Edmar Miller
    </footer>
</body>

</html>