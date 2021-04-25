<?php
	require 'connexion.php';
  // nous commençons la session
	session_start();
	// nous sélectionnons tous les enregistrements de la table utilisateur
	$sql="SELECT * FROM utilisateurs";
	$result=mysqli_query($connect,$sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			$sessionName=$row['login'];
			if(@$_SESSION[$sessionName]=="ok"){	// nous vérifions le nom de la session en recherchant dans notre base de données et trouver le bon, par exemple: si le nom d'utilisateur est nassim la session ressemble bien à: $ _SESSION ['nassim'] = "ok"
			// nous prenons également certaines données de la base de données pour les afficher sur la page de l'utilisateur actuel comme le nom d'utilisateur, la date, le prénom, le nom de famille 
			$username=$sessionName;
			$date=$row['date'];
			$id=$row['id'];
			$fname=$row['prenom'];
			$lname=$row['nom'];
			}
		}
		if ($_SESSION[$username] != "ok") { // lorsque nous avons vérifié les noms d'utilisateur et que nous ne trouvons pas de session, cette page redirigera n'importe qui vers la page login.php
		header("location:login.php");
		exit();
	 }
	}
	
	
	
	
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/session.css" />
    <script src="https://kit.fontawesome.com/e1af7c97bd.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="../images/private.png" type="image/png" >
	
	<!-- nous faisons un titre du prénom de l'utilisateur -->
    <title>Private Page of <?php echo $fname ?></title>
  </head>
  <body>

		<div class="nav-bar">
    	<nav>
      <div class="header">
        <!-- nous imprimons son nom et prénom -->
     <h1>Welcome to your Store <span id="name"><?php echo $fname . " ". $lname?></span></h1>	
    	</nav>
		<ul class="logout">
		<i class="fas fa-sign-out-alt"></i>
		<a href="deconnexion.php">Log out</a>
     </ul>
      </div>

    	
  	<section>
      <span class="thead"></span>
      <div class="profil-img">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="delete-user" >
      	
      	<!-- here we use javascript the check if the user wats really to delete its account or not with a good looking design by using the library sweetAlert
      	you can find the javascript file under js/delUserConfirmation.-->
      	<!-- we run the function called deleteme(parameter) with the parameter of username -->
      	<button onClick="deleteme('<?php echo $username ?>');"  name="deluser"  class="delete-user" type="submit">
      	<i class="far fa-trash-alt"></i>
      	<h3>Delete My Account</h3>
      	</button>
      	

      </div>
		
		<!-- nous avons affiché des informations de base sur l'utilisateur actuel, mais pas le mot de passe, car il n'est pas sécurisé de le faire. -->
      <div class="card">
        <div class="th1 th">
          <span class="thead"><h1>Username:</h1></span>
          <h1><?php echo $username ?></h1>
        </div>
        <div class="th2 th">
          <span class="thead"><h1>First Name:</h1></span>
          <h1><?php echo $fname ?></h1>
        </div>
        <div class="th3 th">
          <span class="thead"><h1>Last Name:</h1></span>
          <h1><?php echo $lname ?></h1>
        </div>
        <div class="th4 th">
          <span class="thead"><h1>Creation Date:</h1></span>
          <h1><?php echo $date ?></h1>
        </div>
      </div>
    </section>

		<!-- c'est juste une carte de magasinage aléatoire pour remplir le blanc et donner à la page plus belle -->
<div class='row'>
  <div class='product--blue'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Women)</p>
      <p>Size 7</p>
      <p>Price £199.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--orange'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Men)</p>
      <p>Size 10</p>
      <p>Price £99.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--red'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Women)</p>
      <p>Size 8</p>
      <p>Price £399.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--green'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Men)</p>
      <p>Size 11</p>
      <p>Price £299.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--yellow'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Women)</p>
      <p>Size 11</p>
      <p>Price £299.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
  <div class='product--pink'>
    <div class='product_inner'>
      <img src='../images/product.png' width='300'>
      <p>Nike Air (Men)</p>
      <p>Size 11</p>
      <p>Price £299.99</p>
      <button>Add to basket</button>
    </div>
    <div class='product_overlay'>
      <h2>Added to basket</h2>
      <i class='fa fa-check'></i>
    </div>
  </div>
</div>


	


<script src="../js/delUserConfirmation.js"></script>	

  </body>
</html>
