<!--<!DOCTYPE html>
<html lang="en">

    <head>
        <title>SGAP</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/matrix/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/matrix/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/matrix/css/matrix-login.css" />
        <link href="<?= base_url(); ?>assets/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form class="form-vertical form-signin" method="post" action="<?= base_url(); ?>dashboard/logar">
                <div class="control-group normal_text"> <h3><img src="<?= base_url(); ?>assets/matrix/logo.png" alt="Logo" width="210" height="185" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" id="inputEmail" placeholder="Usuário" autofocus/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="senha" id="inputPassword" placeholder="Senha" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Esqueceu a Senha?</a></span> 
                    <span class="pull-right"><button class="btn btn-success" type="submit">Entrar</button></span>
                </div>
            </form>
            
             <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Entre com seu e-mail e siga as instruções para recuperar a senha.</p>

                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="e-mail" />
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Voltar ao login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Recuperar</a></span>
                </div>
            </form> 
            
        </div>

        <script src="<?= base_url(); ?>assets/matrix/js/jquery.min.js"></script>  
        <script src="<?= base_url(); ?>assets/matrix/js/matrix.login.js"></script> 
    </body>

</html>-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="<?= base_url() ?>assets/Login_v1/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/Login_v1/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100">

                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?= base_url() ?>assets/Login_v1/images/img-01.png" width="800" height="300"  alt="IMG">
                    </div>

                    <form class="login100-form validate-form" action="<?= base_url() ?>dashboard/logar" method="post">
                        <span class="login100-form-title">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Insira Um E-mail Válido: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Insira a Senha">
                            <input class="input100" type="password" name="senha" placeholder="Senha">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Entrar
                            </button>
                        </div>
                        <br>
                        <div class="col-12">
                            <?php
                            if ($key[0] == '1') {
                                echo '<div class="container-login100-form-btn">
                                         <div class="alert alert-danger" role="alert">
                                             Email ou Senha Inválidos!
                                         </div>
                                      </div>';
                            }
                            if ($key[0] == '2') {
                                
                            }
                            ?>
                        </div>
                        <!--                        <div class="text-center p-t-12">
                                                    <span class="txt1">
                                                        Forgot
                                                    </span>
                                                    <a class="txt2" href="#">
                                                        Username / Password?
                                                    </a>
                                                </div>-->

                        <div class="text-center p-t-136">
                            <a class="txt2" href="#">
                                <!--                               
                                                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>-->
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->	
        <script src="<?= base_url() ?>assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/Login_v1/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url() ?>assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/Login_v1/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="<?= base_url() ?>assets/Login_v1/js/main.js"></script>

        <!--Custom JavaScript -->
        <script type="text/javascript" src="<?= base_url(); ?>assets/javascriptcustom.js"></script>

    </body>
</html>
