<?php
session_start();
include_once 'login.php';

//Se o administrador já estiver logado, redireciona-o para a página de gerenciamento
if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("location: ../Funcionario/Home.php");
    exit;
}

if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'logarAdm') {
        $tipoUser = $_POST['tipoUser'];
        if ($tipoUser === 'admin') {
            loginAdm();
        } else if ($tipoUser === 'funcionario') {
            loginUser();
        }
    }
}
//Captura os inputs inseridos e encaminha-os para a de Sessão
function loginAdm()
{
    $matricula = trim($_POST['matricula']);
    $senha = trim($_POST['senha']);
    $sessaoAdm = new Sessao($matricula, $senha);
    $sessaoAdm->logarAdm();
}


function loginUser()
{
    $matricula = trim($_POST['matricula']);
    $senha = trim($_POST['senha']);
    $sessaoUser = new Sessao($matricula, $senha);
    $sessaoUser->logarUser();
}
