<?php
   session_start();   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Viva Concept </title>
    <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
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
    <section id="inicio">
        <div class="home">
            <img src="banner.png"></a>
        </div>
    </section>
    <section id="destaques">
        <div class="linha"></div>
        <div class="destaque">
            <p> NOVIDADES </p>
        </div>
        <div class="linha"></div>
    </section>

    <?php
    
    //ARRAY MULTIDIMENSIONAL
    $itens = array(['imagem' =>'img/blusa-azul.jpg','nome'=>'REGATA LETÍCIA ','preco' => '109.00'],
                   ['imagem' =>'img/blusa-azul2.jpg','nome'=>'CROPPED LOREN','preco' => '149.00'],
                   ['imagem' =>'img/blusa-branca.jpg','nome'=>'BLUSA JADE','preco' => '129.00'],
                   ['imagem' =>'img/blusa-militar.jpg','nome'=>'BLUSA CROPPED ANITA','preco' => '149.00'],
                   ['imagem' =>'img/blusa-preta2.jpg','nome'=>'BLUSA JADE CLASSICA','preco' => '129.00'],
                   ['imagem' =>'img/top-branco.jpg','nome'=>'TOP MAVI','preco' => '139.00'],
                   ['imagem' =>'img/top-verde2.jpg','nome'=>'TOP PAULA','preco' => '119.00'],
                   ['imagem' =>'img/top-cinza.jpg','nome'=>'TOP BÁRBARA ','preco' => '119.00'],
                   ['imagem' =>'img/top-preto2.jpg','nome'=>'TOP CLOE','preco' => '119.00'],
                   ['imagem' =>'img/calca-azul.jpg','nome'=>'CALÇA INDRA','preco' => '189.00'],
                   ['imagem' =>'img/calca-branca.jpg','nome'=>'CALÇA BIANCA ','preco' => '179.00'],
                   ['imagem' =>'img/calca-verde.jpg','nome'=>'CALÇA LOREN','preco' => '189.00'],
                   ['imagem' =>'img/calca-bege.jpg','nome'=>'CALÇA ANA','preco' => '189.00'],
                   ['imagem' =>'img/short-fucsia.jpg','nome'=>'SHORT MABE','preco' => '169.00'],
                   ['imagem' =>'img/short-verde.jpg','nome'=>'SHORT JADE','preco' => '179.00'],
                   ['imagem' =>'img/short-azul.jpg','nome'=>'SHORT DÉBORA','preco' => '169.00'],
                   ['imagem' =>'img/short-lilas.jpg','nome'=>'SHORT LAVANDA ','preco' => '169.00'],
                   ['imagem' =>'img/short-pretoverde.jpg','nome'=>'SHORT JORDANA','preco' => '149.00'],
                   ['imagem' =>'img/casaco-bege.jpg','nome'=>'COLETE NINA','preco' => '269.00'],
                   ['imagem' =>'img/casaco-branco.jpg','nome'=>'BLUSÃO MILENA','preco' => '169.00'],
                   ['imagem' =>'img/casaco-preto.jpg','nome'=>'CASACO OLÍVIA','preco' => '229.00'],
                   ['imagem' =>'img/casaco-preto2.jpg','nome'=>'CASACO ELLEN','preco' => '269.00'],
                   ['imagem' =>'img/casaco-rose.jpg','nome'=>'COLETE VALENTINA','preco' => '169.00'],
                   ['imagem' =>'img/casaco-rosa2.jpg','nome'=>'CASACO LANA','preco' => '229.00'],                   
                );

    $i = 1;
    foreach ($itens as $key => $value) {
        if ($i == 4) {
            $i = 1;
        }

        if ($i == 1) {
            echo '<section id="produtos">';
        }
    ?>
        <div class="produto">
            <a href="blusas.php"><img src="<?php echo $value['imagem'] ?>" /></a>
                <p> <?php echo $value['nome'] ?></p> 
                <p> R$ <?php echo $value['preco'] ?></p>
            <a href="?adicionar=<?php echo $key ?>"class='botaoComprar'>Comprar</a>
        </div> <!--produto-->
    <?php
    
        if($i == 3) {
            echo '</section>';
        }

        $i++;
    }
    ?>

    <?php
//ADD CARRINHO
   if(isset($_GET['adicionar'])){ 
    $idProduto = (int) $_GET['adicionar'];
    if(isset($itens[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
            $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }else{
                $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$itens[$idProduto]['nome'], 'preco'=>$itens[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
    }
    }
    ?>

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







