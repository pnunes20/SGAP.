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
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Pesquisar"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
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
                                    <a class="dropdown-item" href="<?= base_url(); ?>usuario"><i class="ti-wallet m-r-5 m-l-5"></i>Usuários</a>
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
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Início</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>dashboard/atendimento" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Atendimento</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-calendar-check"></i><span class="hide-menu">Agenda</span></a></li>

                            <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="<?= base_url(); ?>usuario" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Usuários </span></a></li>
                                    <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>
                                    <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>
                                    <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
                                    <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>
                                </ul>
                            </li> -->

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
                            <h3 class="page-title">Atendimento</h3>
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
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form class="form-horizontal" action="" method="">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <div class="form-group row col-md-12">
                                            <label class="col-md-12"><h5>Já Fez Algum Curso Pela CRM?</h5></label>                                       
                                            <div class=" row col-md-8">
                                                <div class="custom-control custom-radio col-md-3 row">
                                                    <input type="radio" class="custom-control-input" id="radio_curso_sim" name="radio_curso" required>
                                                    <label class="custom-control-label" for="radio_curso_sim">Sim</label>
                                                </div>                              
                                                <div class="custom-control custom-radio col-md-3 row">
                                                    <input type="radio" class="custom-control-input" id="radio_curso_nao" name="radio_curso" required>
                                                    <label class="custom-control-label" for="radio_curso_nao">Não</label>
                                                </div>                                

                                                <div class="row col-md-5">
                                                    <label for="qual_curso" class="col-sm-3 text-right control-label col-form-label">Qual:</label>
                                                    <div class="form-group col-md-7">
                                                        <input class="form-control" type="text" name="qual_curso" value="" id="qual_curso"/>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                    </div> 

                                    <div class="form-group row col-md-12">
                                        <label class="col-md-9 m-t-7"><h5>Já Recebeu Algum Atendimento Pela Equipe Técnica da CRM?</h5></label>                                    
                                        <div class="col-md-4 row"> 
                                            <label for="tipo_atendimento" class="col-sm-3 text-right control-label col-form-label">Qual:</label>
                                            <select class="select2 form-control custom-select" name="tipo_atendimento" id="tipo_atendimento" style="width: 50%; height:36px;">
                                                <option>---</option>                                            
                                                <option value="SS">Serviço Social</option>
                                                <option value="PS">Psicológico</option>
                                                <option value="JU">Jurídico</option>                              
                                            </select> 

                                        </div>
                                        <div class="row col-md-5">
                                            <label for="ano_atendimento" class="col-sm-3 text-right control-label col-form-label">Qual Ano:</label>
                                            <div class="form-group col-md-4">
                                                <input class="form-control" type="number" name="ano_atendimento" value="" id="ano_atendimento"/>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group row col-md-12">
                                        <label class="col-md-9 m-t-7"><h5>Autor Da Violência</h5></label>                                    
                                        <div class="form-group col-md-4 row">       
                                            <label for="vinculo" class="col-sm-3 text-right control-label col-form-label">Vínculo:</label>
                                            <select class="select2 form-control custom-select" name="vinculo" id="vinculo" style="width: 50%; height:36px;">
                                                <option>---</option>                                            
                                                <option value="CP">Companheiro</option>
                                                <option value="IR">Irmão</option>
                                                <option value="VZ">Vizinho</option>                              
                                            </select> 
                                        </div>
                                        <div class="form-group row col-md-4">
                                            <label for="vinculo" class="col-sm-3 text-right control-label col-form-label">Outro:</label>
                                            <div class="form-group col-md-7">
                                                <input class="form-control" type="text" name="vinculo" value="" id="vinculo"/>
                                            </div>
                                        </div>                                       
                                        <div class="form-group col-md-4 row">       
                                            <label for="tipo_viol" class="col-sm-6 text-right control-label col-form-label">Tipo de Violência:</label>
                                            <select class="select2 form-control custom-select" name="tipo_viol" id="tipo_viol" style="width: 50%; height:36px;">
                                                <option>---</option>                                            
                                                <option value="FS">Física</option>
                                                <option value="PS">Psicológica</option>
                                                <option value="FN">Financeira</option>                              
                                            </select>
                                        </div>                                    
                                    </div>
                                    <div class="form-group row col-md-12">
                                        <label class="col-md-9 m-t-7"><h5>Principais Quadros Clínicos Apresentados/Diagnóstico</h5></label>                                    
                                        <div class="col-md-4 row"> 
                                            <label for="quadro_clinico" class="col-sm-3 text-right control-label col-form-label">Qual:</label>
                                            <select class="select2 form-control custom-select" name="quadro_clinico" id="quadro_clinico" style="width: 50%; height:36px;">
                                                <option>---</option>                                            
                                                <option value="DP">Depressão</option>                                                                             
                                            </select> 
                                        </div>
                                        <div class="row col-md-5">
                                            <label for="quadro_clinico" class="col-sm-3 text-right control-label col-form-label">Outro:</label>
                                            <div class="form-group col-md-8">
                                                <input class="form-control" type="text" name="quadro_clinico" value="" id="quadro_clinico"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <label for="desc_caso" class="text-right control-label col-form-label"><h5>Descriçao do Caso e Informações Relevantes Colhidas Durante a Escuta:</h5></label> 
                                                    <!-- Create the editor container -->                                                   
                                                    <div id="editor" style="height: 300px;">                                                                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-success">Salvar</button>
                                            <button type="reset" class="btn btn-danger">Cancelar</button>
                                        </div>                                        
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Single Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Multiple Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM" selected>New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD" selected>South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation1">First One</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                            <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                            <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Forms Control</h4>
                                <div class="form-group">
                                    <label for="hue-demo">Hue</label>
                                    <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="#ff6161">
                                </div>
                                <div class="form-group">
                                    <label for="position-bottom-left">Bottom left (default)</label>
                                    <input type="text" id="position-bottom-left" class="form-control demo" data-position="bottom left" value="#0088cc">
                                </div>
                                <div class="form-group">
                                    <label for="position-top-right">Top right</label>
                                    <input type="text" id="position-top-right" class="form-control demo" data-position="top right" value="#0088cc">
                                </div>
                                <label>Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <label class="m-t-15">Autoclose Datepicker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="submit" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Tooltip Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" data-toggle="tooltip" title="A Tooltip for the input !" class="form-control" id="validationDefault05" placeholder="Hover For tooltip" required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Type Ahead Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control" placeholder="Type here for auto complete.." required>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Prepended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">#</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Prepend" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span>Appended Input</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span class="text-success">Input with Sccess</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-valid" id="validationServer01">
                                        <div class="valid-feedback">
                                            Woohoo!
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-lg-4 col-md-12 text-right">
                                        <span class="text-danger">Input with Error</span>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <input type="text" class="form-control is-invalid" id="validationServer01">
                                        <div class="invalid-feedback">
                                            Please correct the error
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control" placeholder="col-md-12">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-11">
                                        <input type="text" class="form-control" placeholder="col-md-11">
                                    </div>
                                    <div class="col-lg-1 p-l-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="col-md-9">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="col-md-8">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="col-md-5">
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" placeholder="col-md-7">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                    <div class="col-lg-1 p-l-0">
                                        <input type="text" class="form-control" placeholder="col-md-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quill Editor</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
