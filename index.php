<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="description" content="AJAT Desenvolvimento trabalha com soluções web como sites e sistemas web. Um dos nossos diferenciais no mercado é que o cliente participa de cada etapa do desenvolvimento, possibilitando-o ter contato com o seu produto de forma direta.">
    <meta name="keywords" content="ajat, ajat desenvolvimento, desenvolvimento de sites, sistemas para computador, soluções web, construção de sites">
    <meta name="author" content="AJAT Desenvolvimento">

    <title>New AJAT</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <?php include "includes/menu.include.php";?>

    <!-- Intro Section -->
    <header id="intro" class="intro-section animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="logo" src="img/ajat-white-round.png" />
                    <div class="header-text">
                      <h2 class="typed"><i>A melhor maneira de prever o futuro é criá-lo.</i>
                        <span class="author"> - Dr. Forrest C. Shaklee<span></h2>
                      <span class="typed-cursor">|</span>
                    </div>
                    <a class="btn btn-transparent btn-round page-scroll btn-scroll" href="#about">
                        <i class="fa fa-angle-down fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container container-services">
          <div class="row block-main-services">
            <div class="col-lg-4 block-text-services">
              <div class="ajat-text">Conheça os nossos</div>
              <div class="ajat-emphasis-text animated bounceInLeft">SERVIÇOS</div>
              <div class="ajat-text">ofertados!</div>
            </div>
            <div class="col-lg-8 block-image-services">
              <img src="img/servicos.png" class="img-services" />
            </div>
        </div>
      </div>
    </section>

    <section id="team" class="team-section">
        <div class="container container-team">
            <div class="row">
              <div class="col-md-4 display-landscape d-left">
                <img src="img/alcides.jpg" class="team-profile" />
                <div class="nick-name">
                  Alcides Junior
                </div>
                <div class="staff-description">
                  <p>Desenvolvedor back-end</p>
                    <!-- <br>Amante das linguagens PHP e Ruby.</p> -->
                </div>
              </div>
              <div class="col-md-4 display-landscape d-middle">
                <img src="img/amanda.jpg" class="team-profile" />
                <div class="nick-name">
                  Amanda Tavares
                </div>
                <div class="staff-description">
                  <p>Desenvolvedor front-end</p>
                </div>
              </div>
              <div class="col-md-4  display-landscape d-right">
                <img src="img/weiby.jpg" class="team-profile" />
                <div class="nick-name">
                  Lucas Weiby
                </div>
                <div class="staff-description">
                  <p>Designer</p>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container container-contact">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="well well-sm">
                      <h2 class="h2-contato">
                        Contato
                      </h2>
                    </div>
                </div>
              </div>
          <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" class="form-control" placeholder="Nome">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="email" class="form-control" placeholder="E-mail">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="tel" class="form-control" placeholder="Telefone">
                </div>
              </div>
            </div><!-- fim coluna 1-->
            <div class="col-lg-4 ">
              <div class="row">
                <div class="col-lg-12">
                  <textarea name="name" placeholder="Mensagem" class="form-control" rows="8" cols="40"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <button type="button" name="button" class="btn btn-block btn-primary btn-enviar">Enviar</button>
            </div>
          </div>
        </div>
    </section>

    <!-- <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p> -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/typewriter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
