<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Accueil</title>

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
	  <li>  <a href="aproposdemoi.php">A propos de moi</a> </li>
	  <li>  <a href="#">Services</a> </li>
	  <li>  <a href="https://www.linkedin.com/in/sofiane-bouredjioua-28a659142/" target="b_lank">Visiter mon profile linkedIn</a></li>
	  <li>  <a href="mecontacter.php">Me contacter</a> </li>
	  <li> <a href="setForAll.php">GitFlow</a> </li>
	</ul>    
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
      <span class="navbar-toggler-icon"></span>
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
	
	<div class="corps ">	


					<img class="box" src="logo.png" alt="paris descartes"> 
					
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="soso.jpg" class="card-img rounded-circle" alt="Sofiane BOUREDJIOUA" 		data-holder-rendered="true">
				    </div>
				    <div class="col-md-8" >
				      <div class="card-body" >
				        <h5 class="card-title">Sofiane BOUREDJIOUA</h5>
				        <p class="card-text"> Actuellement Je suis etudiant en Master 1 Miage à l'univerité de Paris. Je suis à la recherche d'un contrat d'apprentissage pour une durée de 12 à 24 mois dans le domaine de la Miage (Chef de projet, La data et le développement). <br> 
				        </p>
				        <p class="card-text"><small class="text-muted"></small></p>
				      </div>
				    </div>
				  </div>
				</div>

		
		<br><br>

	<div class="container-fluid">
		<fieldset class="fsetComp" >
			<legend>Mes compétences</legend>
				
			<div class="d-flex align-items-start">
			  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="openPage('Home', this, 'red')">Langages</a>
			    
			    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="openPage('Home', this, 'red')">BDD</a>
			    
			    <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="openPage('Home', this, 'red')">Modélisation</a>
			    
			    <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" onclick="openPage('Home', this, 'red')">Bureautique</a>
			    
			    <a class="nav-link" id="v-pills-outils-tab" data-bs-toggle="pill" href="#v-pills-outils" role="tab" aria-controls="v-pills-outils" aria-selected="false" onclick="openPage('Home', this, 'red')">Outils</a>
			  </div>
			  <div class="tab-content" id="v-pills-tabContent">
			    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			    		
			    	<ul class="uli">
			    		<li>JAVA - JavaFx</li>
			    		<li>Langage C</li>
			    		<li>C++</li>
			    		<li>Python</li>		    		
			       		<li>Langage R</li>
			    		
			    	</ul>
			    	<ul class="uli">
			    		<li>Sql</li>
			    		<li>XML</li>
			    		<li>Html</li>
			    		<li>Css</li>
			    		<li>JavaScript</li>
			    	</ul>
			    </div>
			    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			    	<ul>
			    		<li>Oracle</li>
			    		<li>MySQL </li>
			    		<li>SqlServer</li>
			    		<li>PostgreSql</li>
			    		<li>MongoDb</li>
			    	</ul>
			    </div>
			    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			    	<ul> 
			    		<li>UML</li> 
			    	</ul> 
			    </div>
			    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
			    <ul>
			    	<li>Libre Office</li>
			    	<li>Microsoft Office</li>
			    </ul>	
			    </div>
			    <div class="tab-pane fade" id="v-pills-outils" role="tabpanel" aria-labelledby="v-pills-outils-tab">
			    <ul class="toul">
			    	<li>Eclipse</li>
			    	<li>Symfony</li>
			    	<li>Xampp</li>
			    	<li>Apache</li>
			    </ul>	
			    <ul class="toul">
			    	<li>Anaconda</li>
			    	<li>Jupyter</li>
			    	<li>Spyder</li>
			    	
			    </ul>	
			    </div>

			  </div>

			    
			  </div>

		</div>
		</fieldset>
		
			<div>
				<script>
				function openPage(pageName, elmnt, color) {
					  // Hide all elements with class="tabcontent" by default */
					  var i, tabcontent, tablinks;
					  tabcontent = document.getElementsByClassName("tabcontent");
					  for (i = 0; i < tabcontent.length; i++) {
					    tabcontent[i].style.display = "none";
					  }

					  // Remove the background color of all tablinks/buttons
					  tablinks = document.getElementsByClassName("nav-link");
					  for (i = 0; i < tablinks.length; i++) {
					    tablinks[i].style.backgroundColor = "";
					  }

					  // Show the specific tab content
					  document.getElementById(pageName).style.display = "block";

					  // Add the specific color to the button used to open the tab content
					  elmnt.style.backgroundColor = color;
					}

					// Get the element with id="defaultOpen" and click on it
					document.getElementById("defaultOpen").click();
				></script>
			</div>
		
<br>
<br>
<fieldset class="fset">
	<legend>Mes projets académiques</legend>
	<br>
	<div class="row row-cols-1 row-cols-md-2">
	  <div class="col mb-4">
	    <div class="card">
	      <img src="bigdata.jpg" class="card-img-top" alt="big data">
	      <div class="card-body">
	        <h5 class="card-title">Monitoring de bases de données, IA</h5>
	        <p class="card-text"><ul><li>Jan 2020 - Avr 2020</li></ul>
	        	<ul>
	        		<li><h5>Développement d'une application web de monitoring de bases de données.</h5></li>
	        			<ul>
	        				<li>Récupération des indicateurs de performances des Bases de données MySql, Oracle, PostgreSql, SqlServer et ceux de l’Os Linux, Windows en langage Java.</li>
	        				<li>Affichage de ces données récupérées sous forme de courbes et graphes en javaScript.</li>
	        			</ul>
	        		<li><h5>Ce projet inclue une partie d’intelligence artificielle</h5></li>
	        			<ul>
	        				<li>Apprentissage d'un réseau de neurones en Python et prédiction de l'influence des
								indicateurs sur la CPU.</li>
	        			</ul>
	        		<li> <h5>Outils : Java, JDBC, Json, Html, CSS, JavaScript, Keras, pendas, Tensorflow, Python, ANN </h5></li>
	        	</ul>
	        </p>
	      </div>
	    </div>
	  </div>

	    <div class="col mb-4">
	    <div class="card">
	      <img src="sgbd.jpg" class="card-img-top" alt="sgbdr">
	      <div class="card-body">
	        <h5 class="card-title">Système de Gestion de Bases de Données Relationnel</h5>
	        <p class="card-text"><ul><li>Sep 2019 - Déc 2019</li></ul>
	        	<ul>
	        		<li>
	        			Développement d’un mini Système de Gestion de Base de Données relationnel.
	        		</li>
	        		<li><h5>Langage utilisé: java.</h5></li>
	        	</ul>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
</fieldset>
<br>

<fieldset class="fset">	
	<div class="row row-cols-1 row-cols-md-2">
	  <div class="col mb-4">
	    <div class="card">
	      <img src="gab.jpg" class="card-img-top" alt="guichet automatique bancaire">
	      <div class="card-body">
	        <h5 class="card-title">Guichet Automatique Bancaire</h5>
	        <p class="card-text"><ul><li>Jan 2019 - Avr 2019</li></ul>
	        	<ul>
	        		<li>L'application est conçue en JAVA, JavaFx.</li>
	        		<li>Elle sémule le fonctionnement d’un Guichet Bancaire Automatique d’une banque.</li>
	        		<li>Le client doit s’enregistrer à l’avance dans notre base de données et lui attribuer sa carte bancaire.</li>
	        		<li>Le client se sert d’un lecteur de cartes bancaires et pourrait effectuer les opérations
						souhaitées dépôt / retrait d’argents affichage du solde RIB Historique des operations.
					</li>
					<li>Imprimer un reçu de dépôt ou de retrait/ Rib / Relevé des opérations.</li>
					<li><h5>Outils : Java, JavaFx , Xml, Eclipse, JDBC, MySql</h5></li>
	        	</ul>
	        </p>
	      </div>
	    </div>
	  </div>
	
	  <div class="col mb-4">
	    <div class="card">
	      <img src="siteweb.jpg" class="card-img-top" alt="site web">
	      <div class="card-body">
	        <h5 class="card-title">Site Web (Gestion des bibliographies des auteurs)</h5>
	        <p class="card-text"><ul><li>Jan 2018 - Avr 2018</li></ul>
	        	<ul>
	        		<li>
	        			Développement d'un site web de gestion des bibliographies des auteurs.
	        		</li>
	        		<ul>
	        			<li>Il permet à un utilisateur de s'identifier et gérer son compte.</li>
	        			<li>Publier modifier ou supprimer un roman, essai, revue, article...</li>
	        			<li><h5>Outils : framework Symphony , Php , Html, Css , JavaScript, MySql.</h5></li>
	        		</ul>
	        	</ul>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
	</fieldset>
</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center bg-dark p-3" style="background-color: rgba(0, 0, 0, 0.2)">
   <span class="text-white">© 2021 Copyright :</span> 
    <a class="text-white" href="https://u-paris.fr/">Université de Paris (Descartes)</a>
    
  </div>
  <!-- Copyright -->

 
</footer>

</body>
</html>