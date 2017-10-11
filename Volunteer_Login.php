<script Language="php">
session_start();

if ($_SESSION['FAIL'] > 5)
  {
  header("location: Login_Fail.php"); //This is the page to land when login attempts fail  
  }

if ($_SESSION['LOGIN'] <> "")
  {
  echo "<table width='600'>";
  echo "<tr><td ALIGN='right'>" . $_SESSION['FirstName'] . " " . $_SESSION['LastNAME'] . " logged in.</td></tr>";
  echo "<tr><td><hr color='#FF6600' ALIGHT='left'></td></tr>";
  echo "</table>";
  }
</script>

<html>
<head>
<title>VOLUNTEER Member List</title>
</head>

<BODY BGCOLOR="#000000" TEXT="#FF6600">
<table border="0" cellpadding="0" cellspacing="0" width="600">
  <tr><td WIDTH="112" HEIGHT="112"><IMG BORDER="0" SRC="images/basketball.png" WIDTH="157" HEIGHT="123">
  </td><td WIDTH="479" HEIGHT="112"><FONT SIZE="4">Welcome to the Volunteer Application: Login.</FONT>
  </td></tr>
  <tr><td COLSPAN="2" WIDTH="598">
      <hr color='#FF6600' ALIGN='left'>
  </td></tr>
  
<table>
</table>

<form action="redirect.php" method="post">
			<div class="imgcontainer">
				<img src="basketball.png" class="basketball" alt="Basketball">
			</div>
			<div class="container">
				<input type="text" name="uname" placeholder="Username"><br>
				<input type="password" name="psw" placeholder="Password"><br>
				<button type="submit">Sign in</button>
			</div>
		</form>
		<div>
			<form action="redirect_login_to_sign_up.php" method = "post">
				<span>Don't have an account?</span>
				<button type="submit">Sign up</button>
			</form>
		</div>
</body>
<script Language="php"> 

$_POST['uname'] = "";
$_POST['psw'] = "";

//	if ($_POST['uname'] != ""){
	//	echo "<a href='http://volunteer.visionkelly.net/Admin_View.php'>Click here to log in!</a>";
	//}

  //echo "<h1 color = '#FF6600'>" . $_POST['uname'] . "</h1><br>";
  //$_SESSION['username'] = $_POST['uname'];
  //$_SESSION['password'] = $_POST['psw'];
 // $query  = "SELECT * FROM Login WHERE ;";
  //$result = mysql_query($query)  or die ('   !error% Cannot execute query on Message table <br>' . mysql_error());

   /* While ($row = mysql_fetch_row($result)){
		echo "<br>Login Name<br>" . $row[0] . "<br>";
		echo "<br>First Name<br>" . $row[1] . "<br>";
		echo "<br>Last Name<br>" . $row[2] . "<br>";
		echo "<br>Access<br>" . $row[3] . "<br>";
    }      
  */
</script>
</html>