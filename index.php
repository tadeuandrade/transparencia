
<?php
include("./layout_base/head.php");
?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Trabalhando com eficiência<br>e <span>Transparência</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Iniciar</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/hospital.png" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Objetivos</h2>
				<ul>
				<li><h3>Prestação de contas</h3></li>
				<li><h3>Atos de gestão</h3></li>
				<li><h3>Informações Institucionais</h></li>
				</ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Dados</h3>
          <p>Informações contabéis</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-stats-bars" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="./despesa.php">Despesas</a></h4>
              <p class="description">Encontre aqui todas despesas referente a infraestrutura da instituição</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-android-person" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="./pessoal.php">Pessoal</a></h4>
              <p class="description">Encontre aqui todas despesas referente a pessoal</p>
            </div>
          </div>

		  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-cash" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=".\receita.php">Receita</a></h4>
              <p class="description">Encontre aqui todas Receitas<br><br></p>
            </div>
          </div>

		   <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-pulse" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=".\operacional.php">Operacional</a></h4>
              <p class="description">Encontre aqui números operacionais<br><br><br></p>
            </div>
          </div>

		  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="icofont-company" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=".\operacional.php">Institucional</a></h4>
              <p class="description">Encontre aqui o organograma e informações dos setores<br><br></p>
            </div>
          </div>

		  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="icofont-presentation-alt" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href=".\atos.php">Atos de gestão</a></h4>
              <p class="description">Encontre aqui todas as resoluções e deliberações<br><br></p>
            </div>
          </div>





        </div>
      </div>

    </section>

  </main>

  
<?php
include("./layout_base/footer.php");
?>
