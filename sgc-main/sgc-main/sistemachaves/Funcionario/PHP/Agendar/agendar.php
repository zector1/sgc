<?php
class AgendarE{
    public $idChave;
    public $situacao;
    public $agendado;
    public $idPredio;
    public $descricao;

    function __construct($idChave, $situacao, $agendado, $idPredio, $descricao){
        $this-> idChave = $idChave;
        $this->situacao = $situacao;
        $this->agendado = $agendado;
        $this->idPredio = $idPredio;
        $this->descricao = $descricao;
    }

    

}

class AgendamentosSolicitados{
    public $nome;
    public $descricao;
    public $situacao_agendar;
    public $data_agendar;
    public $horario_inicio_agendar;
    public $horario_final_agendar;

    function __construct($nome, $descricao, $situacao_agendar, $data_agendar, $horario_inicio_agendar,$horario_final_agendar){

        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->situacao_agendar = $situacao_agendar;
        $this->data_agendar = $data_agendar;
        $this->horario_inicio_agendar = $horario_inicio_agendar;
        $this->horario_final_agendar = $horario_final_agendar;
    }

 
}

class AgendamentosA{
    public $id_agendar;
    public $nome;
    public $descricao;
    public $data_agendar;
    public $horario_inicio_agendar;
    public $horario_final_agendar;

    function __construct($id_agendar, $nome, $descricao, $data_agendar, $horario_inicio_agendar,$horario_final_agendar){

        $this->id_agendar = $id_agendar;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->data_agendar = $data_agendar;
        $this->horario_inicio_agendar = $horario_inicio_agendar;
        $this->horario_final_agendar = $horario_final_agendar;
    }

 
}
?>

