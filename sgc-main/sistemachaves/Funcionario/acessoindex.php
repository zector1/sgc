<?php
  include_once '../config/funcionarioHelper.php';
 
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
    <link href="../Funcionario/CSS/GERENCIAMENTO/GerenciamentoGlobal.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="../Funcionario/CSS/GERENCIAMENTO/alterarchave.css" rel="stylesheet" type="text/css" />
    <link href="../Funcionario/CSS/gerenciamentochave.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- JAVASCRIPT GLOBAL -->
    <script src="../Funcionario/JS/GLOBAL/TabBar.js" type="text/javascript" defer></script>
    <!-- JAVASCRIPT -->
    <script src="../Funcionario/JS/GERENCIAMENTO/alterarchave.js" type="text/javascript" defer></script>
    <script src="../Funcionario/JS/GERENCIAMENTO/Gerenciamento.js" type="text/javascript" defer></script>
    <script src="../Funcionario/JS/GERENCIAMENTO/acesso.js" type="text/javascript" defer></script>
    <!--JQUERY/AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

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
                    <span>Sistema de Gerenciamento de Usuário</span>
                </div>
                <!-- Alternativa Logo SGC -->
                <div>
                    <img src="../Assets/chavehomee.png" alt="Logo SGC">
    
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
                        <a href="../Funcionario/Gerenciamento.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Gerenciamento</span>
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
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-user'></i> <!-- nos mudadmos -->
                            </div>
                            <span class="Name_Item_Barra Status1"> Gerenciamento de aluno</span>
                        </a>
                    </li>
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra active">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i> <!-- nos mudadmos -->
                            </div>
                            <span class="Name_Item_Barra Status1"> Gerenciamento de chave</span>
                        </a>
                    </li>
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-buildings'></i> <!-- nos mudadmos -->
                            </div>
                            <span class="Name_Item_Barra Status1"> Gerenciamento de prédio</span>
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
                    <!-- Item 7 = Sair -->
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
            <i class='bx bx-chevron-right' ></i>
            <h3>Gerenciamento de chaves</h3>
        </div>
        <!-- Bloco com Predios -->
        <div class="Main_Cont2">
<fieldset>

        <div class="tabelabox">
        <legend>Usuários Cadastrados</legend>
       
           <!-- Adicionar Chave -->
           <table id="tabchave">
        <thead>
            <tr>
                <th>N°                 <i class='bx bxs-sort-alt'></i></th>
                <th>Nome                 <i class='bx bxs-sort-alt'></th>
                <th>Email                         <i class='bx bxs-sort-alt'></th>
                <th>Descrição                          <i class='bx bxs-sort-alt'></th>
                <th colspan="2" class="acao-header">Ações                                                        <i class='bx bxs-sort-alt'></th>

            </tr>
        </thead>
        <tbody>
           <?php
      
      $clientes = getClientes();
       foreach ($clientes as $cliente) {
        
           echo "<tr>";
           echo "<td>" . $cliente->id_cliente . "</td>";
           

        
           echo "<td>" . $cliente->tipo_func . "</td>";
           echo "<td>" . $cliente->email . "</td>";
           echo '<td> <a class="editar" href="editar_cliente.php?id_cliente=' . $cliente->id_cliente . '">Editar</a></td> ';
           echo '<td><input type="reset" value="Excluir_Cliente"></td> ';
           
           echo "</tr>";
       }
       ?>
             
               
        </tbody>
    </table>
          
        </div>
        </fieldset>
</div>

    </main>
</body>
</html>