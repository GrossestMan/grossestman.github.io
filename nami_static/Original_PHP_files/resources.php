<?php
session_start();
include('header.php');
?>

<h1 style="margin-bottom: 20px">Resources</h1>

<div class="cols-full">
	<div class="well" id="emergency" style='background:white;width:1065px;margin-left:10px;'>
		<h2><i class="fa fa-warning" style='color:#D61D1D;'></i> In case of Emergencies</h2>
		<p>If you are in an emergency situation, then please consult our <b>Crisis File</b>. We've been there, and we'd like to help you.</p>
		<p><a target="_blank" href="newsletters/Crisisfile.pdf" class="btn btn-danger" style="color: white; font-weight: bold;" role="button">Crisis/Support Information</a></p>      
	</div>
	<div class="col-left-half">
		<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseOne">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					  Background Information on Mental Illness
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_1">What is Mental Illness?</a>
					<br><a data-toggle="modal" data-target="#myModal_2">Recommended Books on Mental Illness, Family Issues, and Medications</a>
					<br><a target="_blank" href="http://www.nami.org/template.cfm?section=About_Medications">General Information on Medications</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseTwo">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					  Psychiatric Care
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_3">Psychiatric Care in Ithaca, NY and Nearby Cities</a>
					<br><a data-toggle="modal" data-target="#myModal_4">Special Care, Recovery, and Diagnostic Facilities</a>
					<br><a data-toggle="modal" data-target="#myModal_5">Resources for Checking Out Hospitals, Doctors, and Treatments</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseThree">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					  Paying for Health Care
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_6">Paying for Health Care in Tompkins County</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseFour">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
					  Problems Associated with Mental Illness
					</a>
				  </h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_7">Dual-Diagnosis (mentally ill & addicted to drugs/alcohol)</a>
					<br><a data-toggle="modal" data-target="#myModal_8">Mental Illness and the Criminal Justice System</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseSix">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
					  Using the Web to Research Mental Illness Treatments and Medications
					</a>
				  </h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_11">Searching the Scientific Literature & Web Sites</a>
					<br><a data-toggle="modal" data-target="#myModal_12">Organizations Developing New Treatments & Medications</a>
					<br><a data-toggle="modal" data-target="#myModal_13">Web sites for Borderline Personality Disorder Research and Treatment</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseSeven">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
					  Military Mental Health Care
					</a>
				  </h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a target="_blank" href="http://www.nami.org/Template.cfm?Section=Veterans_Resources&Template=/ContentManagement/ContentDisplay.cfm&ContentID=53587&lstid=879">NAMI Veterans Resource Center</a>
					<br><a target="_blank" href="http://www.ptsd.va.gov/">National Center for PTSD</a></p>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" data-parent="#accordion" data-toggle="collapse" data-target="#collapseFive">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
					  Other Resources
					</a>
				  </h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse">
				  <div class="panel-body">
					<p><a data-toggle="modal" data-target="#myModal_9">NY State and National NAMI</a>
					<br><a data-toggle="modal" data-target="#myModal_10">Estate Planning - What Happens to my Ill Relative After I'm Gone?</a></p>
				  </div>
				</div>
			  </div>
		</div>
	</div>
	
	<div class="col-right-half">
		<div class="well" id="donate" style='background:white;'>
			<h3>Donate</h3>
			<div class="h1-divider"></div>
			<p>Donate directly <a target="_blank" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=4BwTXucbswqS5RXxnfu78gt6GYtVP9Llgfb7Ylg8rlLYqHqjaI-72KDe-Bu&dispatch=5885d80a13c0db1f8e263663d3faee8db315373d882600b51a5edf961ea39639">via Paypal</a>
			 or make a purchase <a href="http://www.amazon.com/b?node=394379011&tag=nafila-20&camp=213281&creative=386453&linkCode=ur1&adid=0SWQRACTMGJY15AS7MF2&&ref-refURL=http%3A%2F%2Fwww.namifingerlakes.org%2Famazon.htm">via the Amazon link</a> and we will recieve 4% or more of your purchase.</p>
			<div class="center-button">
				<a target="_blank" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=4BwTXucbswqS5RXxnfu78gt6GYtVP9Llgfb7Ylg8rlLYqHqjaI-72KDe-Bu&dispatch=5885d80a13c0db1f8e263663d3faee8db315373d882600b51a5edf961ea39639" class="btn btn-default" role="button" style="height:">
				<img src="graphics/paypal_logo.png" width="60" alt="paypal"></a> 
				<a target="_blank" href="http://www.amazon.com/b?node=394379011&tag=nafila-20&camp=213281&creative=386453&linkCode=ur1&adid=0SWQRACTMGJY15AS7MF2&&ref-refURL=http%3A%2F%2Fwww.namifingerlakes.org%2Famazon.htm" class="btn btn-default" role="button" style="height:35px"><img src="graphics/amazon_logo.png" width="60" alt="amazon"></a>
			</div>
		 </div>
		<div class="well" id="getinvolved" style='background:white;'>
			<h3>Get Involved</h3>
			<div class="h1-divider"></div>
			<p>Become an advocate. Register on NAMI.org to keep up with NAMI news and events.</p>
			<div class="center-button"><a target="_blank" href="https://www.nami.org/template.cfm?section=become_a_member" class="btn btn-primary" role="button">Join NAMI Today </a>
			</div>
		</div>
	</div>	
</div>



<?php
include('modals.php');
include('library.php');
include('footer.php');
?>