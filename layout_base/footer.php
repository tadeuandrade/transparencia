  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Contato</h4>
                  <p> Rua Gentios, 1420 <br> Belo Horizonte, MG<br> Brasil <br>
                    <strong>Telefone:</strong> 31 3330 9100<br>
                  </p>
                </div>
                <div class="social-links">
                 <a href="https://twitter.com/MarioPenna" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/InstitutoMarioPenna" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/user/InstitutoMarioPenna" class="youtube"><i class="icofont-brand-youtube"></i></a>
          <a href="https://www.instagram.com/institutomariopenna/" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form">
              <h4>ENVIE-NOS UMA MENSAGEM</h4>
              <p>Envie dúvidas ou sujestôes</p>
              <form action="enviar_email.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                    <?php
                        $url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";              
                    ?>                    
                    <input type="hidden" name="url" id="url" value="".<?php echo $url_atual ?>."" />
                  <div class="validation"></div>
                
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mensagem" id="mensagem" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                  <div class="validation"></div>
                </div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                  
                  
                <div class="text-center"><button type="submit" title="Enviar Mensagem">Enviar Mensagem</button></div>
                  
                  
                  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  </body>

</html>