<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>AUST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- Homepage Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<!-- End Homepage Specific Elements -->
<style type="text/css">
a:hover{color:green;}
<?php 
session_start();
$std=$_SESSION['name'];
$stf=$_SESSION['sname'];
 ?>
</style>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php">Ahsanullah University</a></h1>
	  <h2><a href="index.php">Of Science And Technology</a></h2>
      </div>
    <div class="fl_right">
      <ul>
        <li><a href="About.php">About</a></li>
        <li><a href="Academis.php">Academics</a></li>
        <li><a href="Campus.php">Campus</a></li>
        <li><a href="Student.php">Student Login</a></li>
        <li class="last"><a href="Staff.php">Staff Login</a></li>
      </ul>
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <strong>Search:</strong>
          <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="Academic.php">Academic Info</a></li>
        <li><a href="Admission.php">Admission Info</a></li>
        <li><a href="Administration.php">Administration</a></li>
        <li><a href="News.php">News</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="Research.php">Research</a></li>
        <li><a href="mail.php">Mail Us</a></li>
      </ul>
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="featured_slide" class="clear">
    <!-- ###### -->
    <div class="overlay_left"></div>
    <div id="featured_content">
      <div class="featured_box" id="fc1"><img src="images/demo/slider/1.gif" alt="" />
        <div class="floater">
          <h2>Welcome to the AUST Website.</h2>
          <p>Sponsored by the Dhaka Ahsania Mission and approved by the Government of the  People's  Republic of Bangladesh, 
		   Ahsanullah University of Science and Technology has been successfully carrying out its  noble mission since 1995.</p>
		   <p class="readmore"><a href="index.php">Continue Reading &raquo;</a></p>
         
        </div>
      </div>
      <div class="featured_box" id="fc2"><img src="images/demo/slider/2.gif" alt="" />
        <div class="floater">
          <h2>Ahsanullah University of Science and Technology ranks:</h2>
          <p>1st in all Private Universities of Bangladesh<br>	
			 3rd in all Universities of Bangladesh<br>	
			 77th in the Indian Subcontinent<br>
			 7084th in the world.</p>
			 <p class="readmore"><a href="Ranking.php">Continue Reading &raquo;</a></p>
          
        </div>
      </div>
      <div class="featured_box" id="fc3"><img src="images/demo/slider/3.gif" alt="" />
        <div class="floater">
          <h2>Research facilities:</h2>
          <p>AUST promotes  research initiatives of its faculty members, students and other researches. All the departments carry out their own research programs.</p>
          <p class="readmore"><a href="Research.php">Continue Reading &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc4"><img src="images/demo/slider/4.gif" alt="" />
        <div class="floater">
          <h2>International Students:</h2>
          <p>International students willing to get admission in any Bachelor Degree Programme of this university should apply through their respective Embassies</p>
          <p class="International.php"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </div>
      <div class="featured_box" id="fc5"><img src="images/demo/slider/5.gif" alt="" />
        <div class="floater">
          <h2>Latest News:</h2>
          <p>Two of AUST teams Gave an outstanding performance in Microsoft imagine cup 2014 local finals. One team was the champion in game category and another </p>
          <p class="readmore"><a href="News.php">Continue Reading &raquo;</a></p>
        </div>
      </div>
    </div>
    <ul id="featured_tabs">
      <li><a href="#fc1">All About The University</a></li>
      <li><a href="#fc2">Why You Should Study With Us</a></li>
      <li><a href="#fc3">Education And Student Experience</a></li>
      <li><a href="#fc4">International Students Facilities</a></li>
      <li class="last"><a href="#fc5">Latest University News &amp; Events</a></li>
    </ul>
    <div class="overlay_right"></div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div id=middle>

	<div >
		<?php
	$found=0;
	$print=0;
	if(isset($_POST['usersubmit'])){
		
	    $fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pass=$_POST['pass'];
	    $rpass=$_POST['rpass'];
		$username=$_POST['username'];
		$address=$_POST['city'];
		$dept=$_POST['dept'];
		//echo $date;
		//echo $full;
		if(!empty($username) && !empty($fname) && !empty($lname)&& !empty($pass) && !empty($rpass) ){
			if(strcmp($pass,$rpass)==''){
			$server = "Ashique-PC\SQLEXPRESS";
			$options = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

			$conn = sqlsrv_connect($server, $options);

if ($conn === false) 
die("<pre>".print_r(sqlsrv_errors(), true));

//echo "Successfully connected!";

$sql = "select UserName from Teacher";
$query = sqlsrv_query($conn, $sql);
if ($query === false){  
exit("<pre>".print_r(sqlsrv_errors(), true));}	
				while($row=sqlsrv_fetch_array($query)){
				if(strcmp($username,$row['UserName'])==0){
				$found=1;
				break;
				}
			}
			
			if($found==0){
			$server1 = "Ashique-PC\SQLEXPRESS";
			$options1 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

			$conn1 = sqlsrv_connect($server1, $options1);

if ($conn1 === false) 
die("<pre>".print_r(sqlsrv_errors(), true));

//echo "Successfully connected!";

$sql1 = "Insert into Teacher
values('$username','$fname','$lname','$address','$dept','$pass');";
$query1 = sqlsrv_query($conn1, $sql1);
if ($query1 === false){  
exit("<pre>".print_r(sqlsrv_errors(), true));}
			echo '<h3 align="center" style="color:blue;">Registration Successful</h3>';}
			
			else{
				echo '<h3 align="center" style="color:red;">Username Exists</h3>';
			}}
			else {
				echo '<h3 align="center" style="color:red;">Password Does Not Match</h3>';
			
			}
			
			}
			
		
		else{
		echo '<h3 align="center" style="color:blue;">Please Insert All The Fields</h3>';
		}
	}
	?>
	<h1 align="center" style="color:red;"><strong>TEACHER REGISTRATION</strong></h1>
	<form action="teareg.php" method="post">
			   
               <input type="text" name="fname" placeholder="First Name" class="signinfo"></input><br>
			   <input type="text" name="lname" placeholder="Last Name" class="signinfo"></input><br>
			   <input type="text" name="username" placeholder="User Name" class="signinfo"></input><br>
			   <input type="password" name="pass" placeholder="Enter Password" class="signinfo"></input><br>
			   <input type="password" name="rpass" placeholder="ReEnter Password" class="signinfo"></input><br>
			   
			   
			   <input type="text" name="city" placeholder="Address" class="signinfo"></input><br>
			   <input type="text" name="dept" placeholder="Department" class="signinfo"></input><br>
			   
			   <input type="submit" name="usersubmit"value="Register" class="signinfo"></input>
            </form>

 
    </div>
</div>

<div class="wrapper row2"">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        
        <li><a href="Result.php">Result</a></li>       
        		<?php
 if(strcmp($std,'')!=0){
 echo '<a style="margin:0 20px 0 20px;"href="MyResult.php">My Result</a>';
 echo '<a style="margin:0 20px 0 20px;"href="stdlogout.php">Student log out</a>';
 }elseif(strcmp($stf,'')!=0){
	if(strcmp($stf,'admin')==0){
	echo '<a style="margin:0 20px 0 20px;"href="email.php">Email</a>';
	echo '<a style="margin:0 20px 0 20px;"href="NewsUp.php">News Update</a>';
	echo '<a style="margin:0 20px 0 20px;"href="RoutineUp.php">Routine Up</a>';
	echo '<a style="margin:0 20px 0 20px;"href="seemail.php">See Mail</a>';
	echo '<a style="margin:0 20px 0 20px;"href="teareg.php">Teacher Registration</a>';
	}else{
	echo '<a style="margin:0 20px 0 20px;"href="EntResult.php">Enter Result</a>';
	}
 echo '<a style="margin:0 20px 0 20px;"href="stflogout.php">Staff log out</a>';
 }
 ?>
      </ul>
	  
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- #######################################################################################################--> 
<div class="wrapper row4">
  <div class="rnd">
    <div id="footer" class="clear">
      <!-- ####################################################################################################### -->
      <div class="fl_left clear">
        <div class="fl_left center"><img src="images/demo/worldmap.gif" alt="" /><br />
          <a href="https://www.google.com/maps/place/Ahsanullah+University+of+Science+and+Technology/@23.763774,90.406644,17z/data=!3m1!4b1!4m2!3m1!1s0x3755c77decb5f845:0xc2eadd2f3b867792">Find Us With Google Maps &raquo;</a></div>
        <address>
        141,142 Love Road<br />
        Tejgaon Industrial Area<br />
        Dhaka-1208<br />
        <br />
        
        Tel: (8802)8870422<br />
        Email: <a href="mailto:info@aust.edu">info@aust.edu</a>
		<br>
		<a href="mailto:regr@aust.edu">regr@aust.edu</a>
        </address>
      </div>
      <div class="fl_right">
        <div id="social" class="clear">
          <p>Stay Up to Date With Whats Happening</p>
		 
       
        </div>
        <div id="newsletter">
          <form action="index.php" method="GET">
            <fieldset>
              <legend>Subscribe To Our Newsletter:</legend>
              <input type="text" name="email" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;")? '' : this.value ;" />
              <input type="Submit" name="esubmit "id="subscribe" value="Submit" />
            </fieldset>
          </form>
		
		  <?php 
		  if(isset($_GET["email"])){
			$email=$_GET["email"];
			if(!empty($email)){
			echo "<br><strong>Thank you for registering</strong>";
			$con=@mysqli_connect('localhost','root','','Sample') or die('Could Not Connect To Database');
			$query="insert into Email(Email) VALUES('$email')";
			$result=mysqli_query($con,$query) or die('Wrong query');
			//echo mysqli_error($con);
			mysqli_close($con);
			}else{
			echo "<br><strong>Insert email address first</strong>";
			}	
		  }?>
        </div>
		   
      </div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
</body>
</html>