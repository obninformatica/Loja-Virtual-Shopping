/**
 * Created by Osvaldo on 25/08/2026.
 */
$(document).ready(function(){
    alert('vai trabalhar...');
    var main_content = $("#main_content");
//    var center_content = main_content.find(".center_content");
    var btn_calcular_frete = main_content.find("#btn-calcular-frete");
    var input_frete = main_content.find("#input-frete");
    var mensagem_frete = main_content.find("#mensagem-frete");


    btn_calcular_frete.on('click', function(event){
        event.preventDefault();
        //console.log('calcular frete');
        var frete = input_frete.val();
        //console.log(frete);
        $.ajax({
            url:'/frete/calcular',
            type:'POST',
            data:'frete='+frete,
            dataType:'json',
            beforeSend:function()
            {
                mensagem_frete.html('Calculando o frete');
            },
            success: function(retorno)
            {
                console.log(retorno);
            }

        });
    });





});