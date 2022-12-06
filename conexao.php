<?php
  abstract class Conexao {                          
    public static function getInstance(){           
        try{                                      
            $pdo=new PDO
            ("mysql:host=localhost;dbname=usuarios","root","");
            return $pdo;

        }catch(PDOException $erro){                   
            echo $erro->getMessage();
        }            
    }//fim do metodo 
  }//fim da classe 
?>