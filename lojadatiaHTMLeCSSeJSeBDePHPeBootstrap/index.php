<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Pagina Inicial</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/8c94550fe6.js" crossorigin="anonymous"></script>

        <style>
            #bodyHome 
            {
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
        <div class="container">
				<div class= "row">
						<div class="col-2"></div>
						<div class="content col-8 my-5">
							<div class="jumbotron">
								<h1 class="display-4">Seja bem vindo(a) à loja da TiTia!!</h1>
								<hr class="my-4">
								<p>Aqui em nossa loja, <strong>profissionais da linha de frente</strong> têm
								<Strong>DESCONTO!</Strong>.</p>
							</div>
						</div>
						<div class="col-2"></div>
					</div>
					<div class="row">
						<div class="col-3"></div>
						<div class="containe col-6 ">
                            
                            <footer id="">
									
								<h4 class="">Formas de Pagamento</h4>
								<img class="img-fluid" src="./imagens/formar-pagamento.png " alt="Formas de pagamento " title="Aceitamos quase todos os meios de pagamento!!"/>
								&copy; Edmar Miller
						
							</footer>
						</div>
						<div class="col-3"></div>
					</div>
			</div>
			
      
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>