<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>SGAP</title>
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/matrix/assets/libs/select2/dist/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/matrix/assets/libs/jquery-minicolors/jquery.minicolors.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/matrix/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/matrix/assets/libs/quill/dist/quill.snow.css">
        <link href="<?= base_url(); ?>assets/matrix/dist/css/style.min.css" rel="stylesheet">

    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" >
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?= base_url(); ?>assets/matrix/logo-ico.png" alt="homepage" width="230" height="62" class="light-logo" />

                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->

                            <!-- Logo icon -->
                            <!-- <b class="logo-icon"> -->
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                            <!-- </b> -->
                            <!--End Logo icon -->
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Pesquisar"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li> -->
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url(); ?>assets/matrix/assets/images/users/1.jpg" alt="Perfil" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">                                   
                                    <a class="dropdown-item" href="<?= base_url(); ?>login"><i class="ti-wallet m-r-5 m-l-5"></i>Usuários</a>     
                                    <a class="dropdown-item" href="<?= base_url(); ?>dashboard/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>                                                                   
                                </div>
                            </li>                            
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>agenda/listar_agenda" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Início</span></a></li>
                            <li class="sidebar-item"> <a data-toggle="modal" data-target="#myModal2" class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>atendimento" aria-expanded="false"><i class="mdi mdi-content-paste"></i><span class="hide-menu">Atendimento</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>agenda" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">Agendamento</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" data-toggle="modal" data-target="#myModal3" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Prontuários</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Relatórios</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="<?= base_url(); ?>relatorios" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">Relatório Por Cor</span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url(); ?>relatorios/relatorios_tipo_viol" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu">Relatório Por Tipo de Violência</span></a></li>
                                    <li class="sidebar-item"><a data-toggle="modal" data-target="#myModal8" href="#" class="sidebar-link"><i class="mdi mdi-file-export"></i><span class="hide-menu">Gerar Planilha</span></a></li>                      
                                </ul>
                            </li>                            
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h3 class="page-title">Editar Agendamento</h3>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <?php

                function mask($val, $mask) {
                    $maskared = '';
                    $k = 0;
                    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
                        if ($mask[$i] == '#') {
                            if (isset($val[$k]))
                                $maskared .= $val[$k++];
                        }
                        else {
                            if (isset($mask[$i]))
                                $maskared .= $mask[$i];
                        }
                    }
                    return $maskared;
                }
                ?>  
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <form class="form-control form-horizontal " action="<?= base_url(); ?>agenda/salva_editar" method="post">
                                    <input type="hidden" id="cod_agenda" name="cod_agenda" value="<?= $agenda[0]->cod_agenda; ?>">
                                    <div class="card-body">
                                        <h3 class="card-title"></h3>  
                                        <label><h5>Usuária</h5></label>
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="nome" value="<?= $agenda[0]->nome; ?>"/>
                                            <input type="text" class="form-control" name="nome" id="nome" value="<?= $agenda[0]->nome; ?>" disabled>                                            
                                        </div> 
                                        <br>
                                        <label><h5>CPF</h5></label>
                                        <div class="input-group col-md-6">
                                            <input type="hidden" name="CPF" value="<?= $agenda[0]->CPF; ?>"/>
                                            <input type="text" class="form-control" name="CPF" id="CPF" value="<?= mask($agenda[0]->CPF,'###.###.###-##'); ?>" disabled>                                            
                                        </div>  
                                        <br>
                                        <label><h5>Data</h5></label>
                                        <div class="input-group col-md-6">
                                            <input type="date" class="form-control" name="data_agenda" id="data_agenda" value="<?= $agenda[0]->data_agenda; ?>" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>   
                                        <br>                                        
                                        <label><h5>Horário</h5></label>
                                        <div class="input-group col-md-6">
                                            <input type="time" class="form-control" name="horario_agenda" id="horario_agenda" value="<?= date("H:i", strtotime($agenda[0]->horario_agenda)); ?>" required>
                                            <div class="input-group-append">                                               
                                                <span class="input-group-text"><i class="fa fa-clock"></i></span>                                                 
                                            </div>   
                                        </div>
                                        <div id="resulth"></div>
                                        <br>
                                    </div>
                                    <div class="border-top">
                                        <div id="resulthd"></div>
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success">Salvar</button>
                                            <a class="btn btn-danger" href="<?= base_url() ?>agenda/listar_agenda">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>   
                        <!-- AQUI MOSTRA OS HORARIOS AGENDADOS -->
                        <div class="col-md-6">
                            <div id="resultado">                                  
                            </div>                    
                        </div> 
                        <!--################################## -->
                    </div>              
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    <!--  All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>. -->
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>    
        <!-- Modal --> 
         <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">                               
                <div class="modal-content">
                    <div class="modal-header">
                      <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title" id="myModalLabel">Gerar Planilha</h4>
                    </div>
                    <div class="modal-body">         
                        <form action="<?= base_url(); ?>relatorios/gerar_planilha_p_data" method="post">
                            <div class="col-12 form-group row">
                                <label class="m-t-5"><h5>Data Inicial:</h5></label> 
                                <div class="input-group col-md-4">                                                           
                                    <input type="date" class="form-control col-md-7" name="data_rel1" required> 
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>   
                                </div> 
                                <label class="m-t-5"><h5>Data Final:</h5></label> 
                                <div class="input-group col-md-4">
                                    <input type="date" class="form-control col-md-7" name="data_rel2" required> 
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>   
                                </div> 
                            </div>
                            <div class="col-12 form-group row">
                                <div class="input-group col-md-2">
                                    <button type="submit" class=" btn btn-info col-md-12">Filtrar</button>                                             
                                </div>  
                                <div class="input-group col-md-1">
                                    <label class="m-t-5"><h5>OU</h5></label>                                            
                                </div>  
                                <div class="input-group col-md-4">
                                    <a href="<?= base_url(); ?>relatorios/gerar_planilha" class="btn btn-success col-md-7">Todo o Período</a>                                             
                                </div> 
                            </div>
                        </form>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>                          
                    </div>
                </div>                    
            </div>
        </div> 
        
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg">                            
                <div class="modal-content">
                    <div class="modal-header">
                      <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title" id="myModalLabel">Pesquisar Prontuário</h4>
                    </div>
                    <div class="modal-body">         
                        <div class="col-md-12 form-group">                       
                            <input type="text" name="pesquisar_p" id="pesquisar_p" class="form-control" placeholder="Nome ou CPF">
                        </div>  
                        <div id="check"></div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-danger" >Fechar</a>
                        <button type="button" class="btn btn-success" id="pesquisar">Pesquisar</button>
                    </div>
                </div>                    
            </div>
        </div> 
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <form action="<?= base_url(); ?>atendimento/pesquisar" method="post">                
                    <div class="modal-content">
                        <div class="modal-header">
                          <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                            <h4 class="modal-title" id="myModalLabel">Pesquisar Cadastro</h4>
                        </div>
                        <div class="modal-body">         
                            <div class="col-md-12 form-group">                       
                                <input type="text" name="pesquisar" id="nome" class="form-control" placeholder="Nome ou CPF">
                            </div>                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Pesquisar</button>
                        </div>
                    </div>
                </form>      
            </div>
        </div>       

        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="<?= base_url(); ?>assets/matrix/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?= base_url(); ?>assets/matrix/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/javascriptcustom.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/dist/js/custom.min.js"></script>
        <!-- This Page JS -->
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/dist/js/pages/mask/mask.init.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/select2/dist/js/select2.full.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/select2/dist/js/select2.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/matrix/assets/libs/quill/dist/quill.min.js"></script>
        <script>
            //***********************************//
            // For select 2
            //***********************************//
            $(".select2").select2();

            /*colorpicker*/
            $('.demo').each(function () {
                //
                // Dear reader, it's actually very easy to initialize MiniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just for the demo, so don't get confused
                // by it. Also, data- attributes aren't supported at this time...they're
                // only used for this demo.
                //
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    position: $(this).attr('data-position') || 'bottom left',

                    change: function (value, opacity) {
                        if (!value)
                            return;
                        if (opacity)
                            value += ', ' + opacity;
                        if (typeof console === 'object') {
                            console.log(value);
                        }
                    },
                    theme: 'bootstrap'
                });

            });
            /*datwpicker*/
            jQuery('.mydatepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            var quill = new Quill('#editor', {
                theme: 'snow'
            });

        </script>
    </body>

</html>
<?php
