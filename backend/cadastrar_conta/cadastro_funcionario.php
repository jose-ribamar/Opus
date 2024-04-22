<!DOCTYPE html>
<html lang="en">
<head>

     <title>Opus - Login</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <link rel="icon" href="../../images/01.png">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../../css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/font-awesome.min.css">
     <link rel="stylesheet" href="../../css/aos.css">
     <link rel="stylesheet" href="../../css/owl.carousel.min.css">
     <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="../../index.html">
              <i class="fa fa-line-chart"></i>
              Opus
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <ul class="navbar-nav ml-auto">
                   
                        <a href="../logar/grupo_usuarios.php" class="nav-link contact">Voltar</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Ei! vamos fazer sua primeira <strong>conta </strong>

                      
                    
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    </div>
               </div>
          </div>
     </section>
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
<!--  -->
<!--  -->
<!--         Cadastro de usuário            -->
<!-- pega os dados de cadastro e lava ate a cpnexao atraves do metodo POST -->
                    
                      <form action="cadastro_funcionario_TBL.php" method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="txt_nome" placeholder="Nome Completo">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="txt_usuario" placeholder="nome de usuário">
                          
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="password" class="form-control" name="txt_senha" placeholder="Senha">
                          
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="txt_email" placeholder="Email">
                          </div>


                          <div class="col-lg-6 col-12">
                            Sexo:
                            <select name="txt_sexo" >
                              <option values="Masculino"> Masculino</option>
                              <option values="Feminino"> Feminino</option>
                              <option values="Outros"> Outros</option>
                            </select>
                          </div>

                          <!-- <div class="col-lg-6 col-12">
                            tipo de conta:
                            <select  name="txt_nivel" >
                              <option  type="hidden" values="Funcionario"> Funcionário </option>
                            </select>
                           -->
                          
                          
                            <input type="hidden" class="form-control" name="txt_nivel" value="Funcionário">
                          
                          <!-- O nível 1, fundamental incompleto, o nível 2, fundamental completo e médio incompleto, 
                            o nível 3, ensino médio completo ou superior incompleto, o nível 4, nível superior completo e 
                            o nível 5 compreende pessoas com alguma pós -->
                          
                          <div class="col-lg-6 col-12">
                            Escolaridade:
                            <select name="txt_escolar" >
                              <option values="fundamental incompleto"> fundamental incompleto</option>
                              <option values="fundamental completo e médio incompleto"> fundamental completo e médio incompleto</option>
                              <option values="médio completo ou superior incompleto"> médio completo ou superior incompleto</option>
                              <option values="superior completo"> superior completo</option>
                              <option values="Pós-Graduação"> Pós-Graduação</option>
                             
                            </select>
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="txt_descricao" placeholder="Ocupação"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="Enviar">Cadastra</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
          <form method="POST" action="login_usu.php">
        <center>
        <p>  <a href="../logar/grupo_usuarios.php"><strong>Logar</strong></a></p>
    </form>

</center> 
     </section>

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->

    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +99 080 070 4224
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2022 Grupo Opus
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: Grupo Opus</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Ajude nosso Projeto!!</a></li>
              <li><a href="#">Estude no Ifpi</a></li>
              <li><a href="#">Reclame aqui</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="../../js/jquery.min.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/aos.js"></script>
     <script src="../../js/owl.carousel.min.js"></script>
     <script src="../../js/custom.js"></script>

</body>
</html>