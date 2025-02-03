<html class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite(["resources/sass/app.scss",
  "resources/css/app.css",
  "resources/js/app.js"])
  <title>Laravel</title>
</head>

<body class="d-flex flex-column h-100">

  <nav class="navbar navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <header class="hero">
    <h1>Bem-vindo ao Laravel</h1>
    <p>Aprenda Laravel com o melhor curso do Brasil</p>
    <a href="#" class="btn btn-light btn-lg mt-3">Comece agora</a>
  </header>

  <main class="container my-5">
    <section class="text-center">
      <h2 class="mb-5">Por que aprender Laravel?</h2 class="mb-5">
      <p class="mb-5">Laravel é um framework de desenvolvimento web moderno e poderoso que oferece uma abordagem eficiente e elegante para a criação de aplicações web robustas e escaláveis.</p>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card shadow border-light">
            <div class="card-body">
              <h5 class="card-title">Atualizar-se</h5>
              <p class="card-text">Mantenha-se atualizado com as últimas versões do Laravel e suas melhorias.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow border-light">
            <div class="card-body">
              <h5 class="card-title">Diferenciar-se</h5>
              <p class="card-text">Diferencie-se dos outros desenvolvedores com um framework moderno e eficiente.</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow border-light">
            <div class="card-body">
              <h5 class="card-title">Alcançar Objetivos</h5>
              <p class="card-text">Alcance seus objetivos com um framework que oferece uma abordagem eficiente e elegante para a criação de aplicações web robustas e escaláveis.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="text-center mt-auto py-4">
    <div class="container">
      <p class="mb-0">@ {{ date('Y') }} Laravel</p>
    </div>
  </footer>
</body>

</html>