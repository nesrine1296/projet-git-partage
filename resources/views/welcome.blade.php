<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our project</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .container {
          position: relative;
          text-align: center;
        }
        .centered {
          position: absolute;
          top: 50%;
          left: 51%;
          transform: translate(-50%, -50%);
        }
        .left {
          position: absolute;
          top: 50%;
          left: 28%;
        }
        .right {
          position: absolute;
          top: 50%;
          left: 63%;
        }
        .centered2{
          position: absolute;
          top: 38%;
          left: 44.5%;
          z-index: 9999;
        }
        </style>
</head>
<body>
    <div class="text-center container mt-5">
        <img width="600px" src="/img/book.jpg" alt="">
        <div class="centered">
            <a class="btn btn-primary display-4 text-center mt-5" href="/users">Start Now !!!</a>
        </div>
        <div class="centered2">
            <h5 class="text-dark"> Write Your History</h5>
        </div>
        <div class="left">
            <h1 class="text-dark">Nesrine</h1>
        </div>
        <div class="right">
            <h1 class="text-dark">Adam</h1>
        </div>
    </div>
</body>
</html>