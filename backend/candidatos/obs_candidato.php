 
    
<?php

include_once('../conexao_banco_dados/conexao.php');

// pega os valores usuario e senha, para acessar o banco de dado
// caso ja tenha uma conta
$usuario = $_POST['id2'];


$sql_logar_fun=mysqli_query($ligar, "SELECT *FROM tb_cadastrado WHERE id_empregador = '$usuario'");



    // header('location:principal.php');
    ?>
<?php

include_once('../conexao_banco_dados/conexao.php');



?>
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
     <link rel="stylesheet" href="../../css/list.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/templatemo-digital-trend.css">
<!-- estilo da tabela -->




</head>
<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="../about/descricao.html" class="nav-link smoothScroll">Sobre a Plataforma</a>
                    </li>
                    <li class="nav-item">
                        <a href="../vagas/vagas_para_login.php" class="nav-link smoothScroll">Vagas em Destaques</a>
                    </li>
                 
                
                    </li>
                    <!-- <li class="nav-item">
                        <a href="index_usu.php" class="nav-link contact">Voltar</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
     <!-- CONTACT -->
     
        
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
<!--  -->
<!--  -->
<!--         Cadastro de usuário            -->


<!-- <center>

    <form method="POST" action="login_usu.php">
        Usuário: <br>
            <input type="text" name="txt_usuario"> <br>
            senha: <br>
            <input type="password" name="txt_senha"> <br>
            <br>
        <input type="submit" value="Entrar"> <br>
        <p> Ainda não tem uma conta? <a href="login.html"><strong>Cadastre-se</strong></a></p>
    </form>

</center> -->
<center>

 <!-- CONTACT -->
 <section class="contact section-padding" >
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Candidatos <strong>  </strong>

                    
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    </div>
               </div>
          </div>
        </section>


<table rules="all" class="table" >

    <thead>
        <tr>
            <th >Nome</th>
            <th>Usuário</th>
            
            <th>Email</th>
            <th>Sexo</th>
            <th>Tipo de vaga</th>
            <th>Escolaridade</th>
            <th>Descrição</th>
            <th colspan="2">Funcionalidades</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $usuario = $_POST['id2'];
            $sql_consulta=mysqli_query($ligar, "SELECT *FROM tb_cadastrado WHERE id_empregador = '$usuario'");
            
            $Total=mysqli_num_rows($sql_consulta);
            while($dados=mysqli_fetch_array($sql_consulta)){

              // usuarios

              $usuarios = $dados['id_usuarios'];

              $sql_consultas=mysqli_query($ligar, "SELECT *FROM tb_usuarios WHERE id = '$usuarios'");
              $dadoss=mysqli_fetch_array($sql_consultas);

              // vagas

              $id_vagas = $dados['id_vagas'];

              $sql_consul1=mysqli_query($ligar, "SELECT *FROM tb_vagas WHERE id_vagas = '$id_vagas'");
              $dad1=mysqli_fetch_array($sql_consul1)
        ?>
            <tr>
                <td> <?= $dadoss[1] ?> </td>
                <td> <?= $dadoss[2] ?> </td>
                 <td> <?= $dadoss[4] ?> </td>
                 <td> <?= $dadoss[5] ?> </td>
                <td> <?= $dad1[2] ?> </td>
                <td> <?= $dadoss[7] ?> </td>
                <td> <?= $dadoss[8] ?> </td>
                <td> entrar em contato</td>
                <td> Observar</td>
                
            </tr>  


        <?php
            }
        ?>

    <tr> 
        <td colspan="6">
            Total: <?= $Total ?> 
        </td> 
    </tr>

    </tbody>



</table>
</center>


<br>
<br>
<br>
<br>


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