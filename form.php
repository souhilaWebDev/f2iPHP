<?php
$prenom = 'souh';
$nom = 'dev';
$age = '88';
function input($size ,$name, $label , $type, $placeholder ){
    $un='<div class="form-group col-md-'.$size.'"><div class="mb-3">';
    $deux='';
    $trois = '<input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'"  placeholder="'.$placeholder.'"></div>
    </div>';
    if($type != 'submit'){
        $deux = ' <label for="'.$name.'">'.$label.'</label>';
    }
   return $un.$deux.$trois;
    
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>cours php!</title>
  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?=$nom.' '.$prenom ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container mt-5">
 
  <form method="get" action ="result.php">
    <div class="row">
        <?php
            echo input(6 , 'nom', 'Nom' , 'texte', 'entrer ton nom'); 
            echo input(6 , 'prenom', 'Prenom' , 'texte', 'entrer ton prenom'); 
            echo input(6 , 'email', 'Email' , 'email', 'entrer ton email'); 
            echo input(6 , 'phone', 'Mobile' , 'tel', 'entrer ton mobile'); 
            echo input(6 , 'password', 'Password' , 'password', 'entrer ton password'); 
            echo input(6 , 'password', 'Password' , 'password', 'entrer ton password'); 
            echo input(2 , 'envoyer', '' , 'submit', 'Envoyer'); 
           
        ?>
    </div>
  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputprenom">First Name</label>
      <input type="text" class="form-control" id="inputprenom" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputnom">Last Name</label>
      <input type="text" class="form-control" id="inputnom" placeholder="Last Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">Mobile</label>
      <input type="tel" class="form-control" id="phone">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
-->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>