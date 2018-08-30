<!DOCTYPE html>
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
                   <!-- <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Esqueceu a Senha?</a></span> -->
                    <span class="pull-right"><button class="btn btn-success" type="submit">Entrar</button></span>
                </div>
            </form>
            <!--
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
            -->
        </div>

        <script src="<?= base_url(); ?>assets/matrix/js/jquery.min.js"></script>  
        <script src="<?= base_url(); ?>assets/matrix/js/matrix.login.js"></script> 
    </body>

</html>
