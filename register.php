<?php
	require('connect.php');
	$connection=mysql_connect ($dbhost, $dbuser, $dbpassword);
	if (!$connection) {  die('Not connected : ' . mysql_error());}

	// Set the active MySQL database

	$db_selected = mysql_select_db($dbname, $connection);
	if (!$db_selected) {
		die ('Can\'t use db : ' . mysql_error());
	}
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `login` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1"></span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</body>
</html>