<?php

include_once "chave.php";

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastrarchave'){
        cadastrar();
        header('Location:../Funcionario/Gerenciamento.php');
    }
}

// $nome = $_POST['nome'];
// $predio = $_POST['predio'];

// echo $predio;
// echo $nome;
function cadastrarChaves()
{
    $numero= $_POST['nome'];
    $predio = $_POST['predio'];
    $desc = $_POST['desc'];
    $chave = new Chave($numero, $predio, $desc);
    $chave->inserir();
    header('Location:../sgc-main/sgc-main/sistemachaves/Funcionario/Gerenciamento.php');
}

function getChaves(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare('select * from chave');
        $stmt->execute();
        $chaves = array();
        foreach($stmt->fetchAll() as $v => $value ){
            $chave = new Chave($value['idChave'],$value['situacao'],
            $value['idPredio'], $value['descricao']);
            
            $chave->id_chave = $value['idChave'];
            array_push($chaves, $chave);
        }
        return $chaves;
    }catch(PDOException $e){
        echo 'Erro ao recuperar lista de alunos: '. $e->getMessage();
    }
}



function getChavesUsuario($id_usuario){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare('SELECT * FROM chave WHERE chave.idChave NOT IN (
            select chave.idChave from chave inner join acesso
            on (chave.idChave = acesso.idChave)
            where acesso.id_cliente = :id_cliente)');
        $stmt->bindParam(':id_cliente',$id_usuario);
        $stmt->execute();
        $chaves = array();
        foreach($stmt->fetchAll() as $v => $value ){

            $stmt->bindParam(':id_cliente',$id_cliente);
            $chave = new Chave($value['idChave'],$value['situacao'],
            $value['idPredio'], $value['descricao']);
            
            $chave->id_chave = $value['idChave'];
            array_push($chaves, $chave);
        }
        return $chaves;
    }catch(PDOException $e){
        echo 'Erro ao recuperar lista de alunos: '. $e->getMessage();
    }
}
