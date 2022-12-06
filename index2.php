<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>
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

    <?php
    $classUsuarioDAO = new ClassUsuarioDAO();
    $array= $classUsuarioDAO->listar();  //acessar o metodo listar 
               foreach ($array as $array){

               
    ?>
               <form action="listar2.php" method="get">
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <input type=hidden value= <?php echo $array['email'];?> name=email>
                 <input type=hidden value= <?php echo $array['cpf'];?> name=cpf>
				 <input type=hidden value= <?php echo $array['telefone'];?> name=telefone>
                 <input type=hidden value= <?php echo $array['endereco'];?> name=endereco>
				 <input type=hidden value= <?php echo $array['bairro'];?> name=bairro>
                 <input type=hidden value= <?php echo $array['cep'];?> name=cep>
				 <input type=hidden value= <?php echo $array['estado'];?> name=estado>                 
				 <input type=hidden value= <?php echo $array['senha'];?> name=senha>
				 <button> Meu Perfil</button></td>                 
		      </form> 	
              <?php
               }
              ?>
                   <!--<a href="formListar.php" style="text-decoration: none;"> Meu perfil</a>-->
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
    <section id="produtos">
        <div class="produto">
            <a href="blusatricot.php"><img src="img/blusa-azul.jpg"></a>
            <p id="nome"> REGATA LETÍCIA </p>
            <p> R$ 109,00 </p>
            <h5> 2x R$ 54,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="blusas.php"><img src="blusa-azul2.jpg"></a>
            <p id="nome"> CROPPED LOREN </p>
            <p> R$ 149,00 </p>
            <h5> 2x R$ 74,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="blusas.php"><img src="blusa-branca.jpg"></a>
            <p id="nome"> BLUSA JADE</p>
            <p> R$ 129,00 </p>
            <h5> 6x R$ 64,50</h5>            
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        </section>
        <section id="produtos">
        <div class="produto">
            <a href="blusas.php"><img src="blusa-militar.jpg"></a>
            <p id="nome"> BLUSA CROPPED ANITA </p>
            <p> R$ 149,00 </p>
            <h5> 2x R$ 74,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="blusas.php"><img src="blusa-preta2.jpg"></a>
            <p id="nome"> BLUSA JADE CLASSICA </p>
            <p> R$ 129,00 </p>
            <h5> 2x R$ 64,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="tops.php"><img src="top-branco.jpg"></a>
            <p id="nome"> TOP MAVI </p>
            <p> R$ 139,00 </p>
            <h5> 2x R$ 69,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </section>
        <section id="produtos">
        <div class="produto">
            <a href="tops.php"><img src="top-verde2.jpg"></a>
            <p id="nome"> TOP PAULA </p>
            <p> R$ 119,00 </p>
            <h5> 2x R$ 59,50</h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="tops.php"><img src="top-cinza.jpg"></a>
            <p id="nome"> TOP BÁRBARA </p>
            <p> R$ 119,00</p>
            <h5> 2x R$ 59,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>   
        <div class="produto">
             <a href="tops.php"><img src="top-preto2.jpg"></a>
             <p id="nome"> TOP CLOE </p>
             <p> R$ 119,00 </p>
             <h5> 2x R$ 59,50 </h5>
             <a href="" class='botaoComprar'>Comprar</a>
        </div>               
        </section>
        <section id="produtos">
        <div class="produto">
             <a href="leggins.php"><img src="calca-azul.jpg"></a>
             <p id="nome"> CALÇA INDRA </p>
             <p> R$ 189,00 </p>
             <h5> 3x R$ 63,00 </h5>
             <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="leggins.php"><img src="calca-branca.jpg"></a>
            <p id="nome"> CALÇA BIANCA </p>
            <p> R$ 179,00 </p>
            <h5> 3x R$ 59,66 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="leggins.php"><img src="calca-verde.jpg"></a>
            <p id="nome"> CALÇA LOREN </p>
            <p> R$ R$ 189,00 </p>
            <h5> 3x R$ 63,00 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
         </section>
         <section id="produtos">
         <div class="produto">
            <a href="leggins.php"><img src="calca-bege.jpg"></a>
            <p id="nome"> CALÇA ANA </p>
            <p> R$ R$ 189,00 </p>
            <h5> 3x R$ 63,00  </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="shorts.php"><img src="short-fucsia.jpg"></a>
            <p id="nome"> SHORT MABE </p>
            <p> R$ 169,00 </p>
            <h5> 3x R$ 56,33 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="shorts.php"><img src="short-verde.jpg"></a>
            <p id="nome"> SHORT JADE</p>
            <p> R$ 179,00 </p>
            <h5> 3x R$ 59,66 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </section>
        <section id="produtos">
        <div class="produto">
            <a href="shorts.php"><img src="short-azul.jpg"></a>
            <p id="nome"> SHORT DÉBORA </p>
            <p> R$ 169,00 </p>
            <h5> 3x R$ 56,33 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="shorts.php"><img src="short-lilas.jpg"></a>
            <p id="nome"> SHORT LAVANDA </p>
            <p> R$ 169,00 </p>
            <h5> 3x R$ 56,33</h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="shorts.php"><img src="short-pretoverde.jpg"></a>
            <p id="nome"> SHORT JORDANA </p>
            <p> R$ 149,00 </p>
            <h5> 2x R$ 74,50 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </section>       
        <section id="produtos">
        <div class="produto">
            <a href="casacos.php"><img src="casaco-bege.jpg"></a>
            <p id="nome"> COLETE NINA </p>
            <p> R$ 269,00 </p>
            <h5> 4x R$ 67,25 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="casacos.php"><img src="casaco-branco.jpg"></a>
            <p id="nome"> BLUSÃO MILENA </p>
            <p> R$ 169,00 </p>
            <h5> 3x R$ 56,33</h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="casacos.php"><img src="casaco-preto.jpg"></a>
            <p id="nome"> CASACO OLÍVIA </p>
            <p> R$ 229,00 </p>
            <h5> 4x R$ 57,25 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </section>    
        <section id="produtos">
        <div class="produto">
            <a href="casacos.php"><img src="casaco-preto2.jpg"></a>
            <p id="nome"> CASACO ELLEN </p>
            <p> R$ 269,00 </p>
            <h5> 4x R$ 67,25 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="casacos.php"><img src="casaco-rose.jpg"></a>
            <p id="nome"> COLETE VALENTINA </p>
            <p> R$ 169,00 </p>
            <h5> 3x R$ 56,33</h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </div>
        <div class="produto">
            <a href="casacos.php"><img src="casaco-rosa2.jpg"></a>
            <p id="nome"> CASACO LANA </p>
            <p> R$ 229,00 </p>
            <h5> 4x R$ 57,25 </h5>
            <a href="" class='botaoComprar'>Comprar</a>
        </section>             
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
