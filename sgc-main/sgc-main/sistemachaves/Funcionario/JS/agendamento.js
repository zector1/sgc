var botaoReceber = document.querySelector(".botao-chave");

var chavePendente = document.querySelector(".container-pendente");
var icone = document.querySelector("#icone-entregar");

// botaoReceber.addEventListener('click', receberChave);


function receberChave() {
    var receberSN = confirm('Deseja entregar a chave?');

    if(receberSN == true) { 
        chavePendente.style.display = "none";
    }
}
function mudarCor() {
    icone.style.color = '#00FF0A';
}
function voltarCor() {
    icone.style.color = '#fff';
}
botaoReceber.addEventListener('mouseover', mudarCor);
botaoReceber.addEventListener('mouseout', voltarCor);

var botoes = document.getElementsByClassName("botao-chave");



    function recusarAgendamento() {

        var recusar = confirm('Recusa msm?');

        if(recusar ==true){
    $.ajax({
        type: 'POST',
        url: './PHP/Agendar/postAgendar.php', 
        data:{
            'tipo': 'recusarAgendamento'
        },
        success: function(data) {
            console.log("Sucesso:");
            console.log('Recusado com sucesso:', data);
        },
        error: function(xhr, status, error) {
            
            console.error('Erro ao atualizar:', error);
        }
    });
} else{
    alert('Atualização cancelada pelo usuário.');
}
    }





    $.getJSON('./PHP/Agendar/postAgendar.php', function(agendares){
        
        $('.Bloco_Chaves_UL').each((index, ul) => {
        $.each(agendares, function( index, value ) {
            var text =// echo "<div class=\"Main_Cont2\">";
           ` echo "<section class=\"chaves-agendadas\">";
            echo "<section class=\"chaves-agendadas\">";
            echo "<div class=\"container-pendente\">";
            echo "<img src=\"../Assets/Chave.png\" alt=\"chave do container\">";
            echo "<div class=\"linha-horizontal\"></div>";
            echo "<div class=\"informacoes-pendente\">";`
            ul.innerHTML += text;
            
          });

    })
})