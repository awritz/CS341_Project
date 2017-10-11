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
  </td><td WIDTH="479" HEIGHT="112"><FONT SIZE="4">Welcome to the Volunteer Society: Program Manager View.</FONT>
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
 <!-- Add Event -->
		<h1>Add Event</h1>
		<form method="get">
			<b>Event ID:</b><br>
			<input type="text" id="eventID"><br><br>
            <b>Event Date:</b><br>
            <input type="datetime-local" name="eventDate"><br></br>
			<input type = "submit" value = "Submit" onclick=>
		</form>
        
	<!-- Edit Event -->
		<h1>Edit An Event</h1>
		<form method="get">
			<b>Event ID:</b><br>
			<input type="text" id="eventID"><br><br>
			<input type = "button" value = "Search" onclick=>
		</form>
        
	<!-- Delete Event -->
		<h1>Delete An Event</h1>
		<form method="get">
			<b>Event ID:</b><br>
			<input type="text" id="eventID"><br><br>
			<input type = "button" value = "Search" onclick=>
		</form>
        
        <!-- Initialize Program Manager List with empty set of program managers -->
		<h1>Create a New Program Manager List</h1>
		<form>
			<input type="button" value="New Program Manager List" onclick=>
		</form>
        
        <!-- Program Manager Search -->
		<h1>Search for a Program Manager</h1>
		<form method="get">
			<b>Program Manager Email Address:</b><br>
			<input type="search" id="programManagerEmail"><br><br>
			<input type = "submit" value = "Search">
		</form>
<table>
</table>

</body>

</html>
