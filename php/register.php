<?php

if(isset($_POST['submit'])){
	require 'connexion.php';
	
	// la plupart de ces lignes sont expliquées dans la page login.php donc s'il vous plaît si vous commencez par cette page, vous pouvez voir la page login.php pour une meilleure compréhension 

	// [FACULTATIF]: ucfirst juste la majuscule de la première lettre pour une meilleure apparence, la même chose avec le nom juste dans ce cas toutes les lettres en majuscule
	// J'ai changé le champ du nom d'utilisateur en minuscule pour que je puisse faire la compassion facilement avec le formulaire de connexion 
	// trim pour supprimer tout espace indésirable au premier et au dernier des mots
	$fname = trim(ucfirst(mysqli_real_escape_string($connect,$_POST['first-name'])));
	$lname = trim(strtoupper(mysqli_real_escape_string($connect,$_POST['last-name'])));
	$username = trim(mysqli_real_escape_string($connect,$_POST['username']));
	$username=strtolower($username);
	$pwd = mysqli_real_escape_string($connect,$_POST['pwd']);
	$confirmpwd = mysqli_real_escape_string($connect,$_POST['confirm-pwd']);

	

	

	if(empty($fname) || empty($lname) || empty($username) || empty($pwd) || empty($confirmpwd) ){
		$error="One or more fields are empty";
	}else{
		if($pwd != $confirmpwd){
			$error="Please type the correct password";
		}else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){ // preg_match : c'est une fonction qui vérifie les caractères du nom d'utilisateur dans cet exemple, je n'autorise que les caractères suivants: 0-9 et a-z et A-Z si vous essayez de mettre un différent de la liste, il vous montrera un message d'erreur ci-dessous:
			$error="Username must contain just numbers and letters";
		}
		else{
			$checkDB="SELECT login FROM utilisateurs WHERE login='$username';";
			$result=mysqli_query($connect,$checkDB);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
					if($row['login'] == $username){ // nous recherchons un utilisateur existant dans notre base de données 
						$notice="You already have an account Please Login";
						break;
					}
				}
			}else{
				// On m'a déjà expliqué que dans le fichier login.php, c'est la même chose
				$sql=" INSERT INTO utilisateurs (date, nom, prenom, login, pass) VALUES (current_timestamp(), '$lname', '$fname', '$username', '$pwd'); ";

				mysqli_query($connect,$sql);
				$msg="THANK YOU your account has been created successfully";
			}
			
		}
	}
	
	mysqli_close($connect);

}

 ?>

<?php
include '../inc.php/html_body.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" href="../images/register.png" type="image/png" >
    <script src="https://kit.fontawesome.com/e1af7c97bd.js" crossorigin="anonymous"></script>
    
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:600,900"
      rel="stylesheet"
    />
    <title>Register</title>
</head>
<body>
<div class="all">
      <div class="full-page">
    <?php sub_headers(); ?>

    <div class="form_content">
    <form autocomplete="off" action="" method="POST">
			<h1>Register</h1>
			
			<input type="text" name="first-name" placeholder="First Name"/>
            <input type="text" name="last-name" placeholder="Last Name"/>
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="pwd"  placeholder="Password">
			<input type="password" name="confirm-pwd" placeholder="Confirm Password" />
			
			<!-- ceci juste pour un message d'erreur si les informations étaient incorrectes-->
			<?php if(!empty($error)) { ?>
				<div id="error">
				<p>
					<i class="fas fa-exclamation-circle"></i>
					<?php echo $error; ?>
					</p>
				</div>
			<?php } ?>

			<!-- c'est un message qui montre que toutes les informations sont valides et que l'utilisateur est enregistré avec succès-->
			<?php if(!empty($msg)) { ?>
				<div id="msg">
				<p>
					<i class="fas fa-check-circle"></i>
					<?php echo $msg; ?>
						
					</p>
				</div>
			<?php } ?>
			<!-- c'est pour un avis que cet utilisateur actuel a déjà existé. -->
			<?php if(!empty($notice)) { ?>
				<div id="notice">
				<p>
					<i class="fas fa-exclamation-circle"></i>
					<?php echo $notice; ?>
						
					</p>
				</div>
			<?php } ?>
            
            
            <button type="submit" name="submit">Register</button>
			<a href="login.php">Have an account ? Login</a>
		</form>
        </div>
    </div>
    
    <?php sub_footer(); ?>
    </div>
</body>
</html>