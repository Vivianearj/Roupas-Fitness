<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>

<?php
    $classUsuarioDAO = new ClassUsuarioDAO();
    $array= $classUsuarioDAO->listar();  //acessar o metodo listar 
    echo "<center>";
    echo "<br><center><h2>RESULTADO DO CADASTRO</h2></center><br>";
    echo "<table border=1  bgcolor=LightPink>";
    echo "  <tr>";
    echo "      <th scope='col'><p align='center'>Nome</p></th> ";
    echo "      <th scope='col'><p align='center'>Email</p></th> ";
    echo "      <th scope='col'><p align='center'>Deletar</p></th> ";
    echo "      <th scope='col'><p align='center'>Alterar</p></th>";
    echo "  <tr>";

    foreach ($array as $array) {
        echo "<tr>";
		echo "<td >". $array['nome'] . "</td>";
        echo "<td >". $array['email']      . "</td>";	   
		echo "<td> ";

        ?>
           <form action="excluir.php" method="get">
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <button><img src='imagem/excluir.png' width=30px height=30px></button></td>
			</form> 		  
        <?php	
		echo "</td> ";
		echo  "<td> "; 
		 ?>
           <form action="alterar.php" method="get">
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <input type=hidden value= <?php echo $array['email'];?> name=email>
				 <button><img src='imagem/alterar.png' width=30px height=30px></button></td>
		   </form> 		  
        <?php	
		 echo "</td> ";
		echo "</tr>";		      
    }
	echo "</center>";
?>
<div>
<a href="index.php"><img src='imagem/cadastr
ar.jpg' width=40px height=40px></a><br>
</body>

