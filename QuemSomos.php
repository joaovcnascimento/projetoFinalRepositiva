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

    <title>Aulas de Skateboard</title>
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
            <div class="col-12 mt-2 text-center">
                <h2>Quem somos</h2>
                <h6 >Temos os melhores professores para lhe ensinar a realizar seu sonho de andar de skate.</h6>
                <br><br>
                <p>
                  É com satisfação que apresento a <strong>Thrasher</strong> uma empresa com mais de 10 anos de experiência no mercado de ensino de skate. Ao longo dessa década, temos sido reconhecidos como especialistas em proporcionar aulas de skate de alta qualidade para jovens, adultos e crianças.
                </p>
                <p>
                Nossa missão é oferecer um ambiente seguro e estimulante, onde nossos alunos possam aprender a andar de skate de forma progressiva e divertida. Contamos com instrutores experientes e apaixonados pelo skate, que são treinados para adaptar as técnicas de ensino de acordo com a faixa etária e o nível de habilidade de cada aluno.
                </p>
                <p>
                Nosso programa abrangente aborda todos os fundamentos essenciais para quem deseja aprender a andar de skate, desde o equilíbrio básico até a execução de manobras avançadas. Além disso, investimos em equipamentos de qualidade e segurança, visando proporcionar uma experiência positiva e gratificante para todos os nossos alunos.
                </p>
                <p>
                Estamos entusiasmados em compartilhar nosso conhecimento e paixão pelo skate com você. Aprender a andar de skate é uma jornada emocionante, que promove não apenas a habilidade física, mas também valores como perseverança, confiança e trabalho em equipe. Estamos aqui para apoiá-lo em cada passo do caminho, proporcionando um ambiente acolhedor e profissional para o seu crescimento e diversão.
                </p>
            </div>
            <div class="col-12">
              <div class="card bg-dark text-white">
                <img class="card-img" src="images/imgQuemSomos.png" alt="Card image">
              </div>
            </div>
        </section>

        <footer class="row">
            <div class="col-12">
                <p>Copyright © 2023</p>
            </div>
        </footer>
    </div>

    <!-- JS -->
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