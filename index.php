<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css">
  <title>Jeu</title>
</head>
<body>
  <?php

     session_start();
     $success = null;
     $NbreDeviner = 34;
     $error = null;
     //Afficher les nobres aleatoirement :
    if (empty($_SESSION['NbreDeviner'])) {
       $_SESSION['NbreDeviner'] = $NbreDeviner = rand(0, 10);
     } else {
       $NbreDeviner = $_SESSION['NbreDeviner'] ;
     }
    //Aficher le resultat selon le nombre de l'utilisateur :
     if (isset($_GET['nombre'])) {
      if ($_GET['nombre'] < $NbreDeviner) {
         $error = "Votre chiffre est trop petit";
       } else if ($_GET['nombre'] > $NbreDeviner) {
         $error = "Votre chiffre est trop grand";
       } else {
         $success = "Bravo! vous avez trouver";
         //session_destroy();
     }
  }
  ?>
   <main class="container-general">
  <form action="" method="GET">
  <img src="./Game.jpg" alt="une _image" class="image" />
    <div class="container container1">
      <div class="mb-3">
       <p class="text-au_dessus">Bonne chance chers clients</p>
        <?php if(isset($error)):  ?>   
          <div class="alert alert-danger" role="alert">
             <?= $error  ?>
          </div>
        <?php elseif(isset($success)):  ?>
          <div class="alert alert-success" role="alert">
           <?= $success   ?>
          <?php endif  ?>
          </div>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Deviner" name="nombre">
      </div>
      <div class="mb-3">
        <div class="d-flex justify-content-center">
          <button class="btn btn-success Deviner">Deviner</button>
        </div>
      </div>
    </div>
  </form>
</main>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>