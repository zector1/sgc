<?php
  
  include_once '../config/chaveHelper.php';
  include_once '../config/chave.php';
  include_once '../config/funcionarioHelper.php';
  include_once '../config/funcionario.php';
  include_once '../config/acessoHelper.php';


  $id_cliente = filter_input(
    INPUT_GET,
    'id_cliente'
);

$cliente = Usuario::carregar($id_cliente);

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
    <link href="../Funcionario/CSS/editar_cliente.css" rel="stylesheet" type="text/css" />
    
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
            <h3>Acessos de:</h3>
            <h3> <?php echo $cliente->nome?></h3>
        </div>
        <!-- Bloco com Predios -->
        <div class="Main_Cont2">







        
    <fieldset>
        
        <form name="formCad" method="POST" action="../config/funcionarioHelper.php">
            <fieldset>
                <input style="display: none" name="tipo" id="tipo" type="text" value="vincular_acesso">
                <legend>Dados Professor</legend>

                <label for="id_cliente">Código:</label>
                <input type="number" readonly id="id_cliente" name="id_cliente" readonly value="<?php echo $cliente->id_cliente; ?>">
                <br>
                <label for="nome">Nome: </label>
                <!-- COmentário -->
                <input size="40" readonly value="<?php echo $cliente->nome; ?>" placeholder="Digite aqui seu nome" name="nome" id="nome" type="text">
            </fieldset>
   
    <fieldset>
        <legend>Chaves</legend>
        <label for="id_chave">Chaves:</label>
        <select name="id_chave" id="id_chave">
            <?php
            $chaves = getChavesUsuario($id_cliente);
            
            foreach ($chaves as $chave) {
                var_dump($chaves);
         
                echo '<option value="' .$chave->id_chave . '">'  .$chave->descricao .'</option>';
            }
            ?>
        </select>
        
    </fieldset>

    <input id="btn_editar" type="submit" value="Enviar">
    </fieldset>

    </form>
    </fieldset>
    <div>
        <fieldset>
            <legend>Formações</legend>
            <table id="tabelabox">
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    
                </tr>
                <?php
                $acessos = getAcessos();
                foreach ($acessos as $acesso) {
                    echo '<tr>';
                    echo '<td>' . $acesso->nome . '</td> ';
       
                    echo '<td>' . $acesso->descricao . '</td> ';
                    // echo '<td>' . $acesso-> . '</td> ';

                    echo '</tr> ';
                }
                ?>

            </table>
        </fieldset>
    </div>
    </main>
</body>
</html>