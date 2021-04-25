<?php

// check if the button is pressed then act
if(isset($_POST['submit'])){

	// import the DB connection from the connection.php file
	require 'connexion.php';
	
	// get the values of the fields of the login form and store them in variables

	// mysqli_real_escape_string (para1, para2): just to escape a character to secure our SQL Injection database, para1: we paste the parameter from the connection.php file called $ connect, para2: the value of the field
	
	// strtolwer (): change username to lowercase because the deposited username must not be case sensitive, for example: if writing nassim or Nassim must be the same then I do it to compare it with that of our database which is itself in lowercase
	
	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$username=trim(strtolower($username));// trim to remove any unwanted space from the first and last words;
	$pwd = mysqli_real_escape_string($connect,$_POST['pwd']);
	
	// we first check if the fields are empty
	if(empty($username) || empty($pwd) ){
		$error="Please entre the username & password to log in";
	}else{
		// the summary of all these codes is:
		// we selected the row which contains the target username, then we compare it with the same row, but this time we see the password if you can log in, otherwise you cannot log in
		$checkDBUsername="SELECT * FROM utilisateurs WHERE login='$username';";
		$result=mysqli_query($connect,$checkDBUsername);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				if($row['login'] == $username){
					$foundUsername=$row['login'];
					$foundPwd=$row['pass'];
					break;
				}
			}
			if($foundUsername == $username && $foundPwd == $pwd ){
				// when the username and password are correct, we make a session take the name of the username to ensure the uniqueness of the session name
				session_start();
				$_SESSION[$username]="ok";
				header("location:session.php");
			}else{
				$error="Username or password is incorrect";
			}

		}else{
				$error="Username or password is incorrect";
				}
		
	}
	// we closed the connection to DB
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
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../images/login.png" type="image/png" >
    <script src="https://kit.fontawesome.com/e1af7c97bd.js" crossorigin="anonymous"></script>
    
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:600,900"
      rel="stylesheet"
    />
    <title>Login</title>
</head>
<body>
<div class="all">
      <div class="full-page">
    <?php sub_headers(); ?>

    <div class="form_content">
    <form autocomplete="off" action="" method="POST">
			<h1>Login</h1>
			
			<input type="text"  name="username" placeholder="Username" />
			<input type="password" name="pwd" placeholder="Password" />
			<?php if(!empty($error)) { ?>
				<div id="error">
				<p>
					<i class="fas fa-exclamation-circle"></i>
					<?php echo $error; ?>
					</p>
				</div>
			<?php } ?>

			
            
            
            
            <button type="submit" name="submit">Login</button>
			<a href="register.php">Create new account</a>
		</form>
        </div>
    </div>
    
    <?php sub_footer(); ?>
    </div>
</body>
</html>