<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Charlotte Boutique </title>
    <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="css/login.css" media="all"/>
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
            <p> LOGIN </p>
        </div>
        <div class="linha"></div>
    </section>
    <div id="cadastro">
    <form action="index2.php" method="POST">

        E-mail:<br>
        <input id="in2" type=text name=email size="60"><br><br>

        Senha:<br>
        <input id="in3" type=password name=senha size="60"><br><br>

        <input id="botao" type=submit name=cadastar value=ENTRAR><br><br><br><br><br><br>
    </form>
    </div>
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