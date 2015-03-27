<?php
include('header.php');
?>
<div class="main">
	<div class="about">
		<div id="history"></div>
		<h1>The History of NAMI-Finger Lakes</h1>
		<div class="h1-divider"></div>
		<p>
			The <b>National Alliance on Mental Illness of the Finger Lakes</b> (NAMI-Finger Lakes) began in 1985 as an independent
			 local organization called FLAMI (Finger Lakes Alliance for the Mentally Ill).
			Then as now, FLAMI's goals were to:
		</p>
			<ul>
				<li>
					Provide support for families, relatives, and friends of people diagnosed with major mental illnesses
				</li>
				<li>
					Educate them and the public about serious mental illnesses
				</li>
				<li>
					Advocate for the families as well as their ill family members
				</li>
			</ul>
		<p>
			FLAMI eventually became NAMI-Finger Lakes, which is one of 71 affiliates of <a target="_blank" href="http://www.naminys.org">NAMI-NYS</a>
			 (NAMI-New York State), and is also one of more than 1,090 nationally affiliated <a target="_blank" href="http://www.nami.org">NAMI</a> groups.
		</p>
		<p>
			NAMI-Finger Lakes is a currently an 85-member Ithaca, NY support, education, and advocacy group for families with 
			relatives suffering from major mental illnesses.  We are run by unpaid volunteers  - all of whom have relatives 
			diagnosed with mental illness.
		</p>

		<div id="ourgoals"></div>
		<div class="well">
		<h1>Our Goals</h1>
		<br>
			<ul>
				<li>
					Provide a self-help group for parents, spouses, siblings, children and friends of people with mental illness. 
					(This group is currently meeting 1st Tuesdays of each month)
				</li>
				<li>
					Educate ourselves and the public about the truth concerning the major mental illnesses, and seek to change 
					stereotypes and overcome stigma
				</li>
				<li>
					Advocate for the best possible delivery of mental health services for people suffering from these conditions
				</li>
				<li>
					Support research for improved medications and treatments for people with mental illnesses today, and to find 
					the causes of mental illnesses now and for the future
				</li>
			</ul>
		</div> <!-- .well -->
	</div> <!-- .about -->
	
	

	<div class="h1-divider" id="people"></div>
	<div style="width:100%;overflow:hidden">
		<h1 class="h1-col" style="width:60%">Year at a Glance</h1><h1 class="h1-col" style="width: 38%">Contact Us</h1>
	</div>
	<div class="h1-divider"></div>
	<div class="cols-full">
	<div class="col-left-half">
		<!--<div class="col-half">
		<h4><b>2012 Board of Directors:</b></h4>
			<ul>
				<li>Barbara Anible</li>
				<li>Joanne Denison</li>
				<li>Peter Harriott</li>
				<li>Mark Lenzenweger</li>
				<li>Derek Osborne</li>
				<li>Jean Poland</li>
				<li>Sherry Scott</li>
				<li>Joan Speilholz</li>
				<li>William Staffeld</li>
			</ul>

		</div> 
		<div class="col-half">
			<h4><b>2011 Officers:</b></h4>
			<ul>
				<li><b>President</b> - Deborah Grantham</li>
				<li><b>Vice-President</b> - Jean Poland</li>
				<li><b>Treasurer</b> - Joanne Dennison</li>
				<li><b>Recording Secretary</b> - Sherry Scott</li>
				<li><b>Corresponding Secretary</b> - Barbara Anible</li>
			</ul>
			<h4><b>2011 Committee Chairs:</b></h4>
			<ul>
				<li><b>Support</b> - Jean Walters</li>
				<li><b>Education</b> - Barbara Anible</li>
				<li><b>Fundraising</b> - Deb Grantham</li>
				<li><b>Website &amp; Technology</b> - Bruce McKee</li>
			</ul>




		</div> --> <!-- .col-half -->
		<div id="yearataglance"></div>
		<div class="well" style="background:white;">
		<p style="text-align:center"> Select a year to view events, newsletters, and news stories from that year. </p>
		<form class="form-inline" role="form" action="aboutus.php#yearataglance" method="post" id="yaag">
			<div class="form-group">
				<label for="startdate">Year</label>
				<input type="number" id="startdate" class="form-control" min="2005" max="2014" name="startdate"
				<?php if( isset( $_POST['startdate'] )) echo ' value="'.$_POST['startdate'].'"'; ?>
				>
			</div>
			<input type="submit" class="btn btn-primary">
		</form>
		<?php
		if( isset( $_POST['startdate'] )) {
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if ($mysqli->errno) {
				print($mysqli->error);
				exit();
			}
			$year = $_POST['startdate'];
			$newsQuery = "SELECT * FROM News WHERE year = $year";
			$newslettersQuery = "SELECT * FROM Newsletters WHERE year = $year";
			$reportQuery = "SELECT * FROM  Reports WHERE year = $year";
			$newsResults = $mysqli->query($newsQuery);
			if($newsResults) {
				print("<div class='h1-divider'></div>");
				print("<h2> News Articles from $year</h2>");
				print("<div class='h1-divider'></div>");
				print("<ul>");
				$result = false;
				while ($array = $newsResults ->fetch_row()) {
					print("<li><p>$array[2]</p></li>");
					//if($array[3]) print("<p>$array[3]</h2>");
					//else print("<p> This news piece has no content.");
					$result = true;
				}
				if(!$result) { print("No news for $year"); }
				print("</ul>");
			}
			$newsletterResults = $mysqli->query($newslettersQuery);
			if($newsletterResults) {
				print("<div class='h1-divider'></div>");
				print("<h2> Newsletters from $year</h2>");
				print("<div class='h1-divider'></div>");
				print("<ul>");
				$result = false;
				while($array = $newsletterResults->fetch_row()) {
					print("<li><a target='_blank' href='$array[1]'>$array[2] $array[3]</a></li>");
					$result = true;
				}
				if(!$result) { print("No newsletters for $year"); }
				print("</ul>");
			}
			$reportResults = $mysqli->query($reportQuery);
			if($reportResults) {
				print("<div class='h1-divider'></div>");
				print("<h2> Annual report from $year</h2>");
				print("<div class='h1-divider'></div>");
				print("<ul>");
				$result = false;
				while($array = $reportResults->fetch_row()) {
					print("<li><a target='_blank' href='$array[1]'>$array[2] report</a></li>");
					$result = true;
				}
				if(!$result) { print("No report for $year"); }
				print("</ul>");
			}
			$mysqli->close();
		}

		?>
	</div>

	</div> <!-- .col-left-half -->
	<div class="col-right-half">

	<p>
		<i class="fa fa-phone" data-toggle="tooltip" data-placement="left" title="Phone"></i> <b>(607) 273-2462</b>
	</p>
	<p>
		<i class="fa fa-envelope" data-toggle="tooltip" data-placement="left" title="Email"></i> <a href="mailto:namifl@hotmail.com"><b>namifl@hotmail.com</b></a>
	</p>
	<p>
		<i class="fa fa-map-marker" data-toggle="tooltip" data-placement="left" title="Address"></i> 
		<b><a href="https://www.google.com/maps/place/430+W+State+St/@42.43932,-76.5042068,17z/data=!4m7!1m4!3m3!1s0x89d0817646d82329:0x40a407b0d7d9b399!2s430+W+State+St!3b1!3m1!1s0x89d0817646d82329:0x40a407b0d7d9b399">
			Visit our office</a> (appointment only):
		</b>
	</p>
	<div class="indent">
		West Side Office Center #3<br>
		430 West State Street<br>
		Enter from Corn Street alley with Yoga figure at end, second floor, office #3.
	</div>
	<p>
		<i class="fa fa-plus"></i> <b>Mailing Address for Correspondence:</b>
	</p>
	<div class="indent">
		NAMI Finger Lakes, Inc.<br>
		PO Box 6544<br>
		Ithaca, NY 14851-6544
	</div>

	</div> <!-- .col-right-half -->
	</div> <!-- .cols-full -->

	<!--<div id="yearataglance"></div>
	<div class="well" style="margin-top:25px; background:white; width:920px; margin-left:80px;">
		<h1>Year At A Glance</h1><br>
		<p style="text-align:center"> Select a year after 2005 to view all events, newsletters, and news stories for that year. </p>
		<form class="form-inline" role="form" action="aboutus.php#yearataglance" method="post" id="yaag">
			<div class="form-group">
				<label for="startdate">Year</label>
				<input type="number" id="startdate" class="form-control" min="2005" max="2014" name="startdate"
				<?php if( isset( $_POST['startdate'] )) echo ' value="'.$_POST['startdate'].'"'; ?>
				>
			</div>
			<input type="submit" class="btn btn-primary">
		</form>
		<?php
		if( isset( $_POST['startdate'] )) {
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if ($mysqli->errno) {
				print($mysqli->error);
				exit();
			}
			$year = $_POST['startdate'];
			$newsQuery = "SELECT * FROM News WHERE year = $year";
			$newslettersQuery = "SELECT * FROM Newsletters WHERE year = $year";
			$newsResults = $mysqli->query($newsQuery);
			if($newsResults) {
				print("<h4> Relevant news articles from $year</h4><br>");
				while ($array = $newsResults ->fetch_row()) {
					print("<p><b>$array[2]</b></p>");
					if($array[3]) print("<p>$array[3]</h2>");
					else print("<p> This news piece has no content.");
				}
				print("<br>");
			}
			$newsletterResults = $mysqli->query($newslettersQuery);
			if($newsletterResults) {
				print("<h4> Relevant newsletters from $year</h4><br>");
				print("<ul>");
				while($array = $newsletterResults->fetch_row()) {
					print("<li><a target='_blank' href='$array[1]'>$array[2] $array[3]</a></li>");
				}
				print("</ul>");
			}
		}

		?>
	</div> -->

	
	
</div> <!-- .main -->

<?php
include('footer.php');
?>