<?php require_once "ClassUsuario.php" ?>                 
<?php require_once "ClassUsuarioDAO.php" ?>             
 
<?php 
   $nome=$_POST["nome"];
   $email=$_POST["email"];
   $cpf=$_POST["cpf"];
   $telefone=$_POST["telefone"];
   $endereco=$_POST["endereco"];
   $bairro=$_POST["bairro"];
   $cep=$_POST["cep"];
   $estado=$_POST["estado"];
   $senha=$_POST["senha"];

   $novoUsuario=new ClassUsuario();                     
   $novoUsuario->setNome($nome);
   $novoUsuario->setEmail($email);
   $novoUsuario->setCpf($cpf);
   $novoUsuario->setTelefone($telefone);
   $novoUsuario->setEndereco($endereco);
   $novoUsuario->setBairro($bairro);
   $novoUsuario->setCep($cep);
   $novoUsuario->setEstado($estado);
   $novoUsuario->setSenha($senha);

   $classUsuarioDAO=new ClassUsuarioDAO();
   $classUsuarioDAO->cadastrar($novoUsuario);
   header("Location:index2.php");

   //recebe os valores e chama o nome das variaveis e instancia a classe com o new
?>

