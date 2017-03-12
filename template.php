<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?= $description ?>">
    <link rel="icon" href="">

    <title><?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
  	<header>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="index.php">Mon super chat</a>
	          <ul class="nav navbar-nav">
              <?php
                if(!isset($_SESSION['membre'])){
              ?>
  		          <li><a href="connexion.php">Connexion</a></li>
  		          <li><a href="inscription.php">Inscription</a></li>
              <?php
              } else {
              ?>
                <li><a href="deconnexion.php">Déconnexion</a></li>
              <?php
              }
              ?>
	          </ul>

	        </div>
          <?php
            if(isset($_SESSION['membre'])){
          ?>
            <span class="pull-right" style="color:#9d9d9d; padding-top:15px; padding-bottom:15px; float:right;">Bonjour <?= $_SESSION['membre']['pseudo']; ?></span>
          <?php
          }
          ?>
	        
	      </div>
	    </nav>
    </header>

    <div class="container">

      <div class="starter-template" style="padding-top:70px;">

      <?= $content; ?>

      </div>

      <div class="row"><div class="col-sm-12"><hr></div></div>
    </div><!-- /.container -->

  <footer>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    			<p class="text-center"><a href="#">Alexandra Bogdanova</a> - All rights reserved - 2017</p>
    		</div>
    	</div>
    </div>
  </footer>
  </body>
</html>