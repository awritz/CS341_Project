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
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class = "center">
<BODY BGCOLOR="#000000" TEXT="#FF6600">
<table border="0" cellpadding="0" cellspacing="0" width="600">
  <tr><td WIDTH="112" HEIGHT="112"><IMG BORDER="0" SRC="images/basketball.png" WIDTH="157" HEIGHT="123">
  </td><td WIDTH="479" HEIGHT="112"><FONT SIZE="4">Welcome to the Volunteer Application: Admin View.</FONT>
  </td></tr>
  <tr><td COLSPAN="2" WIDTH="598">
      <hr color='#FF6600' ALIGN='left'>
  </td></tr>
  </table>
  
  <form action = "redirect_logout.php" method = "post">
	<input type = "submit" value = "Logout" style="position: fixed; top: 10px; right: 10px; border: 10;">
  </form>
  
		<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addV">Add Volunteer</button>
  <div id="addV" class="collapse">
    <form id="addVolunteer" method="post">
			<b>First Name:</b><br>
			<input type="text" id="firstName" name = "admin_vol_add_firstname"><br><br>
			<b>Last Name:</b><br>
			<input type="text" id="lastName" name = "admin_vol_add_lastname"><br><br>
            
			<b>Grade:</b><br>
			<select id="grade" name = "admin_vol_add_grade">
				<option value = "Freshman">Freshman</option>
				<option value = "Sophomore">Sophomore</option>
				<option value = "Junior">Junior</option>
				<option value = "Senior">Senior</option>
				<option value = "Staff">Staff</option>
			</select> <br> <br>
            
			<b>Age:</b><br>
			<input type = "number" id = "age" name = "admin_vol_add_age"> <br> <br>
            
			<b>School E-mail:</b>
			<input type="email" name="admin_vol_add_email"> <br> <br>
  
			<b>Phone Number:</b><br>
			<input type = "text" id = "phone" name = "admin_vol_add_phone"> <br> <br>
  
			<b>User password:</b><br>
			<input type="password" name="admin_vol_add_psw"><br><br>
			<input type = "submit" value = "Submit" name = "admin_vol_add_submit"/>
		</form>
  </div>
</div>
  </tr>
  
  <!-------Delete Volunteer -->
  <div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#deleteV">Delete Volunteer</button>
  <div id="deleteV" class="collapse">
  <form id="deleteVolunteer" method="post">
			<b>School E-mail:</b>
			<input type="email" name="email"> <br> <br>
			<input type = "submit" value = "Submit"/>
		</form>
  </div>
</div>
		
<!-- Edit volunteer -->
	<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#editV">Edit Volunteer</button>
  <div id="editV" class="collapse">
		<form id ="editVolunteer" method="get">
			<b>First Name:</b><br>
			<input type="text" id="firstName"><br><br>
			<b>Last Name:</b><br>
			<input type="text" id="lastName"><br><br>
            
			<b>Grade:</b><br>
			<select id="grade">
				<option value = "Freshman">Freshman</option>
				<option value = "Sophomore">Sophomore</option>
				<option value = "Junior">Junior</option>
				<option value = "Senior">Senior</option>
				<option value = "Staff">Staff</option>
			</select> <br> <br>
            
			<b>Birthdate:</b><br>
			<input type = "date" id = "bday"> <br> <br>
            
			<b>School E-mail:</b>
			<input type="email" name="email"> <br> <br>
  

			<b>User name:</b><br>
			<input type="text" name="username"><br><br>
			<b>User password:</b><br>
			<input type="password" name="psw"><br><br>
			<input type = "submit" value = "Submit"/>
		</form>
		</div></div>
		
	<!-- Add program manager -->
	<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addPM">Add Program Manager</button>
  <div id="addPM" class="collapse">
		<form id="addProgramManager" method="post">
			<b>First Name:</b><br>
			<input type="text" id="firstName" name = "admin_pm_add_firstname"><br><br>
			<b>Last Name:</b><br>
			<input type="text" id="lastName" name = "admin_pm_add_lastname"><br><br>
            
			<b>Grade:</b><br>
			<select id="grade" name = "admin_pm_add_grade">
				<option value = "Freshman">Freshman</option>
				<option value = "Sophomore">Sophomore</option>
				<option value = "Junior">Junior</option>
				<option value = "Senior">Senior</option>
				<option value = "Staff">Staff</option>
			</select> <br> <br>
			
			<b>Age:</b><br>
			<input type = "number" id = "age" name = "admin_pm_add_age"> <br> <br>
            
			<b>E-mail:</b>
			<input type="email" name="admin_pm_add_email"> <br> <br>
  
			<b>Phone Number:</b><br>
			<input type = "text" id = "phone" name = "admin_pm_add_phone"> <br> <br>
  
  
			<b>User password:</b><br>
			<input type="password" name="admin_pm_add_psw"><br><br>
			<input type = "submit" value = "Submit" name = "admin_pm_add_submit"/>
		</form>
		</div></div>
		
	<!-- Edit program manager -->
	<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#editPM">Edit Program Manager</button>
  <div id="editPM" class="collapse">
		<form id="editProgramManager" method="post">
			<b>First Name:</b><br>
			<input type="text" id="firstName"><br><br>
			<b>Last Name:</b><br>
			<input type="text" id="lastName"><br><br>
           
			<b>Birthdate:</b><br>
			<input type = "date" id = "bday"> <br> <br>
            
			<b>E-mail:</b>
			<input type="email" name="email"> <br> <br>
 
			<b>User name:</b><br>
			<input type="text" name="username"><br><br>
			<b>User password:</b><br>
			<input type="password" name="psw"><br><br>
			<input type = "submit" value = "Submit"/>
		</form>
		</div></div>
		
	<!-- Delete program manager -->
	<div class="container">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#deletePM">Delete Program Manager</button>
  <div id="deletePM" class="collapse">
		<form id="deleteProgramManager" method="post">
			<b>School E-mail:</b>
			<input type="email" name="email"> <br> <br>
			<input type = "submit" value = "Submit"/>
		</form>
		</div></div>
	
	<!-- Send email -->
			<form id="sendEmail" method="post">
			<button type="button" class="btn btn-primary">Send Email</button>
		</form>

	</div>
  
<script Language="php"> 

  $connection = mysql_connect('localhost', 'dckelly_Project', '2wsx#EDC') or die ('%ERROR Unable to connect to Host db<br>');
  mysql_select_db('dckelly_Volunteer')                                       or die ('   !error% Unable to open database  <br>');
  
  if (strncmp($_POST['admin_vol_add_submit'], "Submit", 6) == 0){
		$query = "INSERT INTO Login (Email, FirstName, LastName, Access, PhoneNumber, 
			Age, Password) VALUES (\"" . $_POST['admin_vol_add_email'] . "\", \"" . $_POST['admin_vol_add_firstname'] . "\", \"" . 
			$_POST['admin_vol_add_lastname'] . "\", \"Volunteer\", \"" . $_POST['admin_vol_add_phone'] . 
			"\", \"" . $_POST['admin_vol_add_age'] . "\", \"" . $_POST['admin_vol_add_psw'] . "\");";
		
		$result = mysql_query($query) or die('Error in query $query. ' . mysql_error());
		
		echo "<h1>New Volunteer added with the name ". $_POST['admin_vol_add_firstname'] . " " . $_POST['admin_vol_add_lastname'] . "</h1><br>";
		
  }else if (strncmp($_POST['admin_pm_add_submit'], "Submit", 6) == 0){
		$query = "INSERT INTO Login (Email, FirstName, LastName, Access, PhoneNumber, 
			Age, Password) VALUES (\"" . $_POST['admin_pm_add_email'] . "\", \"" . $_POST['admin_pm_add_firstname'] . "\", \"" . 
			$_POST['admin_pm_add_lastname'] . "\", \"ProgramManager\", \"" . $_POST['admin_pm_add_phone'] . 
			"\", \"" . $_POST['admin_pm_add_age'] . "\", \"" . $_POST['admin_pm_add_psw'] . "\");";
		
		$result = mysql_query($query) or die('Error in query $query. ' . mysql_error());
		
		echo "<h1>New Program Manager added with the name ". $_POST['admin_pm_add_firstname'] . " " . $_POST['admin_pm_add_lastname'] . "</h1><br>";
		
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
  /*
  $query  = "SELECT * FROM Login ;";
  $result = mysql_query($query)  or die ('   !error% Cannot execute query on Message table <br>' . mysql_error());

    While ($row = mysql_fetch_row($result)){
		echo "<br>Login Name<br>" . $row[0] . "<br>";
		echo "<br>First Name<br>" . $row[1] . "<br>";
		echo "<br>Last Name<br>" . $row[2] . "<br>";
		echo "<br>Access<br>" . $row[3] . "<br>";
    }      
  */
</script>
  


	
	
</body>

</html>
