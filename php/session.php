<?php
	require 'connexion.php';
  // we start the session
	session_start();
	// we select all the records from the user table
	$sql="SELECT * FROM utilisateurs";
	$result=mysqli_query($connect,$sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
			$sessionName=$row['login'];
			if(@$_SESSION[$sessionName]=="ok"){	// we check the session name by searching our database and find the correct one, for example: if the username is nassim the session looks like: $ _SESSION ['nassim'] = "ok"
			// we also take some data from the database to display it on current user's page like username, date, first name, last name
			$username=$sessionName;
			$date=$row['date'];
			$id=$row['id'];
			$fname=$row['prenom'];
			$lname=$row['nom'];
			}
		}
		if ($_SESSION[$username] != "ok") { // when we have checked the usernames and cannot find a session this page will redirect anyone to the login.php page
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
	
	<!-- we make a title of the user's first name -->
    <title>Private Page of <?php echo $fname ?></title>
  </head>
  <body>

		<div class="nav-bar">
    	<nav>
      <div class="header">
        <!-- we print his name and first name -->
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
		
		<!-- we have displayed some basic information about the current user, but not the password, because it is not secure to do so. -->
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

		<!-- it's just a random shopping card to fill in the blank and make the page more beautiful -->
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
