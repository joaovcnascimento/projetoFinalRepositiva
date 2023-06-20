<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="João Caldeira">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

    <title>Formulário de Contato</title>
</head>

<body>

    <div class="container mx-auto bg-light mt-1 w-90">
        <header class="row">
            <!-- oculte a barra de acessibilidade -->
            <div id="barra_acessibilidade" class="col-12 d-none">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>             
            </div>

            <!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
            <div class="col-sm-3">
                <img src="images/logo.png" alt="Logotipo da empresa com dois triângulos sobrepostos." width="150">
            </div>

            <div class="col-sm-9 mt-5">
                <h1>Aulas de Skateboard</h1>
            </div>
        </header>

        <section class="row">
            <div class="col-12 d-none">
                <!-- oculte o header abaixo 
          consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
                <h2 id="menu">Menu</h2>
            </div>
            <div class="col-12 ">
                <!-- torne o menu responsivo, conforme o exemplo
          consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
                      <span class="navbar-toggler-icon"></span>
                    </button>                  
                    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link text-muted" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-muted" href="QuemSomos.php">Quem Somos</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link text-muted" href="Projetos.php">Projetos</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link text-muted" href="Contato.php">Contato</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            <div class="col-12 mt-2">
                <h2 id="formulario">Entre em contato para uma aula experimental</h2>
                <!-- torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/ -->
                <form action="#" method="post" class="needs-validation" novalidate>
                    <fieldset>
                        <legend><small>Informe seus dados abaixo para que possamos entrar em contato</small></legend>
                        <br>
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" required name="nome" id="nome" placeholder="Digite seu nome">
                                <div class="invalid-feedback">
                                    Campo nome obrigatório
                                </div>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail *</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" required maxlength="45" name="email" id="email" placeholder="Digite seu e-mail">
                                <div class="invalid-feedback">
                                    Campo e-mail obrigatório
                                </div>   
                            </div>                                                   
                        </div>
                        <div class="form-group row">
                            <label for="cep" class="col-sm-2 col-form-label col-form-label-sm">CEP * <br><small>digite o CEP para o endereço ser preenchido</small></label>
                            <div class="col-sm-10">
                                <input name="cep" class="form-control form-control-sm" required type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="Digite o CEP"/>
                                <div class="invalid-feedback">
                                    Campo CEP obrigatório
                                </div>   
                            </div>                                                   
                        </div>

                        <div class="form-group row">
                            <label for="rua" class="col-sm-2 col-form-label col-form-label-sm">Rua *</label>
                            <div class="col-sm-10">
                                <input name="rua" class="form-control form-control-sm" required type="text" id="rua" size="60" placeholder="Digite a rua" />
                                <div class="invalid-feedback">
                                    Campo Rua obrigatório
                                </div>   
                            </div>                                                   
                        </div>

                        <div class="form-group row">
                            <label for="bairro" class="col-sm-2 col-form-label col-form-label-sm">Bairro *</label>
                            <div class="col-sm-10">
                                <input name="bairro" class="form-control form-control-sm" required  type="text" id="bairro" size="40" placeholder="Digite o bairro"/>
                                <div class="invalid-feedback">
                                    Campo Bairro obrigatório
                                </div>   
                            </div>                                                   
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-sm-2 col-form-label col-form-label-sm">Cidade *</label>
                            <div class="col-sm-10">
                                <input name="cidade" class="form-control form-control-sm" required  type="text" id="cidade" size="40" placeholder="Digite a cidade"/>
                                <div class="invalid-feedback">
                                    Campo Cidade obrigatório
                                </div>   
                            </div>                                                   
                        </div>
                        <div class="form-group row">
                            <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem *</label>
                            <div class="col-sm-10">
                                <textarea name="mensagem" class="form-control form-control-sm" id="mensagem" required rows="5"></textarea>
                                <div class="invalid-feedback">
                                    Campo mensagem obrigatório
                                </div>   
                                <input type="submit" class="btn btn-primary my-1" value="Enviar">
                                <p><small>* Campos obrigatórios</small></p>
                            </div>                            
                        </div>
                        
                    </fieldset>
                </form>
            </div>
        </section>

        <footer class="row">
            <div class="col-12">
                <p>Copyright © 2023</p>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script src="js/scripts"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>

    <script>
        // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
            var forms = document.getElementsByClassName('needs-validation');
            // Faz um loop neles e evita o envio
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>

</body>

</html>