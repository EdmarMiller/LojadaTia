<?php
    require('connectbd.php');
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head> <meta charset="UTF-8">

      <title> Pedidos loja da Tia </title>
      <link rel="stylesheet" href="./CSS/estilo.css">
      <script src="js/funcoes.js"></script>


    
  </head>

   <body>
     <!--Início Menu  -->
     <header>
      <?php
      include_once("menu.html");
      ?>
  </header>
    <!-- end menu-->

    <main class="pedido" action="">
        <h2>Meus Pedidos</h2>
        <form method="post" action="pedido.php" style="width:600px">
        <h4>Nome</h4>
        <input name="cliente" type="text" required style="width:500px">
        <h4>Endereço</h4>
        <input name="endereco" type="text" required style="width:500px">
        <h4>Telefone</h4>
        <input name="telefone" type="text" required style="width:500px">
        <h4>Produto</h4>
        <input name="nome_produto" type="text" required style="width:500px">
        <h4>Valor unitário</h4>
        <input name="valor_unitario" type="text" required style="width:200px">
        <h4>Quantidade</h4>
        <input name="quantidade" type="text" required style="width:100px">
        <h4>Valor total</h4>
        <input name="valor_total" type="text" required style="width:200px">
        <br>
        <input type="submit" value="Enviar" style="width:150px">   

    </form>
    </main>
<?php
    if (isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['telefone'])&& isset($_POST['nome_produto']) && isset($_POST['valor_unitario']) 
    && isset($_POST['quantidade']) && isset($_POST['valor_total']))
    {
       
        $cliente = $_POST['cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $nome_produto = $_POST['nome_produto'];
        $valor_unitario = $_POST['valor_unitario'];
        $quantidade = $_POST['quantidade'];
        $valor_total = $_POST['valor_total'];

        $sql = "INSERT INTO pedido (cliente, endereco, telefone, nome_produto, valor_unitario, quantidade, valor_total) 
                values ('$cliente', '$endereco', '$telefone', '$nome_produto', '$valor_unitario', '$quantidade', '$valor_total')";
        $result = $connect->query($sql);

        echo "<script> alert('Pedido cadastrado em nossa base de dados')
             location.href ='pedido.php'</script>";
    }
    ?>

    <footer>
        <h4 class="textCenter textSize25 ">Formas de Pagamento</h4>
        <img class="imgFormasPagamento " src="./imagens/formar-pagamento.png " alt="Formas de pagamento "
            title="Aceitamos quase todos os meios de pagamento!! ">
        <hr>&copy;Edmar Miller
    </footer>
</body>
</html>