<!DOCTYPE html>
<html>
<?php 
session_start();
?>

	<head>
		<meta charset="utf-8" />
		<title>Accueil</title>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body background="img/bg.jpg" style="background-attachment:fixed;">

		<!-- NAV -->
		<div class="header" style="background-image: url('img/gplay.png');">
			<div class="container">

				<div class="titre">
					<h1><a href="#">GamUs</a></h1>
				</div>

				<div class="nav">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="login.php">Jeux</a></li>
						<li class="active"><a href="auteurs.php">Auteurs</a></li>
						<?php 
							if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
						?>
						<li><a href="admin" style="color: #F64747;">Administration</a></li>
						<?php
							}
						?>
						<li class="icone"><a href="https://github.com/LemonAdd/projet_isn" title="GitHub"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>
		</div>


		<!-- LE LOGO SERA ICI -->


		<div class="page" style="padding-left: 10%; padding-right: 10%;">

			<h1 style="margin-left:-10%;">Auteurs</h1>
			<hr style="margin-bottom: 50px;">

			<div class="auteur" style="background-image: url('img/bobo.jpg');background-position:bottom;">
				<h2><a href="membre.php?id=5">Boris Jacquot</a> <span class="label" style="background-image: url('img/geo.png');">Web design<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span></h2>
			</div>

			<div class="auteur" style="background-image: url('img/clem.jpg');background-position:bottom;">
				<h2><a href="membre.php?id=6">Clément Millard</a> <span class="label" style="background-image: url('img/geo.png');">Game design<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span></h2>
			</div>

			<div class="auteur" style="background-image: url('img/nico.jpg');background-position:bottom;">
				<h2><a href="membre.php?id=7">Nicolas Bouzon</a> <span class="label" style="background-image: url('img/geo.png');">Level design<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span></h2>
			</div>

			<div class="auteur" style="background-image: url('img/ava.png');">
				<h2><a href="#">Avanise</a> <span class="label" style="background-image: url('img/geo.png');">Graphiste<a href="#"><i class="fa fa-deviantart" aria-hidden="true"></i></a><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span></h2>
			</div>

			<hr style="margin-top: 50px;">
		</div>

		<div class="user">

			<?php
				if (!empty($_SESSION['pseudo']) && isset($_SESSION['pseudo'])) {	
			?>	
				<p>Connecté en tant que <a href="membre.php?id=<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['pseudo']; ?></a></p>
				<a href="deco.php"><button>Déconnexion</button></a>
			<?php
				}
				else {
			?>
				<p>Vous n'êtes pas connecté</p>
				<a href="login.php"><button>Connexion</button></a>

			<?php
				}
			?>

		</div>


	</body>
</html>