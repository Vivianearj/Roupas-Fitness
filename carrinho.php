<?php
   session_start();

   //REMOVER DO CARRINHO
   if(isset($_GET['remover'])){
    $idProduto = (int) $_GET['remover'];
    if(isset($_SESSION['carrinho'][$idProduto])){
        unset($_SESSION['carrinho'][$idProduto]);
    }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Charlotte Boutique </title>
    <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="css/carestilo.css" media="all"/>
 </head>
 <body>
    <div id="frete">
        <p> FRETE GRÁTIS ACIMA DE 250,00 REAIS ♡ </p>
    </div>
    <header>
    <img src="logo7.png">
        <nav>
            <ul>
                <li><a href="index.php"> HOME  </a></li>
                <li><a href="blusas.php"> BLUSAS </a></li>
                <li><a href="tops.php"> TOPS </a></li>
                <li><a href="leggings.php"> LEGGINGS </a></li>
                <li><a href="shorts.php"> SHORTS </a></li>    
                <li><a href="casacos.php"> CASACOS </a></li>          
            </ul>
        </nav>
        <div id='icones'>           
        <div class="imagem">
               <img src="login.png">
               <div id="img2">
                   <p><a href="cadastro.php" style="text-decoration: none;"> Criar conta </a></p>
                   <p><a href="login.php" style="text-decoration: none;"> Login </a></p>
                </div>
            </div>
            <div class="imagem">
                <img src="mensagem.png">
                <div id="img1">
                <p> +55 (61) 99466-0838 </p>
                <p> suporte@vivaconcept.com.br </p>                    
                 </div>
            </div>
            <div>
            <a href="carrinho.php"><img src="bag.png"></a>
            </div>
        </div>
    </header>
    <section id="destaques">
        <div class="linha"></div>
        <div class="destaque">
            <p><?= isset($_SESSION['carrinho']) ? 'CARRINHO DE COMPRAS' : 'CARRINHO VAZIO' ?></p>
        </div>
        <div class="linha"></div>
    </section>    

<?php
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $key => $value) {
            //Nome do produto
            //Quantidade 
            //Preço
            echo '<div class="carrinho-item">';
                echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).' </p>';      
                echo '<a href="?remover='.$key.'"><img src="img/lixeira.png"/></a>';
            echo'</div>';
        }
?>
  

<?php
//ESVAZIAR O CARRINHO
    if(isset($_GET['finalizar'])){
        unset($_SESSION['carrinho']);
    }
 ?>

    <div class="carrinho-item">
        <?php
            //TOTAL DA COMPRA
            $total = 0;
            foreach ($_SESSION['carrinho'] as $key => $value) {
                $total += $value['preco']*$value['quantidade'];
            }
            echo number_format($total,2,',','.');
        ?>
        <a href="finalizar=<?php echo $key ?>"><button>Finalizar</button></a>
    </div>

    <?php } ?>

    <footer>
        <section>
        <div class="rodape"></div>  
        <nav class="final">     
            <ul>
                <li style="margin-bottom: 20px; margin-top: 20px;"> SOBRE A VIVA CONCEPT </li>
                <p> A Viva Concept é uma marca digital que veio para trazer</p>
                    praticidade e versatilidade à rotina feminina, a partir de roupas</p> 
                    e cessórios que traduzem as últimas tendências aliadas </p> 
                    a funcionalidades do universo fitness.</p>
            </ul>
        </nav>
        </section>
        <section>        
        <div class="icfooter" >
            <p> INSTITUCIONAL </p>
            <nav class="final" style="margin-top: 10px;">
            <ul>
                <li><a href="index.php"> HOME  </a></li>
                <li><a href="blusas.php"> BLUSAS </a></li>
                <li><a href="tops.php"> TOPS </a></li>
                <li><a href="leggings.php"> LEGGINGS </a></li>
                <li><a href="shorts.php"> SHORTS </a></li>    
                <li><a href="casacos.php"> CASACOS </a></li> 
                <li><a href="trocas.php"> TROCAS E DEVOLUÇÕES </a></li>          
            </ul>
            </nav>
        </div>        
        </section>
        <section>        
            <div class="icfooter2">
                <p> CONTATO </p>
                <img src="telefone.png"> 
                <h6> +55 (61) 99466-0838 </h6>          
            </div>
            <div class="icfooter2">        
                <img src="email.png"> 
                <h6> suporte@vivaconcept.com.br </h6>          
            </div>        
        </section>
    </footer>
</body>
</html>