<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('LMBpultd' => 'Hermione','amalkrishna' => 'amalpoem','e-vinjanam' => '19/06/2021');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<script>alert('Invalid Login Details')</script>";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	width: 100%;
	text-align: center;
} 

x{
margin-left: -5%;
}

h3 {
	margin: 0;
	padding: 0;
	font-size: 700%;
	font-weight: 930;
	margin-top: -2%;
	margin-left: 1%;
 	margin-bottom: 9%;
 	font-family: 'Brush Script MT', cursive;
}

h6 {
	font-size: 250%;
	margin-left: -50%;
	margin-bottom: 2%;
	font-family: 'Brush Script MT', cursive;
	font-weight: 900;
	
}

table {
	border: 5px solid black;
	width: 75%;
	height: 50%;
	min-height: 700px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	border: 10px solid red; 	
	margin-top: -10%;
	border-radius: 20%;
	background: moccasin;
}


input[type="text"],input[type="password"]{
	border: none;
	border-bottom: 2px solid;
	width: 40%;
	height: 25px;
	margin-left: 6%;
	background: transparent;
	outline : none;
}

button {
	border: 2px solid;
	border-radius: 5px;
	width: 15%;
	height: 5%;
	min-height: 50px;
	font-size: 250%;
   font-family: 'Brush Script MT', cursive;
   
}

</style>
</head>
<body>
<div id="Frame0">
  
  
</div>  
<table>
<br>
<form action="" method="post" name="Login_Form">
    <?php if(isset($msg)){?>
    <?php echo $msg;?>
    <?php } ?>
    
    
    
    <td><h3>Login</h3>
   
      <h6>Username</h6>
      <x><input name="Username" type="text" class="Input">
      
      <br></br>
 
      <h6>Password </h6>
     <x><input name="Password" type="password" class="Input"><br></br>
  
    <br></br>
    <br></br>
    <br></br>
     <button name="Submit">Submit</button>
    </tr>
  </table>
</form>
</body>
</html>