<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--Css local-->
<link rel="stylesheet" href="stylesheet.css">

    <title>SETRAS CAMEROUN</title>

    <link rel="icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="logo.png" />
</head>
<body>
    
<!--LOGO-->
<nav class="navbar navbar-expand-sm  bg-light">
        <a class="navbar-brand" href="Accueil.php">
            <img src="logo.png" alt="Logo" style="height:80px; width: 83px;">
        </a>
        <h5>L'adulte ne crois pas au père Noël. Il vote</h5>
</nav>

<!--MENU-->
<nav class="navbar justify-content-center navbar-expand-sm sticky-top bg-secondary">
<button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<ul class="nav nav-tabs">
<div class="collapse navbar-collapse" id="collapsibleNavbar" >
  <li class="nav-item">
  <a class="nav-link bg-" href="Accueil.php" style="color:white;">Accueil</a>
   </li>
  
   <li class="nav-item dropdown">
    <a class="nav-link  bg-primary dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Connexion</a>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="projet.php" style="color:green;">Admin</a>
      <a class="dropdown-item" href="cotation.php" style="color:green;">Electeur</a>
    </div>
  </li>
   
  <li class="nav-item">
    <a class="nav-link bg-" href="contact.php" style="color:white;">Contact</a>
  </li>
  </button>
</ul>
  </div>
</nav>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>