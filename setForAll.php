<!DOCTYPE html>
<html>
<head>
	<title>A propos de moi</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="cssFile.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>

<header>

<div class="collapse" id="navbarToggleExternalContent">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Menu</h5>
    <span class="text-muted"></span>
    <ul>
	  <li>  <a href="https://www.linkedin.com/in/sofiane-bouredjioua-28a659142/" target="b_lank">Visiter mon profile linkedIn</a> </li>
	 
	</ul>    
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
            <h1 class="text-white">AllSetFor</h1>

      <span class="navbar-toggler-icon"></span>
      <button onclick="(window.location.href='accueil.php')" id="btn" name="btn">Retour</button>
    </button>
  </div>
</nav>


	
		<script>
			/* Open */
function openNav() {
  document.getElementById("navbarToggleExternalContent").style.length = "30%";
}

function closeNav() {
  document.getElementById("navbarToggleExternalContent").style.width = "0%";
}
		</script>
</header>

<div class="corps">
		<img class="box" src="logo.png" alt="paris descartes">
	<br>

	<img src="allsetfor.png" alt="AllSetFor logo" style="text-align: center;">

	<h3>Réponse à la 2ème question sur GitFlow</h3>

	<div>

		<h5>Le principe de Gitflow est d'avoir plusieurs branches de cas concrets. </h5>
			<li>
				Une branche Master va etre la branche principale sur laquelle on va avoir peut de commit au final. Sur cette branche on va mettre que des versions déstinées à la production. Donc si par exemple on travaille sur une feature, on ne va pas travailler directement sur la branche Master. Alors si on souhaite déployer Master sur un serveur, on risque d'envoyer des commits qui vont nous perturber. 
				Donc la branche Master va correspendre à notre environnement de production.
			</li>
			<li>
				A cet effet, on va avoir une autre branche Develop sur laquelle travailleraient tous les développeurs, alors cette branche va avoir un grand nombre de commits. Pour travailler à plusieurs sur le même projet, on créé des feature  branches pour ne pas avoir un historique mélangé sur la branche Develop. 
			</li>
			<li>
				Donc si un développeur souhaite travailler sur un nouveau système de recheche sur le site par exemple, il va pouvoir travailler sur une branche séparée. Cette manière d'organisation permet de traviller tout seul et de manière isolée sur sa tache et ne pas mélager son code avec les autres développeurs. 
				Une fois que la tache est finie sur la feature branche, on va la fusionner avec la branche Develop. ensuite on supprime cette branche parceque elle ne sera plus utile. 
			</li>
			<li>
				Lorsque on estime que le projet atteint une certaine étape avancée, on créé une release : une nouvelle branche qui servira pour faire quelques commits juste avant de faire une nouvelle version de notre projet. Une fois satisfait de notre release, on va la merger sur la branche master et lui donner un tag pour pouvoir l'identifier facilement. On fait de même sur la branche Develop pour la release obtenue afin d'avoir un historique cohérent sur la branche Develop.
			</li>
			<li>
				On créé aussi une des branches  Hotfixe, s'il existe certains bugs dans l'application. Aprè correction des bugs on merge la branche sur Develop et Master.
			</li>
	</div>



	<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center bg-dark p-3" style="background-color: rgba(0, 0, 0, 0.2)">
   <span class="text-white">© 2021 Copyright :</span> 
    <a class="text-white" href="https://u-paris.fr/">Université de Paris (Descartes)</a>
    
  </div>
  <!-- Copyright -->

 
</footer>

</div>
</body>
</html>