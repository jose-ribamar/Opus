<?php

include_once('../conexao_banco_dados/conexao.php');

// if(!empty($_GET['search'])){
//   $data = $_GET['search'];
//   $sql = mysqli_query($ligar, "UPDATE 'tb_vagas' SET 'id_vagas' = '$data' ");

// }else{
//   $sql = mysqli_query($ligar, "SELECT * FROM tb_vagas ORDER BY id DESC");
  
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Opus - Vagas em Destaque</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
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
     <link rel="stylesheet" href="../../css/https://icons.getbootstrap.com/.">
     <link rel="stylesheet" href="css/list.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/templatemo-digital-trend.css">

    

     <style>
    /* Animação de rotação de cor */
    

    /* Estilo do botão */
    .button {
      color: blue;
        background-color: #3357ff; /* Cor de fundo */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        position: relative; /* Para animação de rotação */
        overflow: hidden; /* Para esconder a cor que se move além do botão */
    }

    /* Animação de rotação */
    .button::before {
        content: '';
        color: blue;
        position: absolute;
        top: 0;
        left: -50%;
        width: 200%;
        height: 100%;
        background: linear-gradient(to right, transparent, #fff, transparent);
        animation: spin 2s linear infinite; /* Duração e repetição da animação */
    }
</style>
<style>
    /* Animação do pontinho percorrendo a borda */
    @keyframes pulse {
        0% {
            transform: translateX(-50%) translateY(-50%) scale(0);
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        100% {
            transform: translateX(-50%) translateY(-50%) scale(1.5);
            opacity: 0;
        }
    }

    /* Estilo do botão */
    .button {
        background-color: #4CAF50; /* Cor de fundo */
        color: blue;
        border: none;
        color: #3357ff; /* Azul escuro */
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        position: relative; /* Para animação do pontinho */
        overflow: hidden; /* Para esconder o pontinho além do botão */
    }

    /* Animação do pontinho */
    .button::before {
        content: '';
        color: blue;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 10px;
        height: 10px;
        background-color: #3498db; /* Cor do pontinho */
        border-radius: 50%;
        animation: pulse 2s linear infinite; /* Duração e repetição da animação */
    }

    /* Animação de rotação de cor */
    

    /* Estilo do botão */
    .button {

        background-color: #3498ff; /* Cor de fundo */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        position: relative; /* Para animação de rotação */
        overflow: hidden; /* Para esconder a cor que se move além do botão */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra escura */
    }

    /* Animação de rotação */
    .button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 200%;
        height: 100%;
        background: linear-gradient(to right, transparent, #fff, transparent);
        animation: spin 2s linear infinite; /* Duração e repetição da animação */
    }

    /* Efeito de brilho */
    .button::after {
        content: '';
        position: absolute;
        top: -100%;
        left: -100%;
        width: 300%;
        height: 300%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.5) 0%, transparent 80%); /* Luz */
        animation: shine 2s linear infinite; /* Duração e repetição da animação */
    }

    /* Animação de brilho */
    @keyframes shine {
        to {
            top: 150%;
            left: 150%;
        }
    }
</style>



</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
            <a class="navbar-brand" href="../logar/grupo_usuarios.php">
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
                        <a href="../about/descricao.html" class="nav-link">Sobre a Plataforma</a>
                    </li>
                    <li class="nav-item">
                        <a href="vagas_para_login.php#project" class="nav-link">Vagas em Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog.php" class="nav-link active">Procura Por Oportunidades</a>
                    </li>
                    <li class="nav-item">
                        <a href="../logar/grupo_usuarios.php" class="nav-link contact">Entrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- BLOG -->
     <section class="blog section-padding">
          <div class="container">
               <div class="row">
                 <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                      <h1 class="mb-4" data-aos="fade-up">Vagas Disponíveis Para Candidatos</h1>
                  </div>
 
<!-- button -->
            <form action="">
                
            <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
                  <!-- <a class="link-secondary" href="#" aria-label="Busca"> -->
                  <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button> <br>
                  <!-- </a> -->
              
<!-- button --></form>



    
    <br>
    <table class="table">
     
        <?php
        if (!isset($_GET['busca'])) {
            ?>
          <!--Table-->
          <table class="table">
                  <?php
        
            $sql_consulta=mysqli_query($ligar, "SELECT * FROM tb_vagas");
            

            // usuario
           

            while($dados=mysqli_fetch_array($sql_consulta)){
        ?>

            <tbody>
                      <tr class="table-info">
                       
                        <td><?= $dados[2] ?> </td>
                        <td>
                          <form action="info_vagas.php" method="POST" class="contact-form" data-aos="fade-up"  role="form">
                       
                        
                        <div class="row">
                            <input type="hidden" name="codigo"  value="<?= $dados['id_vagas']?>">
                        </div>

                        

                        <div class="nav-item">
                            <button type="submit" class="button" name="submit" name="codigo" id="trap" >MAIS INFORMAÇÔES</button>
                        </div>
                      </form>
                    </td>
                        <td><a  href="../logar/grupo_usuarios.php?codigo=<?=$dados['id_vagas'] ?>"   id="editar">Realizar login</td>
                        <td>
                         
                    </td>

                
                        <!--  -->
                      </tr>
                    
                    </tbody>


        <?php
            }
        ?>
        <!--  -->
        <!--  -->
        <?php
        } else {
            $pesquisa = $ligar->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * FROM tb_vagas  WHERE id_vagas LIKE '%$pesquisa%'  OR titulo LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%'";
            $sql_query = $ligar->query($sql_code) or die("ERRO ao consultar! " . $ligar->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {

                  
                    ?>
                    
                    
                    <tbody>
                      <tr class="table-info">

                        
                        <td><?php echo $dados['titulo']; ?></td>
                       
                        <td><a  href="info_vagas.php?codigo=<?=$dados['id_vagas'] ?>"   id="editar">Mais infomações</td>
                        <td><a  href="../logar/grupo_usuarios.php?codi=<?=$dados['id_vagas'] ?>"   id="editar">Realizar login</td>
                      </tr>

                    </tbody>           
                 
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
            
                <div class="table-responsive">
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
                 
                
                </div> 

                   

                    <div class="col-lg-7 col-md-7 col-12 mb-4" id="project">
                      <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                        <img src="../../images/blog/02.webp" class="img-fluid" alt="blog header">

                        <div class="blog-header-info">
                          <h4 class="blog-category text-info">Programador Front-End</h4>

                          <h3><a href="../vagas/detalhes.html">Programador front-end senior</a></h3>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 mb-4">
                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="../../images/blog/01.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-danger">Moderador</h4>

                          <h3><a href="../vagas/detalhes.html">Venha ser uma pateta no Huestation, canal 5 estrelas</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar py-4 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="../../images/blog/05.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-success">Ajudante de Pedreiro (vagas limitadas)</h4>

                          <h3><a href="../vagas/detalhes.html">Ajude a obra a continuar</a></h3>
                        </div>
                      </div>

                      <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="../../images/test/01.jpg" class="img-fluid" alt="blog">

                        <div class="blog-info">
                          <h4 class="blog-category text-primary">Motoboy (Entregador de Pizza) </h4>

                          <h3><a href="../vagas/detalhes.html">Seja um entregador</a></h3>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                      <img src="../../images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                    </div>

                    <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                      <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                      <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                      <form action="#" method="get" enctype="multipart/form-data">
                      <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                        <input name="email" type="email" class="form-control" 
                        		id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                        <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                      </div>

                      <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                        <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                        <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                      </div>

                        <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                      </form>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Conectando  <strong>Você</strong> Ao Futuro.</h1>
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
              Centro - Pedro II - PI, Brasil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2022  Grupo Opus
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: Grup</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
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

<!-- <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'blog.php?search='+search.value;
    }
</script> -->
<!-- <?php

//include_once('../conexao_banco_dados/conexao.php');

// if(!empty($_GET['search'])){
//   $data = $_GET['search'];
//   $sql = mysqli_query($ligar, "UPDATE 'tb_vagas' SET 'id_vagas' = '$data' ");

// }else{
//   $sql = mysqli_query($ligar, "SELECT * FROM tb_vagas ORDER BY id DESC");
  
// }
//$data  = $_GET["busca"];
//$sql = "SELECT * FROM tb_vagas WHERE id_vagas LIKE '%$data%' or titulo LIKE '%$data%' or descricao LIKE '%$data%' ";

//?> -->

