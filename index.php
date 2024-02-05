<?php

  require "conn.php";

  $sql = $pdo->query("SELECT * FROM noticias");

  if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  }

?> 



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">

    <link rel="icon" type="image/x-icon" href="imagens/png_litch.png">

    <title>Litch Group </title>
</head>



<body>
<div id="wrapper" class="">
  <div id="segunda">
    <!--Navbar-->
  <div id="navbarr" class="container pt-4 fixed-top">
    <header class="rounded-4 pe-5">
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div id="nav" class="container-fluid">
              <img src="imagens/png_litch.png" id="logo_nav">
              <a class="navbar-brand" href="#carouselExampleCaptions" id="item"><i>Home</i></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" >
                  <a class="nav-link active" aria-current="page" href="#sobre" id="item"><i>Sobre</i></a>
                  <a class="nav-link" href="#integrantes" id="item"><i>Integrantes</i></a>
                  <a class="nav-link" href="#projetos" id="item"><i>Projeto</i></a>
                  <a class="nav-link" href="#container-blog" id="item"><i>Notícias</i></a>
                  <a class="nav-link" href="cadastrar.php" id="item"><i>Cadastrar</i></a>

                  
                </div>
              </div>
            </div>
          </nav>
    </header>
    
  </div>
<!--Navbar-->

<!--Inicio <div id="inicio" class="container pb-5">
              <div class="row" id="pag">
                <div class="col-md-7 align-self-center" id="quero">

                  <i>
                    <div id="box1" class="rounded-5">
                      <center><div id="txt_litch" class="">Litch Group</div></center>
                    </div><br>
                  </i>

                  <div id="txt_inicio">Seja bem-vindo ao nosso site! Conheça aqui um pouco sobre nossa equipe, a Litch Group!</div>
                  <br><br>
                  
                  <center><a href="https://github.com/litchgroup">
                  <button type="button" class="btn btn-lg" id="botao">
                      <div id="txtb"><i>Saiba Mais!</i></div>
                  </button></a> 
                </center><br><br>

                </div>
              
                <div class="col-md-5 align-self-center text-center">
                  <img src="imagens/png_litch.png" id="imglichia" class="">
                </div>
              </div>
              <br><br>
            <center> <div id="linha" class="rounded-4">⠀</div></center>
        </div>-->
        
<!--Inicio--> 
  </div>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">

      <!--
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      -->
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./imagens/img_1.jpg" class="d-block w-100" id="imagem1">
        <div class="carousel-caption d-none d-md-block">
          
          <img src="imagens/logo.licth.png.png" id="imglitch2" class="img-fluid">
          <p id="titulo">Sejam Bem-Vindos ao site da Litch Group!</p>
          <p id="txt_titulo">Conheça mais sobre a equipe e os projetos.</p>
        </div>
      </div>
      <!--
      <div class="carousel-item">
        <img src="./imagens/img.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p id="titulo">Sejam Bem-Vindos ao site da Litch Group!</p>
          <p id="txt_titulo">Conheça mais sobre a equipe e os projetos.</p>
        </div>
      </div>
      
        <div class="carousel-item">
        <img src="./imagens/img.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p id="titulo">Sejam Bem-Vindos ao site da Litch Group!</p>
          <p id="txt_titulo">Conheça mais sobre a equipe e os projetos.</p>
        </div>
      </div>
      -->
      
    </div>

    <!--

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    -->
    

  </div>
  
    


<!--Sobre-->
    <div id="sobre" class="container">
      <div class="container rounded-4" id="nos"> <center><p class="pt-4" id="txt_nos"><i>Quem somos nós?</i></p></center> </div>
        <div class="container pt-5 p-3">
          <div class="row pb-5">
            
            <div class="col-md-7 align-self-center text-center">
              <img src="imagens/logo.licth.png.png" id="imglitch" class="img-fluid">
            </div>

            <div class="col-md-5 align-self-center pe-3">
              <div id="box2" class="rounded-4">
                <h4 id="txt_sobre">A Litch Group é uma equipe de desenvolvimento de softwares e desenvolvimento web composta por 3 estudantes do curso de 
                  Desenvolvimento de Sistemas na ETEC de Registro, e foi criada para a realização do TCC (Trabalho de Conclusão de Curso). 
                </h4>
              </div>
            </div>
          </div>
        </div>
        <br><br><br><br>
            <center> <div id="linha" class="rounded-4">⠀</div></center>
    </div>
<!--Sobre-->

<!--Projetos-->
<div id="projetos" class="container">
  <div class="container rounded-4" id="nos"> <center><p class="pt-4" id="txt_nos"><i>Projetos</i></p></center> </div>
    <div class="container pt-5 p-3 pb-5">
      <div class="row pb-5">
        
        <div class="col-md-5 align-self-center pe-3">
          <div id="box2" class="rounded-4">
            <h4 id="txt_sobre">Como mencionado acima, nossa equipe foi criada em prol do desenvolvimento de nosso TCC, e abaixo, vocês 
              saberão um pouco mais sobre nosso projeto, sua área, seus objetivos etc, segue o fio! 
            </h4>
          </div>

        </div>

        <div class="col-md-7 align-self-center text-center">
          <img src="imagens/pc1.png" id="imgprojetos" class="img-fluid">
        </div>
      </div>
    </div>
    <br><br><br><br>
        <center> <div id="linha" class="rounded-4">⠀</div></center>
</div>
<!--Projetos-->

<!--Nephelium-->
<div id="quarta">
  <div id="nephelium" class="container">
    <div class="container rounded-4" id="nos"> <center><p class="pt-4" id="txt_nos"><i>Nephelium</i></p></center> </div>
      <div class="container pt-5 p-3 ps-5">
        <div class="row pb-5 ps-3 pe-3">
          <div class="col-md-6 align-self-center pe-5">
            <div id="box2" class="rounded-4">
              <h4 id="txt_sobre">Nosso projeto é um aplicativo de celular focado em fretes, ele aproxima pessoas que necessitam realizar 
                transportes e caminhoneiros autônomos que buscam uma frequência de trabalhos. 
              </h4>
            </div>
          </div>
  
          <div class="col-md-5 align-self-center text-center pe-5 ps-5">
            <img src="imagens/logo.nephelium.png.png" id="imgnephelium" class="img-fluid">
          </div>
        </div>
        <br><br>
        <div class="row pb-4 ps-3 pe-3">
           <div class="col-md-5 align-self-center text-center ps-5 pe-5">
            <img src="imagens/caminhao.png" id="imglichia" class="img-fluid">
          </div>
          <div class="col-md-6 align-self-center ps-5 pb-5"><br><br>
            <div id="box2" class="rounded-4">
              <h4 id="txt_sobre">O foco Nephelium é ajudar os caminhoneiros autônomos em sua busca por trabalhos e trazer segurança, bom preço, 
                e boa experiência a quem precisa fazer um transporte. 
              </h4>
            </div>
          </div>
        </div>
      </div>
      <br><br>
          <center> <div id="linha" class="rounded-4">⠀</div></center>
  </div>
</div>

<!--Nephelium-->


<!--Integrantes-->
<div id="integrantes">
  <div class="container" id="integrantes">
    <div class="container rounded-4" id="int"> <center><p class="pt-4 " id="txt_nos"><i>Integrantes</i></p></center> </div><br><br>

    <div class="row row-cols-1 row-cols-md-3 g-4" id="c">
      <div class="col">
        <div class="card h-100 rounded-5" id="card">
          <a href="https://www.instagram.com/_isakramer/">
             <img src="imagens/belica super.png" class="card-img-top rounded-5" id="imgint">
          </a>
         
          <div class="card-body" >

            <h5 class="card-title" id="title">Isabele Kramer,
              17 anos, Cajati.</h5><br>
            <p class="card-text" id="text">Responsável pela parte dos dados do projeto, e pelo back-end. </p>
          </div>
          
        </div>
      </div>
      <div class="col">
        <div class="card h-100 rounded-5" id="card">
          <img src="imagens/guerra1.png" class="card-img-top h-40 w-100 rounded-5" id="imgint">

          <div class="card-body">
            <h5 class="card-title" id="title">João Guerra, 17 anos, Regsitro.</h5><br>
            <p class="card-text" id="text">Responsável pelo desenvolvimento mobile e back-end.</p>
          </div>
         
        </div>
      </div>
      <div class="col">
        
        <div class="card h-0 rounded-5" id="card">

          <a href="https://www.instagram.com/gustavolanna11/">
            <img src="imagens/gusta14.png" class="card-img-top rounded-5" > 
          </a>

          <div class="card-body">
            <h5 class="card-title" id="title">Gustavo Lanna, 17 anos, Jacupiranga.</h5><br>
            <p class="card-text pb-4" id="text">Responsável pelo desenvolvimento do site e pelo design geral.</p>
          </div>
          
        </div>

      
      </div>
    </div>

  <center> <div id="linha2" class="rounded-4">⠀</div></center>
  </div>
  </div>
<!--Integrantes-->


<!--Criação-->
<div id="quinta">
<div id="criacao" class="container">
  <div class="container rounded-4" id="nos"> <center><p class="pt-4" id="txt_nos"><i>Criação da Equipe</i></p></center> </div>
    <div class="container pt-5 p-3 ps-5">
      <div class="row pb-5 ps-3 pe-3">
        <div class="col-md-6 align-self-center pe-5">
          <div id="box2" class="rounded-4">
            <h4 id="txt_sobre">Para a realização do TCC do Desenvolvimento de Sistemas, nós, os alunos da ETEC, deveríamos criar uma equipe 
              totalmente do zero, criaríamos um nome, logo, design, etc.
            </h4>
          </div>
        </div>

        <div class="col-md-5 align-self-center text-center pe-5 ps-5">
          <img src="imagens/duvida.png" id="imglichia" class="img-fluid">
        </div>
      </div>
      <br><br>
      <div class="row pb-4 ps-3 pe-3">
         <div class="col-md-5 align-self-center text-center ps-5 pe-5">
          <img src="imagens/png_litch.png" id="imglichia" class="img-fluid">
        </div>
        <div class="col-md-6 align-self-center ps-5"><br><br>
          <div id="box2" class="rounded-4">
            <h4 id="txt_sobre">A partir disso, fomos desenvolver a nossa equipe, e no processo de criação, acabamos escolhendo a Lichia como nossa marca registrada.
            </h4>
          </div>
        </div>
      </div>
    </div>
    <br><br>
        <center> <div id="linha" class="rounded-4">⠀</div></center>
</div>
</div>

<!--Criação-->


<!--Criação II-->
<div id="terceira">


<div id="criacao2" class="container">
  <div class="container rounded-4" id="nos"> <center><p class="pt-4" id="txt_nos"><i>Criação da Equipe II</i></p></center> </div>
    <div class="container pt-5 p-3 ps-5">
      <div class="row pb-5 ps-3 pe-3">

        <div class="col-md-6 align-self-center pe-5">
          <div id="box2" class="rounded-4">
            <h4 id="txt_sobre">Após selecionar a lichia como nossa marca, definimos que nossa paleta de cores seria com basse nas 
              cores da fruta, então aplicamos tons de rosa e posteriormente juntamos a alguns tons de roxo (lilás).
            </h4>
          </div>
        </div>

        <div class="col-md-6 align-self-center pe-5">
          <div id="box2" class="rounded-4 pt-4 pb-4">
            <h4 id="txt_sobre">O nome da nossa equipe também é baseado na fruta, o nome “Litch” é derivado de “Lychee”, nome da furta em inglês. 
            </h4>
          </div>
        </div>

      </div>
      <br><br>
      <div class="row pb-4 ps-3 pe-3">
        
        <div class="col-md-5 align-self-center"><br><br>
          <div id="box2" class="rounded-4">
            <h4 id="txt_sobre">Após selcionar cores, logo, e nome, nós tinhámos um esboço da equipe, e então era apenas tirar do papel! Assim nasceu a Litch Group! 
            </h4>
          </div>
        </div>

         <div class="col-md-6 align-self-center text-center">
          <img src="imagens/logo.licth.png.png" id="img" class="img-fluid">
        </div>
      </div>
    </div>
    <br><br>
        
</div>
</div>
<!--Criação II-->

<div id="container-blog">
  

<main class="container-post">
  <text class="blog">
   <b><i>Blog De Notícias</i></b> 
  </text>

  <?php foreach($lista as $notice): ?>

  <div class="post">
    <div class="top-post">
      <span><?= date_format(new DateTime($notice['data_criacao']), 'd/m/y'); ?></span>
    </div>
  <div class="content-post">
    <h3><?= $notice['title_notice']; ?></h3>
    <p><?= $notice['description_notice']; ?></p>
  </div>
</div>

<?php endforeach; ?>

</main>


</div>







<!--Footer-->
    <footer class="text-center text-lg-start " style="background-color: #6b1f79;">
      <div class="text-center text-white p-3" style="background-color: #6b1f79;">
        LITCH GROUP 2023 COPYRIGHT
      </div>
      <center>
        <div class="text-center text-white p-3 h-50 w-50" style="background-color: #6b1f79;">
        Este site foi desenvolvido com o objetivo de apresentar um pouco mais sobre a nossa equipe de TCC para 2023, para mais informações
         sobre, clique nos links abaixo.
      </div>
      </center>

      <div class="pb-5">
        <center>
          <a href="https://github.com/LitchGroup">
            <img src="imagens/github.png" id="imgfooter" class="pe-4">
          </a>
          <a href="https://www.instagram.com/litch.group/">
            <img src="imagens/insta.png"  id="imgfooter" class="ps-4">
          </a>
      </center>
      </div>
      
        
      </div>
    </footer>
<!--Footer-->
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"  
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    
</body>
</html>
