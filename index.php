<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'conf/_head.php'; ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="content_preloaded">
  <img src="assets/img/ajat-white-round.png" class="img_preloaded animated pulse infinite" />
  <div class="container">
    <div class="circle0"></div>
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
  </div>
</div>
<hidden-component id="content_loadsed">
    <?php include "views/_nav.php";?>

    <!-- Intro Section -->
    <header id="intro" class="intro-section animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="logo" src="assets/img/ajat-white-round.png" />
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
              <img src="assets/img/servicos.png" class="img-services" />
            </div>
        </div>
      </div>
    </section>

    <section id="team" class="team-section">
        <div class="container container-team">
            <div class="row">
              <div class="col-md-4 display-landscape d-left">
                <img src="assets/img/alcides.jpg" class="team-profile" />
                <div class="nick-name">
                  Alcides Junior
                </div>
                <div class="staff-description">
                  <p>Desenvolvedor back-end</p>
                    <!-- <br>Amante das linguagens PHP e Ruby.</p> -->
                </div>
              </div>
              <div class="col-md-4 display-landscape d-middle">
                <img src="assets/img/amanda.jpg" class="team-profile" />
                <div class="nick-name">
                  Amanda Tavares
                </div>
                <div class="staff-description">
                  <p>Desenvolvedor front-end</p>
                </div>
              </div>
              <div class="col-md-4  display-landscape d-right">
                <img src="assets/img/weiby.jpg" class="team-profile" />
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
      <div class="snackbar" id="msg_contact"></div>

        <div class="container container-contact">
          <div class="center-div">
            <div class="img">
              <img src="assets/img/ajat-loader.gif" />
              <br><b>Enviando...</b>
            </div>
          </div>
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
                  <input type="text" id="nome" class="form-control validate-me" placeholder="Nome">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="email" id="email" class="form-control validate-me" placeholder="E-mail">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <input type="tel" id="telefone" class="form-control validate-me" placeholder="Telefone">
                </div>
              </div>
            </div><!-- fim coluna 1-->
            <div class="col-lg-4 ">
              <div class="row">
                <div class="col-lg-12">
                  <textarea name="name" id="mensagem" placeholder="Mensagem" class="form-control validate-me" rows="8" cols="40"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <button type="button" name="button" id="btn_enviar" class="btn btn-block btn-primary btn-enviar">Enviar</button>
            </div>
          </div>
        </div>
    </section>
</hidden-component>

    <!-- <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p> -->

    <?php include 'conf/_scripts.php'; ?>

</body>

</html>
