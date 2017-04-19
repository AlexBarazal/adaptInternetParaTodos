<!DOCTYPE html>i
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>

</head>

    <body id="page-top" class="index">

       <?php include_once "navegacao.php" ?>


     <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <br>
                <h3 class="text-center">Login</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="open.php" method="post" name="login" id="loginForm" novalidate>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">Email</label>
                                    <!-- Este campo vai pegar o nome do cliente logado-->
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" maxlength="100" required data-validation-required-message="Por Favor! Digite seu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="nomePastaArquivo" maxlength="80"required data-validation-required-message="Por Favor, Digite sua senha.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" name="login" value="Login" class="btn btn-success btn-lg">Entrar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Esquecia Senha</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once "rodape.php" ?>
    </body>
</html>


