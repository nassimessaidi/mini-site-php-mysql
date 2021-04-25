<?php

if(isset($_POST['submit'])){
	require 'connexion.php';
	
	// most of these lines are explained in the login.php page so please if you start with this page you can see the login.php page for a better understanding

	// [OPTIONAL]: ucfirst just uppercase the first letter for better appearance, the same with the name just in this case all uppercase letters
	// I changed the username field to lowercase so that I can do compassion easily with the login form 
	// trim to remove any unwanted space from the first and last words
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
		}else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){ // preg_match : this is a function which checks the characters of the username in this example, I only allow the following characters: 0-9 and az and AZ if you try to put a different one from the list it will show you a message error below:
			$error="Username must contain just numbers and letters";
		}
		else{
			$checkDB="SELECT login FROM utilisateurs WHERE login='$username';";
			$result=mysqli_query($connect,$checkDB);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)){
					if($row['login'] == $username){ // we are looking for an existing user in our database
						$notice="You already have an account Please Login";
						break;
					}
				}
			}else{
				// I was already explained that in the login.php file, it is the same thing
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
			
			<!-- this just for an error message if the information was incorrect-->
			<?php if(!empty($error)) { ?>
				<div id="error">
				<p>
					<i class="fas fa-exclamation-circle"></i>
					<?php echo $error; ?>
					</p>
				</div>
			<?php } ?>

			<!-- this is a message that shows that all information is valid and the user is registered successfully -->
			<?php if(!empty($msg)) { ?>
				<div id="msg">
				<p>
					<i class="fas fa-check-circle"></i>
					<?php echo $msg; ?>
						
					</p>
				</div>
			<?php } ?>
			<!-- it is for an opinion that this current user already existed. -->
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