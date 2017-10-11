<?php
  session_start();
  
  $connection = mysql_connect('localhost', 'dckelly_Project', '2wsx#EDC') or die ('%ERROR Unable to connect to Host db<br>');
  mysql_select_db('dckelly_Volunteer')                                       or die ('   !error% Unable to open database  <br>');

  $query  = "SELECT * FROM Login WHERE Email = '" . $_POST['uname'] . "' AND Password = '" . $_POST['psw'] . "';";
  $result = mysql_query($query)  or die ('   !error% Cannot execute query on Message table <br>' . mysql_error());
  
  if (mysql_num_rows($result) != 1){
	  	header("Location:http://volunteer.visionkelly.net/Volunteer_Login.php");
  }
  
  $row = mysql_fetch_row($result);

  if(strcmp($row[3], 'Admin') == 0 && strcmp($_POST['uname'], $row[0]) == 0 && strcmp($_POST['psw'], $row[6]) == 0){
	  header("Location:http://volunteer.visionkelly.net/Admin_View.php");
  }else if(strcmp($row[3], 'ProgramManager') == 0 && strcmp($_POST['uname'], $row[0]) == 0 && strcmp($_POST['psw'], $row[6]) == 0){
	  header("Location:http://volunteer.visionkelly.net/Program_Manager_View.php");
  }else if(strcmp($row[3], 'Volunteer') == 0 && strcmp($_POST['uname'], $row[0]) == 0 && strcmp($_POST['psw'], $row[6]) == 0){
	  header("Location:http://volunteer.visionkelly.net/Volunteer_View.php");
  }else{
	  header("Location:http://volunteer.visionkelly.net/Volunteer_Login.php");
  }

?>