<?php require_once 'conexao.php'; ?>
<?php
class ClassUsuarioDAO {
    //cadastar os usuarios 
   		public function cadastrar($novoUsuario) {
               try{
                   $pdo=Conexao::getInstance();
                   $sql="insert into dados_usuarios(nome,email,cpf,telefone,endereco,bairro,cep,estado,senha)
                         values(?,?,?,?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);   
                   $stmt->bindValue(1,$novoUsuario->getNome());            
                   $stmt->bindValue(2,$novoUsuario->getEmail()); 
                   $stmt->bindValue(3,$novoUsuario->getCpf());            
                   $stmt->bindValue(4,$novoUsuario->getTelefone()); 
                   $stmt->bindValue(5,$novoUsuario->getEndereco());            
                   $stmt->bindValue(6,$novoUsuario->getBairro()); 
                   $stmt->bindValue(7,$novoUsuario->getCep()); 
                   $stmt->bindValue(8,$novoUsuario->getEstado());             
                   $stmt->bindValue(9,$novoUsuario->getSenha()); 
                   $stmt->execute();
                   return true;
               }catch(PDOException $erro){
                   echo $erro->getMessage();
               }//fim do catch 	   
    }//fim do metodo

// Listar todos os usuarios
    public function listar() {
        try{
            $pdo=Conexao::getInstance();
            $sql="select nome, email, cpf, telefone, endereco, bairro, cep, estado, senha from dados_usuarios";
            $stmt=$pdo->prepare($sql); 
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }//fim do catch
	}//fim do metodo
	
    
// Excluir usuário pelo nome
    public function excluir($nome){
        try{
            $pdo=Conexao::getInstance();
            $sql="delete from dados_usuarios where nome=:nome";  
            $stmt=$pdo->prepare($sql);   
            $stmt->bindValue(':nome', $nome);           
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }//fim do catch		
    }//fim do metodo
	

// Alterar
    public function alterar($nome,$email,$cpf,$telefone,$endereco,$bairro,$cep,$estado,$senha) {
        try{
            $pdo=Conexao::getInstance();
            $sql="update dados_usuarios set 
                  nome=:nome, email=:email,
                  telefone=:telefone, endereco=:endereco,
                  bairro=:bairro, cep=:cep,
                  estado=:estado, senha=:senha where cpf=:cpf";  
            $stmt=$pdo->prepare($sql);   
            $stmt->bindValue(':nome', $nome);             
            $stmt->bindValue(':email', $email); 
            $stmt->bindValue(':cpf', $cpf);             
            $stmt->bindValue(':telefone', $telefone); 
            $stmt->bindValue(':endereco', $endereco);             
            $stmt->bindValue(':bairro', $bairro); 
            $stmt->bindValue(':cep', $cep);             
            $stmt->bindValue(':estado', $estado);
            $stmt->bindValue(':senha', $senha);  
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }//fim do catch	   
	}//fim do metodo
}//fim sa classe 