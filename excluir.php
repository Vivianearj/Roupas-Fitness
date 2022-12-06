<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>

<?php
   $classUsuarioDAO = new ClassUsuarioDAO();
   $array = $classUsuarioDAO->listar();
 	if (isset($_GET['nome'])) {
	
            $nome = $_GET['nome'];
            $classUsuarioDAO = new ClassUsuarioDAO();
            $array = $classUsuarioDAO->excluir($nome);
            if ($array==TRUE) {
                 header('Location:index2.php');
            }else {
              echo "Erro";
			}
    }
?>