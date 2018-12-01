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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Event today</h5> 
                                                            <span class="mail-desc">Just a reminder that event</span> 
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Settings</h5> 
                                                            <span class="mail-desc">You can customize this template</span> 
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Pavan kumar</h5> 
                                                            <span class="mail-desc">Just see the my admin!</span> 
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-0">Luanch Admin</h5> 
                                                            <span class="mail-desc">Just see the my new admin!</span> 
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url(); ?>assets/matrix/assets/images/users/1.jpg" alt="Perfil" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>Perfil</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>login"><i class="ti-wallet m-r-5 m-l-5"></i>Usuários</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url(); ?>dashboard/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    <div class="dropdown-divider"></div>                                
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
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
                            <h3 class="page-title">Usuárias</h3>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"> 
                                <div class="card-body table-responsive">                                
                                    <table class=" table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Usuária</th>  
                                                <th>CPF</th>                                                                                        
                                                <th></th> 
                                            </tr>
                                        </thead>
                                        <tbody>    
                                            <?php foreach ($usuaria as $usu) { ?>                                    
                                                <tr>
                                                    <td><?= $usu->cod_usuaria; ?></td>
                                                    <td><?= $usu->nome; ?></td>
                                                    <td><?= mask($usu->CPF,'###.###.###-##'); ?></td>                                                                                       
                                                    <td>
                                                        <a href="<?= base_url('agenda/agendamento_dados/' . $usu->cod_usuaria) ?>" class="btn btn-success btn-group">Agendar Atendimento</a>    
                                                        <a class="btn btn-info btn-group" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dados Da Usuária</a>
                                                        <div class="dropdown-menu dropdown-menu-right user-dd animated"> 
                                                            <div class="form-group container-fluid">
                                                                <?php
                                                                $cpf = $usu->CPF;
                                                                $this->db->where('CPF', $cpf);
                                                                $dados['usuaria'] = $this->db->get('usuaria')->result();
                                                                ?>
                                                                <?php foreach ($dados['usuaria'] as $da) { ?>
                                                                    <?php
                                                                    $s = $da->sexo;
                                                                    if ($s === 'F') {
                                                                        $sexo = 'Feminino';
                                                                    } elseif ($s === 'M') {
                                                                        $sexo = 'Masculino';
                                                                    } else {
                                                                        $sexo = 'Hermafrodita';
                                                                    }
                                                                    ?>
                                                                    <span>Nome: <?= $da->nome; ?></span><br>  
                                                                    <span>CPF: <?= mask($da->CPF,'###.###.###-##'); ?></span><br>
                                                                    <span>RG: <?= $da->RG; ?></span><br>
                                                                    <span>Telefone: <?= mask($da->telefone,'(##) #####-####'); ?></span><br>
                                                                    <span>Data de Nascimento: <?= date("d/m/Y", strtotime($da->data_nascimento)); ?></span><br>
                                                                    <span>Sexo: <?= $sexo; ?></span>
                                                                <?php } ?>   
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>                               
                                            <?php } ?>   
                                        </tbody>
                                    </table>
                                </div>                             
                            </div>   
                        </div>     
                    </div>
                </div>
                <!-- ============================================================== -->

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
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
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
        <!-- ============================================================== -->
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
