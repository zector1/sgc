<?php

include_once 'Banco.php';

class Acesso{
    public $id_acesso;
    public $id_chave;
    public $id_func;
    public $descricao;
   

    

    function __construct($id_acesso,$id_chave,$id_func)
    {   
        $this->id_acesso = $id_acesso;
        $this->id_chave = $id_chave;
        $this->id_func = $id_func;
    }

    function setIdAcesso($id_acesso,$id_chave,$id_func){
        $this->id_acesso = $id_acesso;
        $this->id_chave = $id_chave;
        $this->id_func = $id_func;
    }
    
    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar(); 
        try{
            $stmt = $conexao->prepare("insert into acesso(idChave, id_cliente)values (:id_chave, 
           :id_cliente)");
           $stmt->bindParam(':idChave',$this->id_chave);
           $stmt->bindParam(':idChave',$this->id_cliente);
           
           $stmt->execute();
        }catch(PDOException $e){
            echo "Erro ao inserir novo acesso: ". $e->getMessage();
        }
    }
    

}



class AcessoA{
    public $nome;
    public $descricao;

    function __construct($nome,$descricao)
    {   
        $this->nome = $nome;
        $this->descricao = $descricao;
       
    }


}


?>