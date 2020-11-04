<?php require_once("connectbd.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/produtos.css">
    <script src="https://kit.fontawesome.com/8c94550fe6.js" crossorigin="anonymous"></script>
    <title>Produtos</title>
    <script src="js/funcoes.js"></script>
</head>
<body>
    <?php include ("menu.html");?>
    <hr>
       <main>
        <div id="principal">
            <div id="navLeft">
                <h2>Categorias</h2>
                <nav id="navProduto">
                    <ul>
                        <li onclick="exibir_todos()" class="catNavProdutos">Todos - (8)</li>
                        <li onclick="exibir_categoria('Bolo')" class="catNavProdutos">Bolos - (3)</li>
                        <ul>
                            <li><a href="#">Brancos</a></li>
                            <li><a href="#">Chocolate</a></li>
                            <li><a href="#">Sem Açucar</a></li>
                        </ul>
                        <li onclick="exibir_categoria('Doce')" class="catNavProdutos"> Doces - (5)</li>
                        <ul>
                            <li><a href="#">Premium</a></li>
                            <li><a href="#">Clássicos</a></li>
                            <li><a href="#">Padrinhos</a></li>
                            <li><a href="#">Tradicionais</a></li>
                            <li><a href="#">Convidados</a></li>
                        </ul>
                    </ul>
                </nav>
            </div>

            <section id="produtos">

                <?php
                
                    $sql = "select * from produto";
                    $result = $connect->query($sql);

                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            

                            ?>                            
                            
                    <div style="display:;" class="boxProduto" id="<?php echo $row["categoria"];?>">
                    <h3 class=" nomeProduto "> <?php echo $row["nome"];?> </h3>
                    <div class="imgProduto" >
                        <img src="<?php echo $row["imagem"];?>" onclick="zoom(this)">
                    </div>
                    <div>
                        <p class="descricaoProduto"><?php echo $row["descricao"];?></p>
                        <p class="precoProduto">R$ <?php echo $row["preco"];?></p>
                        <p class="promocao">R$ <?php echo $row["precofinal"];?></p>
                    </div>
                    <div class="botaoProduto">
                        <button>Colocar no Cesto</button>
                    </div>
                </div>
                            
                            <?php


                        }
                    }
                    else
                    {
                        echo "Nenhum produto cadastrado!";
                        
                    }
                
                ?>

                


            </section>

        </div>
    </main>


    <hr>

   
    <footer>
        <h4 class="textCenter textSize25 ">Formas de Pagamento</h4>
        <img class="imgFormasPagamento " src="./imagens/formar-pagamento.png " alt="Formas de pagamento "
            title="Aceitamos quase todos os meios de pagamento!! ">
        <hr>&copy;Edmar Miller
    </footer>

</body>

</html>