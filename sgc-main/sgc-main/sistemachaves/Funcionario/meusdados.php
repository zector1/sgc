<?php 
session_start();


    //Se o usuário não estiver logado, ele é redirecionado para a página inicial
    if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
        header("location: index.php");
        exit;
    }

    
    // include_once '/PHP/Agendar/postAgendar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - CADASTRO</title>
    <!-- CSS GLOBAL -->
    <link href='../Funcionario/CSS/GLOBAL/Tab_Bar.css' rel='stylesheet'>
    <!-- CSS -->
    <link href="../Funcionario/CSS/GERENCIAMENTO/alterarchave.css" rel="stylesheet" type="text/css" />
   
    <link href="../Funcionario/CSS/meusdados.css" rel="stylesheet" type="text/css" />
    
    <!--JQUERY/AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/Fonts&Color.css' rel='stylesheet'>
</head>
<body>
    <div class="indicador1">
        <div>
            <i class='bx bx-chevron-left'></i>
            <i class='bx bx-chevron-left'></i>
        </div>
    </div>
    <!-- POPUPS -->

    <header class="Header">
        <!-- Barra Laterial -->
        <nav class="Nav">
            <!-- Logo SGC -->
            <div class="Logo_SGC">
                <!-- Logo SGC -->
                <div>
                    <img src="../Assets/Logo 1.png" alt="Logo SGC">
                    <span>Sistema de Gerenciamento de Chaves</span>
                </div>
                <!-- Alternativa Logo SGC -->
                <div>
                    <img src="../Assets/Chave.png" alt="Logo SGC">
    
                </div>  
            </div>
            <!-- Container Com Opções da Barra Lateral -->
            <div class="Container_Opc">
                <!-- Lista dos Itens -->
                <ul class="Ul_Barra">
                    <!-- Item 1 = Home -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Home.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-home'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Home</span>
                        </a>
                    </li>
                    <!-- Item 2 = Cadastro -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Gerenciamento.php" class="Item_Barra active">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Meus dados</span>
                        </a>
                    </li>
                    <!-- Item 3 = Pendetes -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Pendente</span>
                        </a>
                    </li>
                    <!-- Item 4 = Solicitações -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Solicitacoes.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-archive-in'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Solicitações</span>
                        </a>
                    </li>
                    <!-- Item 5 = Agendamento -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Agendamento.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-bell'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Agendamento</span>
                        </a>
                    </li>
                    <!-- Item 6 = Sobre -->
                    <li class="Li_Barra">
                        <div></div>
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-group'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Sobre</span>
                        </a>
                    </li>
                     <!-- Item 7 = Sobre -->
                    
                    <!-- Item 8 = Sair -->
                    <li class="Li_Barra">
                        <a href="../config/logout.php" class="Item_Barra_Sair">
                            <i class='bx bx-exit'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav> 
        <!-- Indicadores do Status da Barra Lateral -->
            <div class="indicadores">
                <div class="indicador2"></div>
            </div>
    </header>
    <main class="Main">
        <!-- Bloco com Nome do Usuário -->
        <div class="Main_Cont1">
            
            <h3>Meus dados</h3>
        </div>
        <div class="Dados_Basicos"> 
        
        <div class="frase"> 
        <h3>Dados básicos</h3>
</div>
        <div class="box"> 
        <div class="field">
        <div class="nome"> 
        
        <h4>Nome: </h4>
        <p><?php echo $_SESSION["nomeAdm"];?></p>
</div>
        
</div>
<div class="field">
<div class="matricula"> 
        
        <h4>Matricula: </h4>
        <p> 20201910027</p>
        
</div>
</div>

<div class="field">
<div class="email"> 
        
        <h4>E-mail: </h4>
        <p>20201910027@ifba.edu.br</p>
        
</div>
</div>
<div class="field">
<div class="historico">

    <h4>Histórico de chave:</h4>
    <p>Chave 1</p>
    
</div>
</div>
</div>
<div class="frase"> 
        <h3>Senha</h3>
</div>
        <div class="box2">
            
            
            <div class="field">
            
            
                <label for="current-password">Senha Atual:</label>
                <input type="password" id="current-password" class="custom-input">
            </div>

            <div class="field">
                <label for="new-password">Nova Senha:</label>
                <input type="password" id="new-password" class="custom-input">
            </div>
            <div class="field">
                <label for="confirm-password">Confirmar Senha:</label>
                <input type="password" id="confirm-password" class="custom-input2">
            </div>
            
        </div>
    </div>


</div>



       
</div>
</div>


    </main>
</body>
</html>