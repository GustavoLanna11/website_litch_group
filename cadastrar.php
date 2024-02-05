<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/cadastrar.css">

    <link rel="icon" type="image/x-icon" href="imagens/png_litch.png">

    <title>Cadastrar</title>
</head>
<body>

    <div id="navbarr" class="container pt-4 fixed-top">
        <header class="rounded-4 ps-5 ">
            <nav class="navbar navbar-expand-lg" id="navbar">
                <div id="nav" class="container-fluid">
                  <img src="imagens/png_litch.png" id="logo_nav">
                  <a class="navbar-brand" href="index.php" id="item"><i>Home</i></a>
    
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
    
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" >
                      <a class="nav-link active" aria-current="page" href="#sobre" id="item"><i>Sobre</i></a>
                      <a class="nav-link" href="#integrantes" id="item"><i>Integrantes</i></a>
                      <a class="nav-link" href="#projetos" id="item"><i>Projeto</i></a>
                      <a class="nav-link" href="cadastrar.html" id="item"><i>Cadastrar</i></a>
    
                      
                    </div>
                  </div>
                </div>
              </nav>
        </header>
        
      </div>

      
      <main class="main">
        <form class="form" method="POST" action="cadastrar_action.php">
            <div class="input-search">
                <label for="inputNotice">Título da Notícia:</label>
                <input type="text" name="notice" id="inputNotice" required>
            </div>
            <div class="input-search">
                <label for="inputDescription">Descrição da Notícia:</label>
                <textarea type="text" name="description" rows="5" id="inputNotice" required></textarea>
                <div class="input-search">
                    <input type="submit" value="Cadastrar">
                </div>
            </div>
            
        </form>
      </main>

</body>
</html>