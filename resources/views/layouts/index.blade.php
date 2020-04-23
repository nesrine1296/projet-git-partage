<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relation one to many projet github</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin Sketch">
    <style>
      body {
        font-family: 'Cabin Sketch', serif;
        font-size: 20px;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mr-2">
              <a class="nav-link text-light" href="/users/create"> <h2>Users</h2></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link text-light" href="/projets"><h2>Projets</h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="/taches"><h2>Taches</h2></a>
            </li>
          </ul>
        </div>
    </nav>
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html>