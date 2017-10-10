<script Language="php">
session_start();

if ($SESSION['FAIL'] > 5)
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
  </td><td WIDTH="479" HEIGHT="112"><FONT SIZE="4">Welcome to the Volunteer Society: Volunteer View.</FONT>
  </td></tr>
  <tr><td COLSPAN="2" WIDTH="598">
      <hr color='#FF6600' ALIGN='left'>
  </td></tr>
  
<script Language="php"> 

  $connection = mysql_connect('localhost', 'dckelly_Project', '2wsx#EDC') or die ('%ERROR Unable to connect to Host db<br>');
  mysql_select_db('dckelly_Volunteer')                                       or die ('   !error% Unable to open database  <br>');
  $query  = "SELECT * FROM Login ;";
  $result = mysql_query($query)  or die ('   !error% Cannot execute query on Message table <br>' . mysql_error());

    While ($row = mysql_fetch_row($result)){
		echo "<br>Login Name<br>" . $row[0] . "<br>";
		echo "<br>First Name<br>" . $row[1] . "<br>";
		echo "<br>Last Name<br>" . $row[2] . "<br>";
		echo "<br>Access<br>" . $row[3] . "<br>";
    }      
  
</script>
	
<table>
</table>


</body>

</html>
