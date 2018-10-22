$(function () {

    $("#data_agenda").change(function () {
        var pesquisa = $(this).val();

        var baseUrl = window.location;

        //Verificar se há algo digitado
        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa
            };
            $.post(baseUrl, dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#resultado").html(retorna);
            });
        } else {
            $("#resultado").html('');
        }
    });
    //PESQUISAR POR NOME OU CPF NA TABELA AGENDA
    $("#pesq-age").keyup(function () {
        var pesquisa = $(this).val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            palavra: pesquisa
        };
        $.post(baseUrl + "/agenda/pesq_tab_age", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#result-pesq").html(retorna);
        });

    });
    //PESQUISAR POR DATA NA TABELA AGENDA
    $("#pesq-date").change(function () {
        var pesquisa = $(this).val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            data_age: pesquisa
        };
        $.post(baseUrl + "/agenda/pesq_tab_age", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#result-pesq").html(retorna);
        });

    });
    //DETALHAR OS DADOS DA USUARIA
    $("#detalhe").click(function () {
        var pesquisa = $(this).val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            palavra: pesquisa
        };
        $.post(baseUrl + "/usuaria/detalhar", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#resultados").html(retorna);
        });

    });
    //verificar horarios
    $("#horario_agenda").change(function () {
        var pesquisa = $(this).val();
        var dataa = $("#data_agenda").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (pesquisa != '') {
            var dados = {
                data_a: dataa,
                hora_a: pesquisa
            };
            $.post(baseUrl + "/agenda/verif_hora", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#resulth").html(retorna);
            });
        } else {
            $("#resulth").html('');
        }

    });

    //verificar horarios para agendar
    $("#agenda").click(function () {
        var dataa = $("#data_agenda").val();
        var pesquisa = $("#horario_agenda").val();
        var n = $("#nome").val();
        var cp = $("#CPF").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            data_agenda: dataa,
            horario_agenda: pesquisa,
            nome: n,
            CPF: cp
        };
        $.post(baseUrl + "/agenda/agendar", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#resulthd").html(retorna);
        });

    });
    //verificar prontuário
    $("#pesquisar").click(function () {
        var pesquisa = $("#pesquisar_p").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            pesquisar_p: pesquisa
        };
        $.post(baseUrl + "/atendimento/listar_prontuario", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#check").html(retorna);
        });
    });

});