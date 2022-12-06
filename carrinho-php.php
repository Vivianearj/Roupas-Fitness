<?php
   session_start();
?>

<!DOCTYPE html>
<head>
   <title> Carrinho de compras PHP</title> 
</head>
<body>
   <h2 class="title"> Carrinho com PHP </h2> 
   <div class="carrinho-container">

<?php
   $itens = array(['nome'=>'Curso 1', 'imagem' =>'item1.png', 'preco' => '200'],
                  ['nome'=>'Curso 2','imagem' =>'item2.png', 'preco' => '100']);

   foreach ($itens as $key => $value) {
?>

   <div class="produto">
      <img src="<?php echo $value['imagem'] ?>" />
     <a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho!</a>

     </div> <!--produto-->

<?php
    }
?>
   </div> <!--carrinho-container-->

<?php
   if(isset($_GET['adicionar'])){ 
  //vamos adicionar ao carrinho
       $idProduto = (int) $_GET['adicionar'];
       if(isset($itens[$idProduto])){
          if(isset($_SESSION['carrinho'][$idProduto])){
               $_SESSION['carrinho'][$idProduto]['quantidade']++;
          }else{
                $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$itens[$idProduto]['nome'], 'preco'=>$itens[$idProduto]['preco']);
          }
          echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
      }else{
            die('Você não pode adicionar um item que não existe.');
      }
  }
?>

<h2 class="title"> Carrinho: </h2> 

<?php
   foreach ($_SESSION['carrinho'] as $key => $value) {
           //Nome do produto
          //Quantidade 
         //Preço
      echo '<div class="carrinho-item">';
      echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).' </p>';
      echo'</div>';
  }
?>

</body>
</html>


    
