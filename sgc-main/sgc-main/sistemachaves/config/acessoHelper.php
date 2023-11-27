<?php

include_once 'acesso.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === 'cad_acesso'){
        cadastrarAcesso();
        header('Location:acessoindex.php');
   
}
}


function cadastrarAcesso(){
    $id_chave = $_POST['id_chave'];
    $id_cliente = $_POST['id_cliente'];

    $acesso = new Acesso( $id_chave, $id_cliente);
    $acesso->inserir();
}

function getAcessos(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare('select nome,descricao from  chave inner join acesso
        on (chave.idChave = acesso.idChave) inner join cliente on acesso.id_cliente = cliente.id_cliente');
        
        $stmt->execute();
        $acessos = array();
        foreach($stmt->fetchAll() as $v => $value ){
            $acesso = new AcessoA
            ($value['nome'],
            $value['descricao'],
            );
            
          
            array_push($acessos, $acesso);
        }
        return $acessos;
    }catch(PDOException $e){
        echo 'Erro ao recuperar lista de acessos: '. $e->getMessage();
    }
}
?>