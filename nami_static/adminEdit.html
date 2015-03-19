<?php session_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>	
	<?php
	include('header.php');
	
	if(isset($_POST['addBook'])) { add_book(); }
	elseif(isset($_POST['deleteBook'])) { delete_book(); }
	elseif(isset($_POST['addEvent'])) { add_event(); }
	elseif(isset($_POST['deleteEvent'])) { delete_event(); }
	elseif(isset($_POST['uploadNewsletter'])) { upload_newsletter(); }
	elseif(isset($_POST['deleteNewsletter'])) { delete_newsletter(); }
	elseif(isset($_POST['uploadReport'])) { upload_report(); }
	elseif(isset($_POST['deleteReport'])) { delete_report(); }
	else { echo "Error: Please submit changes to the site first."; }
	
	// TODO: If logged_user is the admin user, then this page will be available as a link

	// TODO: Add following forms:
	// ADD/DELETE Books/Events Form
	// Upload Newsletter form
	// Form will have all relevant fields and a submit button
	// TODO: Check which button is clicked and call the relevant function

	function add_book() {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		// TODO: Use POST request to get all fields from the add book form
		// TODO: Construct the query to add the book to the database using given fields
		//TODO: Query the database with the add query
		//TODO: If any errors along the way, log the errors and call handle_errors()
		$title = $_POST['title'];
		$year = $_POST['year'];
		$tags = array();
		
		$fNames = array();
		$lNames = array();
		
		$numNewAuthors = 0;
		// Parse in each author name entry and populate fNames and lNames arrays
		if(isset($_POST['newAuthors'])) {
			$text = trim($_POST['newAuthors']);
			$names = explode("\n", $text);
			$names = array_filter($names, 'trim');
			$i=1;
			foreach($names as $name) {
				$nameStructure = explode(",", $name);
				if (sizeof($nameStructure > 0)) {
					if (sizeof($nameStructure) > 2) {
						print("Error: Too many entries with author entry $i.");
						exit();
					}
					$fName = trim($nameStructure[0]);
					if (sizeof($nameStructure) == 2) {
						$lName = trim($nameStructure[1]);
					} else {
						$lName = "";
					}
					array_push($fNames, $fName);
					array_push($lNames, $lName);
				}
				$i++;
			}
			$numNewAuthors = $i-1;
		}
		// Adds tags checked in form to array
		if(isset($_POST['existingAuthors'])) {
			$authorIDs = $_POST['existingAuthors'];
			foreach($authorIDs as $authorID) {
				$authorQuery = "SELECT fName, lName
						FROM Authors
						WHERE authorID = \"$authorID\";";
				$authorResult = $mysqli->query($authorQuery);
				$row = $authorResult->fetch_row();
				$fName = $row[0];
				$lName = $row[1];
				array_push($fNames, $fName);
				array_push($lNames, $lName);
			}
		}
		
		// Adds tags checked in form to array
		if(isset($_POST['existingTags'])) {
			$tags = $_POST['existingTags'];
		}
		// Adds new tags entered in textarea to array
		if(isset($_POST['newTags'])) {
			$text = trim($_POST['newTags']);
			$newTags = explode("\n", $text);
			$newTags = array_filter($newTags, 'trim');
			foreach($newTags as $tag) {
				array_push($tags, $tag);
			}
		}
		// Add book
		$bookQuery = "SELECT COUNT(*) AS count, bookID
			      FROM Books
			      WHERE title = \"$title\" && year = \"$year\";";
		$bookSearched = $mysqli->query($bookQuery);
		$numMatches = -1;
		$bookID = -1;
		if($bookSearched) {
			$result = $bookSearched->fetch_assoc();
			$numMatches = $result['count'];
			$bookID = $result['bookID'];
		}
		$bookAdded = false;
		if($numMatches < 1) {
			$bookQuery = "INSERT INTO Books (bookID, title, year)
				      VALUES (NULL, \"$title\", \"$year\");";
			$bookAdded = $mysqli->query($bookQuery);
		}
		if($bookAdded) {
			print("Book added successfully.<br>");
			$bookID = $mysqli->insert_id;
		}
		// Add each author
		for($i=0; $i<sizeof($fNames); $i++) {
			$fName = $fNames[$i];
			$lName = $lNames[$i];
			$authorQuery = "SELECT COUNT(*), authorID
					FROM Authors
					WHERE fName = \"$fName\" && lName = \"$lName\";";
			$authorsCounted = $mysqli->query($authorQuery);
			if ($authorsCounted) {
				$array = $authorsCounted->fetch_row();
				$numAuthors = $array[0];
				$authorID = $array[1];
				if ($numAuthors == 0 && $i < $numNewAuthors) {
					$authorQuery = "INSERT INTO Authors (authorID, fName, lName)
							VALUES (NULL, \"$fName\", \"$lName\");";
					$authorAdded = $mysqli->query($authorQuery);
					if ($authorAdded) {
						$authorID = $mysqli->insert_id;
						print("Author added successfully.<br>");
					}
				}
				
				$writtenByQuery = "INSERT INTO WrittenBy (bookID, authorID)
						   VALUES (\"$bookID\", \"$authorID\");";
				$writtenByAdded = $mysqli->query($writtenByQuery);
				if($writtenByAdded) { print("Author relation added successfully.<br>"); }
				
			}
		}
		foreach($tags as $tag) {
			$tagQuery = "INSERT INTO Tags (tag)
				     VALUES (\"$tag\");";
			$tagAdded = $mysqli->query($tagQuery);
			if($tagAdded) { print("Tag added successfully.<br>"); }
			$taggedByQuery = "INSERT INTO TaggedBy (bookID, tag)
					  VALUES (\"$bookID\", \"$tag\");";
			$taggedByAdded = $mysqli->query($taggedByQuery);
			if($taggedByAdded) { print("Tag relation added successfully.<br>"); }
		}
		$mysqli->close();
	}


	function delete_book() {
		// TODO: Get the value from the delete book form
		// TODO: Construct the query to delete the book to the database using given field
		//TODO: Query the database with the delete query
		// TODO: If any errors along the way, log the errors and call handle_errors()
		$bookID = $_POST['bookID'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		$bookQuery = "DELETE FROM Books
			      WHERE bookID = \"$bookID\";";
		$bookDeleted = $mysqli->query($bookQuery);
		if($bookDeleted) { print("Book deleted successfully.<br>"); }
		$mysqli->close();
	}

	function add_event() {
		// TODO: Use POST request to get all fields from the add event form
		// TODO: Construct the query to add the event to the database using given fields
		//TODO: Query the database with the add query
		//TODO: If any errors along the way, log the errors and call handle_errors()
		$title = $_POST['title'];
		$date = $_POST['date'];
		$content = $_POST['content'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		$eventQuery = "INSERT INTO Events (eventID, title, date, content)
				   VALUES (NULL, \"$title\", \"$date\", \"$content\");";
		$eventAdded = $mysqli->query($eventQuery);
		if($eventAdded) { print("Event added successfully. <a href='events.php'>Return to events.</a><br>"); }
		else { print("There was an error adding the event. Please try again.");}
		$mysqli->close();
	}

	function delete_event() {
		// TODO: Get the value from the delete event form
		// TODO: Construct the query to delete the event to the database using given field
		//TODO: Query the database with the delete query
		// TODO: If any errors along the way, log the errors and call handle_errors()
		$eventID = $_POST['eventID'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		$eventQuery = "SELECT url
				    FROM Newsletters
				    WHERE newsletterID = \"$newsletterID\";";
		$eventQueried = $mysqli->query($eventQuery);
		$row = $eventQueried->fetch_row();
		$url = $row[0];
		$eventQuery = "DELETE FROM Events
			       WHERE eventID = \"$eventID\";";
		$eventDeleted = $mysqli->query($eventQuery);
		unlink($url);
		if($eventDeleted) { print("Event deleted successfully.<br>"); }
		$mysqli->close();
	}

	function upload_newsletter() {
		// TODO: Use POST request to get all fields from the add newsletter form
		// TODO: Construct the query to add the newsletter to the database using given fields
		//TODO: Query the database with the add query
		// TODO: Handle the uploaded newsletter (i.e. move from temporary location on server to newsletters folder)
		//TODO: If any errors along the way, log the errors and call handle_errors()
		$season = $_POST['season'];
		$year = $_POST['year'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		if (!empty($_FILES['newsletter'])) {
			$newsletter = $_FILES['newsletter'];
			$originalName = $newsletter['name'];
			$error = $newsletter['error'];
			$byteSize = $newsletter['size'];
			$type = $newsletter['type'];
			if($error == 0 && $byteSize < 5000000 & ($type == "application/pdf" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/tif" ||$type == "image/tiff" || $type == "image/gif")) {
				$source = $newsletter['tmp_name'];
				$file ="/home/info230/SP14/users/giveus/www/newsletters/$originalName";
				$url = "newsletters/$originalName";
				move_uploaded_file($source, $file);
				print("The file $originalName was uploaded to the server successfully.<br>");
				$newsletterQuery = "INSERT INTO Newsletters (newsletterID, url, season, year)
						    VALUES (NULL, \"$url\", \"$season\", \"$year\");";
				$newsletterAdded = $mysqli->query($newsletterQuery);
				if($newsletterAdded) { print("Newsletter added successfully.<br>"); }
			}
		}
		$mysqli->close();
	}
	
	function delete_newsletter() {
		// TODO: Get the value from the delete event form
		// TODO: Construct the query to delete the event to the database using given field
		//TODO: Query the database with the delete query
		// TODO: If any errors along the way, log the errors and call handle_errors()
		$newsletterID = $_POST['newsletterID'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		$newsletterQuery = "SELECT url
				    FROM Newsletters
				    WHERE newsletterID = \"$newsletterID\";";
		$newsletterQueried = $mysqli->query($newsletterQuery);
		$row = $newsletterQueried->fetch_row();
		$url = $row[0];
		$newsletterQuery = "DELETE FROM Newsletters
				    WHERE newsletterID = \"$newsletterID\";";
		$newsletterDeleted = $mysqli->query($newsletterQuery);
		unlink($url);
		if($newsletterDeleted) { print("Newsletter deleted successfully.<br>"); }
		$mysqli->close();
	}
	
	function upload_report() {
		// TODO: Use POST request to get all fields from the add newsletter form
		// TODO: Construct the query to add the newsletter to the database using given fields
		//TODO: Query the database with the add query
		// TODO: Handle the uploaded newsletter (i.e. move from temporary location on server to newsletters folder)
		//TODO: If any errors along the way, log the errors and call handle_errors()
		$year = $_POST['year'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		if (!empty($_FILES['report'])) {
			$report = $_FILES['report'];
			$originalName = $report['name'];
			$error = $report['error'];
			$byteSize = $report['size'];
			$type = $report['type'];
			if($error == 0 && $byteSize < 5000000 & ($type == "application/pdf" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/tif" ||$type == "image/tiff" || $type == "image/gif")) {
				$source = $report['tmp_name'];
				$file ="/home/info230/SP14/users/giveus/www/newsletters/$originalName";
				$url = "newsletters/$originalName";
				move_uploaded_file($source, $file);
				print("The file $originalName was uploaded to the server successfully.<br>");
				$reportQuery = "INSERT INTO Reports (reportID, url, year)
						    VALUES (NULL, \"$url\", \"$year\");";
				$reportAdded = $mysqli->query($reportQuery);
				if($reportAdded) { print("Annual Report added successfully.<br>"); }
			}
		}
		$mysqli->close();
	}
	
	function delete_report() {
		// TODO: Get the value from the delete event form
		// TODO: Construct the query to delete the event to the database using given field
		//TODO: Query the database with the delete query
		// TODO: If any errors along the way, log the errors and call handle_errors()
		$reportID = $_POST['reportID'];
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli->errno) {
			print($mysqli->error);
			exit();
		}
		$reportQuery = "SELECT url
				    FROM Reports
				    WHERE reportID = \"$reportID\";";
		$reportQueried = $mysqli->query($reportQuery);
		$row = $reportQueried->fetch_row();
		$url = $row[0];
		$reportQuery = "DELETE FROM Reports
				    WHERE reportID = \"$reportID\";";
		$reportDeleted = $mysqli->query($reportQuery);
		unlink($url);
		if($reportDeleted) { print("Annual report deleted successfully.<br>"); }
		$mysqli->close();
	}
	?>

</html>