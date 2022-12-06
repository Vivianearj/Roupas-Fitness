<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>

<?php
$nome=$_GET['nome']; 
$email=$_GET['email'];
$cpf=$_GET['cpf'];
$telefone=$_GET['telefone'];
$endereco=$_GET['endereco'];
$bairro=$_GET['bairro'];
$cep=$_GET['cep'];
$estado=$_GET['estado'];
$senha=$_GET['senha'];
?>
   <head>
    <title> Charlotte Boutique </title>
    <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="cadastro.css" media="all"/>
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
               <form action="alterar.php" method="get">
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <input type=hidden value= <?php echo $array['email'];?> name=email>
                 <input type=hidden value= <?php echo $array['cpf'];?> name=cpf>
				 <input type=hidden value= <?php echo $array['telefone'];?> name=telefone>
                 <input type=hidden value= <?php echo $array['endereco'];?> name=endereco>
				 <input type=hidden value= <?php echo $array['bairro'];?> name=bairro>
                 <input type=hidden value= <?php echo $array['cep'];?> name=cep>
				 <input type=hidden value= <?php echo $array['estado'];?> name=estado>                 
				 <input type=hidden value= <?php echo $array['senha'];?> name=senha>
				 <button> Editar</button></td>                 
		      </form>
              
              <form action="excluir.php" method="get">
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <button> Excluir</button></td>                 
		      </form>	
              <?php
               }
              ?>
              
                </div>
            </div>
            <div class="imagem">
                <img src="mensagem.png">
                <div id="img1">
                <p> +55 (61) 99466-0838 </p>
                <p> suporte@vivaconcept.com.br</p>                    
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
            <p> MEU PERFIL </p>
        </div>
        <div class="linha"></div>
    </section>
    <div id="cadastro">
    <form action="AlterarProcessa.php" method="GET" >
        
        Nome Completo:<br>
        <input id="in1" type=text name=nome size="60" value="<?php echo $nome;?>"><br><br>

        E-mail:<br>
        <input id="in2" type=text name=email size="60" value="<?php echo $email;?>"><br><br>

        Cpf:<br>
        <input id="in3" type=number name=cpf size="60" value="<?php echo $cpf;?>"><br><br>

        Telefone:<br>
        <input id="in4" type=number name=telefone size="60" value="<?php echo $telefone;?>"><br><br>

        Endereço:<br>
        <input id="in5" type=text name=endereco size="60" value="<?php echo $endereco;?>"><br><br>

        Bairro:<br>
        <input id="in6" type=text name=bairro size="60" value="<?php echo $bairro;?>"><br><br>

        Cep:<br>
        <input id="in7" type=number name=cep size="60" value="<?php echo $cep;?>"><br><br>

        Estado:<br>
        <input id="in8" type=text name=estado size="60" value="<?php echo $estado;?>"><br><br>

        Senha:<br>
        <input id="in9" type=password name=senha size="60" value="<?php echo $senha;?>"><br><br>
        <input id="botao" type=submit name=salvar value=SALVAR><br><br><br><br><br><br>
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