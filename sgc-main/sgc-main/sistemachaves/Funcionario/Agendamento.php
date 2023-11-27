<?php

include_once('PHP/Agendar/postAgendar.php');
include_once('PHP/Conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - AGENDAMENTO</title>
    <!-- CSS GLOBAL -->
    <link href='./CSS/GLOBAL/Tab_Bar.css' rel='stylesheet'>
    <!-- CSS -->
    <link href="./CSS/agendamento.css" rel="stylesheet" type="text/css" />
    <link href="./CSS/GERENCIAMENTO/GerenciamentoGlobal.css" rel="stylesheet" type="text/css" />
    <link href="./CSS/agendamento.css" rel="stylesheet" type="text/css" />
    <!-- JAVASCRIPT GLOBAL -->
    <script src="./JS/GLOBAL/TabBar.js" type="text/javascript" defer></script>
    <!-- JAVASCRIPT -->
    <script src="./JS/agendamento.js" type="text/JavaScript" defer></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='./CSS/GLOBAL/Fonts&Color.css' rel='stylesheet'>
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
                        <a href="../Funcionario/Pendente.php" class="Item_Barra">
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
                     <!-- Item 4 = Acesso -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/acessoindex.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-door-open'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Acesso</span>
                        </a>
                    </li>
                    <!-- Item 5 = Agendamento -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Agendamento.php" class="Item_Barra active">
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
        <?php
            if (isset($_SESSION['agendar_entregue'])):
            ?>
            <script>
                alert('Chave entregue com sucesso!');
            </script>
            <?php
            endif;
            unset($_SESSION['agendar_entregue']);
            ?>
        <div class="Main_Cont1">
        <i class='bx bx-chevron-right' ></i>
            <h3>Chaves Agendadas</h3>
        </div>
        <!-- Bloco com Predios -->
      
          <div class="Main_Cont2">
<fieldset>

        <div class="tabelabox">
        <legend>Chaves Agendadas</legend>
       
           <!-- Adicionar Chave -->
           <table id="tabchave">
        <thead>
            <tr>
                <th>N°                 <i class='bx bxs-sort-alt'></i></th>
                <th>Pessoa                 <i class='bx bxs-sort-alt'></th>
                <th>Chave                 <i class='bx bxs-sort-alt'></th>
                <th>Data                       <i class='bx bxs-sort-alt'></th>
                <th>H.Entrada                         <i class='bx bxs-sort-alt'></th>
                <th>H.Saída                         <i class='bx bxs-sort-alt'></th>
                <th>Excluir                         <i class='bx bxs-sort-alt'></th>

            </tr>
        </thead>
        <tbody>
        <?php
      
      $agendars = getAgendar();
      
      
       foreach ($agendars as $agendar) {
        
           echo "<tr>";

          
            echo "<td>" . $agendar->id_agendar . "</td>";

           echo "<td> $agendar->nome  </td>";

           echo "<td> $agendar->descricao  </td>";
           
           echo "<td> $agendar->data_agendar  </td>";
          
           echo "<td> $agendar->horario_inicio_agendar  </td>";
         
           echo "<td> $agendar->horario_final_agendar  </td>";
           
           echo '<td><input type="reset" value="Excluir"></td> ';
           
           echo "</tr>";
       
    
}
       ?>
                
               
               
        </tbody>
    </table>
          
        </div>
        </fieldset>
</div>
        <div class="Main_Cont3">
        </div>
    </main>
</body>
</html>