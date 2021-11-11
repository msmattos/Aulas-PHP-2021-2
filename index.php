<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Desenvolvimento Web</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">



  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="img/favicons/manifest.json">
  <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="img/favicons/favicon.ico">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">



  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/">
  <!-- Custom styles for this template -->
  <link href="css/blog.css" rel="stylesheet">
  <script src="js/bootstrap.js"></script>

</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row pb-1">
        <div class="col-4 pt-1">
          <a class="link-secondary" href="index.php"><img style=" height: auto; width: auto; max-width: 200px; 
            max-height: 60px;" src="img/desenvolvimento-web.png"></a>
        </div>
        <div class="col-4 text-center">
          <a class="text-dark" href="#"> </a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
              viewBox="0 0 24 24">
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5" />
              <path d="M21 21l-5.2-5.2" />
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
      </div>



      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img alt="LogoIFRJ" style=" height: auto; width: auto; max-width: 16px; 
            max-height: 16px;" src="img/Logo-ifrj.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://classroom.google.com/" target="_blank">Classroom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/msmattos" target="_blank">GitHub</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  PHP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="mat_apoio_php.php">Materiais de apoio</a></li>
                  <li><a class="dropdown-item" href="exemplos_php.php">Exemplos</a></li>
                  <li><a class="dropdown-item" href="exercicios_php.php">Exercícios</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
  </div>


  <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h3 class="fst-italic">Aulas de Desenvolvimento Web</h3>
        <p class="lead my-3">Materiais de apoio, exemplos e recursos da disciplina Desenvolvimento Web</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold"></a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Materiais de apoio</strong>
              <p class="card-text mb-auto">Encontre os materiais de apoio da disciplina Desenvolvimento Web III</p>
            <a href="mat_apoio_php.php" class="stretched-link">Continue aqui...</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="150" src="img/machine-learning.jpg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Materiais de apoio</title>
            </img>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Exemplos</strong>
             <p class="mb-auto"> Exemplos usados nas aulas da disciplina Desenvolvimento Web III</p>
            <a href="exemplos_php.php" class="stretched-link">Continue aqui...</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="150" src="img/example.jpg" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Exemplos</title>
            </img>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <div class="container">
        <hr />
        <div class="text-center center-block">
          <br />
          <a href="https://www.facebook.com/marcelosimasmattos" target="_blank"><i
              class="fa fa-facebook-square fa-3x social"></i></a>
          <a href="https://twitter.com/msmattos" target="_blank"><i class="fa fa-twitter-square fa-3x social"></i></a>
          <a href="mailto:simas.mattos@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <br>
        &copy
        <script type="text/javascript">
          var d = new Date()
          document.write(d.getFullYear())
        </script> Instituto Federal do Rio de Janeiro.
      </div>
      <footer>
</body>

</html>