
<?php

include_once('C:/xampp/htdocs/sgc-maina/sgc-main/sgc-main/sistemachaves/Funcionario/PHP/Conexao.php');




class Agendar{
 
 
    public $id_agendar;
    public $idChave;
    public $id_cliente;
    public $Turno;
    public $Data;
    public $horario_inicio_agendar;
    public $horario_final_agendar;
    public $situacao_agendar;
    
    
    function __construct($idChave, $id_cliente, $Turno, $Data,$horario_inicio_agendar,$horario_final_agendar,$situacao_agendar){
        $this->idChave = $idChave;   
        $this->id_cliente = $id_cliente; 
        $this->Turno = $Turno; 
        $this->Data =  DATE($Data); 
        $this->horario_inicio_agendar = date($horario_inicio_agendar); 
        $this->horario_final_agendar = date($horario_final_agendar);  
        $this->situacao_agendar = $situacao_agendar; 
        

        $id_chave = $this->idChave;
        $dataI = $this->Data;
        
    }


    function Agendar_Chave(){
        $banco = new Banco();
        $conexao = $banco->conectar();

        try{
            
             $stmt = $conexao->prepare("INSERT INTO agendar (idChave, id_cliente, turno, data_agendar, horario_inicio_agendar, horario_final_agendar,situacao_agendar) 
            VALUES (:idChave, :id_cliente, :turno, :data_agendar,  '08:30:00', '10:00:00',:situacao_agendar)");
            
            $stmt->bindParam(':idChave', $this->idChave);
            $stmt->bindParam(':id_cliente', $this->id_cliente);
            $stmt->bindParam(':turno', $this->Turno);
            $stmt->bindParam(':data_agendar', $this->Data);
            
            $stmt->bindParam(':situacao_agendar', $this->situacao_agendar);

            
            $stmt->execute();
            // $hoje = date('Y/m/d');

            // if($hoje == $this->Data){
            $stmt = $conexao->prepare("UPDATE chave SET situacao = 1 WHERE idChave = :id_chave");
             $stmt->bindParam('id_chave', $this->idChave);
            // }

            $stmt->execute();
            echo "Chave agendada";
            echo var_dump($a);
            

        } catch(PDOException $ex){
            echo "Erro ao agendar" . $ex;
        }
    

  
    }
    }
    
    //registrarUSO($id_chave, $dataI);

    // function getAgendar(){
    //     $banco = new Banco();
    //     $conexao = $banco->conectar();

    //     try{

    //             $stmt = $conexao->prepare("select data_agendar from agendar where idChave = 100");

    //             $stmt->execute();

    //             echo "Chave agendada";

    //     } catch(PDOException $ex){
    //         echo "Erro ao excluir predio: " . $ex;
    //     }
    // }


    function recusarAgendamento(){
        try {
    
            $banco = new Banco();
            $conexao = $banco->conectar();
        
            $stmt = $conexao->prepare("UPDATE agendar SET situacao_agendar = 2 WHERE situacao_agendar = 1");
            
            $stmt->bindParam('situacao_agendar',$this->situacao_agendar);
            var_dump($this->situacao_agendar);
            $stmt->execute();
        
            echo "Recusado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }
    



?>
