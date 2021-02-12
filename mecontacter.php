<?php 
	$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "siteweb";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);


 
if (isset($_POST["envoyer"]))
 {
 	
    #retrieve file title
    $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["temp_name"];
   
    #upload directory path
	$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    # retrieve the textarea
 	$text = $_POST["area"];
 
    #sql query to insert into database
    $sql = "INSERT into fichier(textarea, titre,doc) VALUES('$text', $title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "Votre réponse est bien envoyé !";
    }
    else{
        echo "Erreur d'envoi ! ";
    }
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contactez moi</title>
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
            <h1 class="text-white">Contact</h1>

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
			
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="soso.jpg" class="card-img rounded-circle" alt="Sofiane BOUREDJIOUA" 		data-holder-rendered="true">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Sofiane BOUREDJIOUA</h5>
				        <p class="card-text"> Actuellement Je suis etudiant en Master 1 Miage à l'univerité de Paris. Je suis à la recherche d'un contrat d'apprentissage ou d'alternance pour une durée de 12 à 24 mois dans le domaine de la Miage (Chef de projet, La data et le développement). <br> 
				         </p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
				<br>

				<fieldset class="fsetComp">
				<legend> Transmettez moi votre message ici </legend>
				<div>
					<form method="POST" action="" enctype="multipart/form-data">
						
						<textarea id="area" name="area" placeholder="rentrez votre message ici ..." rows="6" cols="80"></textarea> <br>
						<label for="title">Nom du document : </label>
						<input type="text" name="title" id="title" placeholder="nom du document">
						<label for="doc">Envoyer un document :</label>
						<input type="file" name="doc" id="doc"><br>
						<input type="submit" name="envoyer" id="envoyer">				

					</form>
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