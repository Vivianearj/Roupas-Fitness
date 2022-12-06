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
   

   $classUsuarioDAO= new ClassUsuarioDAO();
   $array=$classUsuarioDAO->alterar($nome, $email, $cpf, $telefone, $endereco, $bairro, $cep, $estado, $senha);
   //echo $array; 
     if($array==true){
         header('Location:index2.php');
     }else {
         echo "Erro";
  } 
		
 ?>