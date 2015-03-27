<?php
session_start();
include('header.php');
?>


<div class="main">
	<div id="events"></div>
	<h1 style="margin-bottom: 20px">Events</h1>
	<div class="well">
		<h2>Monthly Support Group Meetings</h2>
		<div class="h1-divider" style="background-color:#ADADAD"></div>
		<p>
			Support Group meetings are held first Tuesdays of every month from 7-8:30PM, and third Thursdays from 1:30-3:30PM.
		</p>  
		<p>
			Call <b>607-273-2462</b> for details or e-mail <a href="mailto:namifl@hotmail.com">namifl@hotmail.com</a>. This support group is open to all - you don't have to be a NAMI Finger Lakes member to participate!
		</p>
		<br>
		<h2>Current/Upcoming Events</h2>
		<div class="h1-divider" style="background-color:#ADADAD"></div>
		<?php
			//Will display all events currently in database here.
			//TODO: Use the configuration file to get valid database credentials
			//TODO: Initialize mysql variable using the valid credentials
			// TODO: If error with connecting then log error and call handle_errors()
			// TODO: Call display_events()
			//TODO: Construct SQL query to retrieve a list of all events from the database
			//TODO: Query database with constructed query and store in list
			//TODO: Use well formatted list to print all the information on every event on the page using the list
			//TODO: If any errors along the way then log errors and call handle_errors()
			// Nitin: here's the code to grab the year from the date stored in the database...
			// $dateArr = explode("-", trim($date));
			// $year = $dateArr[0];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    	if ($mysqli->errno) {
            print($mysqli->error);
            exit();
    	}
    	$eventQuery = "SELECT * FROM Events";
    	$eventResults = $mysqli->query($eventQuery);
    	if($eventResults) {
    		while($array = $eventResults->fetch_row()) {
    			print("<p><b>$array[1]: $array[2]</b></p>");
    			print("<p>$array[3]</p>");
    		}
    	}
    	else {
    		print("<p><b> No Upcoming Events </b></p>");
    	}

		?>
	</div>
	
	
	
	
	<?php
	if(isset($_SESSION['logged_user']) && $_SESSION['logged_user'] == ADMIN_USERNAME) {
	?>
	<!-- Form to add (/edit?) News-->
	<h1>Add a new event:</h1>
	<div class="well" style="background:white; margin-top: 20px">
		<form role="form"action="adminEdit.php" method="post">
		  <div class="form-group">
		    <label for="eventtitle">Event title</label>
		    <input type="text" name="title" class="form-control" id="eventtitle" placeholder="Event" required>
		  </div>
		  <div class="form-group">
		    <label for="eventdate">Date</label>
		    <input type="date" name="date" class="form-control" id="eventdate" required>
		  </div>
		  <div class="form-group">
		  	<label for="eventcontent">Content</label>
		  	<textarea name="content" class="form-control" rows="3" id="eventcontent" placeholder="Event description"></textarea>
		  </div>
		  <input type="submit" name="addEvent" value="Add Event" class="btn btn-primary btn-lg">
		</form>
	</div>
	<?php } ?>
	
	

	<h1 id="cal">
		<i class="fa fa-calendar-o" style="float:left"></i><div id="day-number"><?php echo date("d") ?></div>
		Calendar - <?php echo date("F Y") ?>
	</h1>
	<div class="h1-divider"></div>
	<iframe id="calendar" src="https://www.google.com/calendar/embed?src=3rktjup8cupdj5q08tp3g3nq1s%40group.calendar.google.com&amp;ctz=America/New_York" style="border: 0" width="800" height="600"></iframe>
</div> <!-- .main -->




<?php
include('footer.php');
?>