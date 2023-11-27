<?php
session_start();
include_once 'funcionario.php';
include_once 'acesso.php';

if(isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'cadastrarFuncionario'){
        cadastrar();
    }
    else if($tipo === 'vincular_acesso'){
        vincular();
        header('Location: ../Funcionario/acessoindex.php?id_cliente='.$_POST['id_cliente']);

    }
}

function cadastrar() {

    $nome = $_POST['nome'];
    $tipo_func = $_POST['tipo_func'];
    $matricula = $_POST['matricula'];
    $senha = $_POST['senhaFinal'];
    $email = $_POST['email'];
   
    


    if ($tipo_func == 'administrador') {
    
    $usuario = new Usuario($nome, $tipo_func, $matricula, $senha, $email);
    $usuario->inserirAdministrador();
}
else {
    $usuario = new Usuario($nome, $tipo_func, $matricula, $senha, $email);
    $usuario->inserirCliente();
}
header('Location: ../Funcionario/Cadastro-funcionario.php');
}


function getClientes(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare('select * from cliente');
        $stmt->execute();
        $clientes = array();
        foreach($stmt->fetchAll() as $v => $value ){
            $cliente = new Usuario($value['id_cliente'],$value['nome'],
            $value['matricula'], $value['tipo_func'], $value['email']);
            
            $cliente->id_cliente = $value['id_cliente'];
            array_push($clientes, $cliente);
        }
        return $clientes;
    }catch(PDOException $e){
        echo 'Erro ao recuperar lista de usuários: '. $e->getMessage();
    }
}



function vincular(){

   
    $id_cliente = $_POST['id_cliente'];
    
    $id_chave =  $_POST['id_chave'];
    
    Usuario::vincular($id_chave,$id_cliente);
}
