<?php
session_start();
include('header.php');
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="graphics/lake.jpg" alt="lake">
      <div class="carousel-caption">
        The Finger lakes
      </div>
    </div>
  <div class="item">
      <img src="graphics/commons.jpg" alt="commons">
      <div class="carousel-caption">
        Ithaca Commons
      </div>
    </div>
  <div class="item">
      <img src="graphics/falls.jpg" alt="falls">
      <div class="carousel-caption">
        Ithaca Falls
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
  <i class="fa fa-chevron-left" style="margin-top:175px;font-size:40px;"></i>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <i class="fa fa-chevron-right" style="margin-top:175px;font-size:40px;"></i>
  </a>
</div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>Emergencies</h3>
        <p>If you are in an emergency situation, then please consult our <b>Crisis File</b>. We've been there, and we'd like to help you.</p>
        <div class="center-button">
          <a target="_blank" href="newsletters/Crisisfile.pdf" class="btn btn-danger" style="color: white; font-weight: bold;" role="button">Crisis/Support Information</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>Get Involved</h3>
        <p>Become an advocate. Register on NAMI.org to keep up with NAMI news and events.</p><br>
        <div class="center-button">
          <a target="_blank" href="https://www.nami.org/template.cfm?section=become_a_member" class="btn btn-primary" role="button">Join NAMI Today </a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>Donate</h3>
        <p>Donate directly <a target="_blank" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=4BwTXucbswqS5RXxnfu78gt6GYtVP9Llgfb7Ylg8rlLYqHqjaI-72KDe-Bu&dispatch=5885d80a13c0db1f8e263663d3faee8db315373d882600b51a5edf961ea39639">via Paypal</a>
         or make a purchase <a href="http://www.amazon.com/b?node=394379011&tag=nafila-20&camp=213281&creative=386453&linkCode=ur1&adid=0SWQRACTMGJY15AS7MF2&&ref-refURL=http%3A%2F%2Fwww.namifingerlakes.org%2Famazon.htm">via the Amazon link</a> and we will recieve 4% or more of your purchase.</p>
        <p>
          <div class="center-button">
            <a target="_blank" href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=4BwTXucbswqS5RXxnfu78gt6GYtVP9Llgfb7Ylg8rlLYqHqjaI-72KDe-Bu&dispatch=5885d80a13c0db1f8e263663d3faee8db315373d882600b51a5edf961ea39639" class="btn btn-default" role="button" style="height:">
            <img src="graphics/paypal_logo.png" width="60" alt="paypal"></a> 
            <a target="_blank" href="http://www.amazon.com/b?node=394379011&tag=nafila-20&camp=213281&creative=386453&linkCode=ur1&adid=0SWQRACTMGJY15AS7MF2&&ref-refURL=http%3A%2F%2Fwww.namifingerlakes.org%2Famazon.htm" class="btn btn-default" role="button" style="height:35px"><img src="graphics/amazon_logo.png" width="60" alt="amazon"></a>
          </div>
      </div>
    </div>
  </div>

  
  <div class="cols-full">
    <div class="well col-left-half" style="padding: 19px">
      <h4><b>NAMI (The National Alliance on Mental Illness) seeks to:</b></h4>
      <ul>
        <li>Provide support for families and friends of people diagnosed with major mental illnesses</li>
        <li>Educate families and the public about mental illness</li>
        <li>Advocate for the families and their ill relatives.</li>
      </ul>
      <p>NAMI-Finger Lakes is the Ithaca, NY chapter of NAMI.  
      We are a non-profit organization run by unpaid volunteers,
      and all of us have relatives suffering from major mental illness. </p>
    </div>
    
    <div class="col-right-half" style="border-left:none;width: 40%;padding: 0 0 0 1%;">
      <div class="thumbnail">
        <div class="caption" style='padding:19px 19px 0 19px'>
      <form role="form" action="index.php" method="POST">
        <h3 style="margin-top:0">Administrator Sign In</h3>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="center-button" style="margin-bottom: 0"><button type="submit" class="btn btn-default" name="loginSubmit">Sign in</button></div>
      </form>
      <?php
      if(isset($_POST["loginSubmit"])) {
          $username = strip_tags($_POST['username']);
          $password = hash("sha256", strip_tags($_POST['password'].'blahblahblah'));
          //Accepted password = admintest
          if($username == ADMIN_USERNAME && $password == "67269354ae43b286ce10080d7903362065c72bfea1777c46f1b9991099622496") {
            //Updating session logged user
            $_SESSION['logged_user'] = $username;
          }
          else {
            print "Incorrect username/password";
          }
      } 
      if(isset($_POST['logout'])) {
        if (isset($_SESSION['logged_user'])) {
          unset($_SESSION['logged_user']);
        } 
      }
      else if(isset($_SESSION['logged_user']) && $_SESSION['logged_user'] == ADMIN_USERNAME){
        print ("<form action='index.php' method='POST' id='admin-logout'>
          <input type='submit' class='btn btn-danger' name='logout' value='Sign Out'>
          </form>");
      }
      ?>
    </div>
  </div>
            









    </div>
  </div> 

<?php
include('footer.php');
?>