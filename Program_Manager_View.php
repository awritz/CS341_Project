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
<style type="text/css">
     //add CSS code here
 </style>
</head>

<BODY BGCOLOR="#000000" TEXT="#FF6600">
<table border="0" cellpadding="0" cellspacing="0" width="600">
  <tr><td WIDTH="112" HEIGHT="112"><IMG BORDER="0" SRC="images/basketball.png" WIDTH="157" HEIGHT="123">
  </td><td WIDTH="479" HEIGHT="112"><FONT SIZE="4">Welcome to the Volunteer Application: Program Manager View.</FONT>
  </td></tr>
  <tr><td COLSPAN="2" WIDTH="598">
      <hr color='#FF6600' ALIGN='left'>
  </td></tr>
</table>

<form action = "redirect_logout.php" method = "post">
	<input type = "submit" value = "Logout" style="position: fixed; top: 10px; right: 10px; border: 10;">
</form>

 <!-- Add Event -->
		<h1>Add Event</h1>
		<form method="post">
			<b>Event Name:</b><br>
			<input type="text" id="event_name" name = "pm_event_add_name"><br><br>
            <b>Event Date:</b><br>
            <input type="date" name="pm_event_add_date"><br></br>
			<b>Event Start Time:</b><br>
			<input type="time" id="eventStartTime" name = "pm_event_add_starttime"><br><br>
			<b>Event End Time:</b><br>
			<input type="time" id="eventEndTime" name = "pm_event_add_endtime"><br><br>
			<b>Number of Volunteers Needed:</b><br>
			<input type="number" id="numvolunteers" name = "pm_event_add_numvolunteers"><br><br>
			<input type = "submit" value = "Submit" name = "pm_event_add_submit">
			
		</form>
        
	<!-- Edit Event -->
		<h1>Edit An Event</h1>
		<form method="post">
			<b>Event ID:</b><br>
			<input type="text" id="eventID"><br><br>
			<input type = "button" value = "Search">
		</form>
        
	<!-- Delete Event -->
		<h1>Delete An Event</h1>
		<form method="post">
			<b>Event ID:</b><br>
			<input type="text" id="eventID"><br><br>
			<input type = "button" value = "Delete">
		</form>
        
        <!-- Initialize Program Manager List with empty set of program managers
		<h1>Create a New Program Manager List</h1>
		<form>
			<input type="button" value="New Program Manager List">
		</form>
        
         Program Manager Search 
		<h1>Search for a Program Manager</h1>
		<form method="post">
			<b>Program Manager Email Address:</b><br>
			<input type="search" id="programManagerEmail"><br><br>
			<input type = "submit" value = "Search">
		</form>
		-->







<script Language="php"> 

  $connection = mysql_connect('localhost', 'dckelly_Project', '2wsx#EDC') or die ('%ERROR Unable to connect to Host db<br>');
  mysql_select_db('dckelly_Volunteer')                                       or die ('   !error% Unable to open database  <br>');
  
  if (strncmp($_POST['pm_event_add_submit'], "Submit", 6) == 0){
	  for ($x = 0; $x < $_POST['pm_event_add_numvolunteers']; $x++){
		$query = "INSERT INTO Event (Name, Date, StartTime, EndTime, Volunteer, Id) 
			VALUES (\"" . $_POST['pm_event_add_name'] . "\", \"" . $_POST['pm_event_add_date'] . "\", \"" . 
			$_POST['pm_event_add_starttime'] . "\", \"" . $_POST['pm_event_add_endtime'] . "\", \"NULL\", \"NULL\" );";
		
		$result = mysql_query($query) or die('Error in query $query. ' . mysql_error());
		
	  }
  }
  
  $query  = "SELECT * FROM Event ORDER BY Date, StartTime;";
  $result = mysql_query($query)  or die ('   !error% Cannot execute query on Message table <br>' . mysql_error());

  echo "<table>";
  echo "<tr><th>Event Name</th><th>Event Date</th><th>Start Time</th><th>End Time</th><th>Volunteer</th></tr>";
  
    While ($row = mysql_fetch_row($result)){
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		if (strncmp($row[4], "NULL", 4) == 0){
			echo "<td>Volunteer Needed</td>";
		}else{
			echo "<td>" . $row[4] . "</td>";
		}
		echo "</tr>";
    }      
  
  echo "</table><br>";
  
  mysql_close($connection);
</script>
  

</body>

</html>