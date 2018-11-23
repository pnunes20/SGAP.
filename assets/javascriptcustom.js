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
    //ver prontuário
    $("#verp").click(function () {
        var pesquisa = $(this).val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        var dados = {
            ver_p: pesquisa
        };
        $.post(baseUrl + "/atendimento/prontuario", dados, function (retorna) {
            //Mostra dentro da div os resultado obtidos 
            $("#atend").html(retorna);
        });
    });

    //relatorio geral
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-rel").html(retorna);
            });
        } else {
            $("#result-rel").html('');
        }

    });
    //relatorio cor
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/qtdnegras", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-negras").html(retorna);
            });
        } else {
            $("#result-negras").html('');
        }

    });
    //relatorio cor
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/qtdbrancas", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-brancas").html(retorna);
            });
        } else {
            $("#result-brancas").html('');
        }

    });
    //relatorio cor
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/qtdindig", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-indig").html(retorna);
            });
        } else {
            $("#result-indig").html('');
        }

    });
    //relatorio cor
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/qtdpardas", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-pardas").html(retorna);
            });
        } else {
            $("#result-pardas").html('');
        }

    });
    //relatorio cor
    $("#data_r").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/qtdamarelas", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-amarelas").html(retorna);
            });
        } else {
            $("#result-amarelas").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-ger-viol").html(retorna);
            });
        } else {
            $("#result-ger-viol").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_psi", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-psicol").html(retorna);
            });
        } else {
            $("#result-psicol").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_fis", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-fisica").html(retorna);
            });
        } else {
            $("#result-fisica").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_patri", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-patri").html(retorna);
            });
        } else {
            $("#result-patri").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_sex", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-sexual").html(retorna);
            });
        } else {
            $("#result-sexual").html('');
        }

    });
     //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_moral", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-moral").html(retorna);
            });
        } else {
            $("#result-moral").html('');
        }

    });
    //relatorio tipo violencia
    $("#data_r_viol").click(function () {
        var dataini = $("#data_rel1").val();
        var datafim = $("#data_rel2").val();

        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

        if (dataini && datafim != '') {
            var dados = {
                data_inicio: dataini,
                data_fim: datafim
            };
            $.post(baseUrl + "/relatorios/relatorios_tipo_viol_amorte", dados, function (retorna) {
                //Mostra dentro da div os resultado obtidos 
                $("#result-amorte").html(retorna);
            });
        } else {
            $("#result-amorte").html('');
        }

    });

});