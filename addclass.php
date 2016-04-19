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
      <form action="search.php" method="post" id="sitesearch">
        <fieldset>
          <strong>Search:</strong>
          <input type="text" name="search" placeholder="Search" />
          <input type="image" name="sub" src="images/search.gif" id="search" alt="Search" />
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
	
		$room=$_POST['room'];
	    $day=$_POST['day'];
		$time=$_POST['time'];
		$dept=$_POST['dept'];
		$sem=$_POST['sem'];
	    $sec=$_POST['sec'];
		$course=$_POST['course'];
		//echo $room;
	//	echo $day;
		//echo $dept;
		//echo $sem;
		//echo $sec;
		//echo $time;
		//echo $course;
			$server = "Ashique-PC\SQLEXPRESS";
			$options = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

$conn = sqlsrv_connect($server, $options);

if ($conn === false) 
die("<pre>".print_r(sqlsrv_errors(), true));

//echo "Successfully connected!";
$break=0;
$cc='';
$rr='';

$sql = "select * from Routine";
$sql1 = "select CourseType from Course where CourseId='$course'";
$sql2 = "select RoomType from Room where RoomId='$room'";
$query = sqlsrv_query($conn, $sql);
$query1 = sqlsrv_query($conn, $sql1);
$query2 = sqlsrv_query($conn, $sql2);
while($row=sqlsrv_fetch_array($query1)){

$cc=$row['CourseType'];
}
//echo $cc;
while($row=sqlsrv_fetch_array($query2)){
$rr=$row['RoomType'];
}
//echo $rr;
if(strcmp($cc,$rr)!=0){
$break=4;
}
if ($query === false){  
exit("<pre>".print_r(sqlsrv_errors(), true));}
			while($row=sqlsrv_fetch_array($query)){
			if(strcmp($room,$row['RoomId'])==0 && strcmp($day,$row['Day'])==0 && strcmp($time,$row['Time'])==0){
			$break=1; break;
			}
			else if(strcmp($dept,$row['SemesterDept'])==0 && strcmp($sem,$row['SemesterName'])==0 && strcmp($sec,$row['SemesterSec'])==0 && strcmp($time,$row['Time'])==0 && strcmp($day,$row['Day'])==0){
			$break=2; break;
			}
			else if(strcmp($stf,$row['UserName'])==0 && strcmp($time,$row['Time'])==0 && strcmp($day,$row['Day'])==0){
			$break=3; break;
			}
			}
			if($break==1){
			echo '<h3 align="center" style="color:red;">Room Is Not Empty</h3>';
			}
			else if($break==2){
			echo '<h3 align="center" style="color:red;">Class Is Booked At This Time</h3>';
			}
			else if($break==3){
			echo '<h3 align="center" style="color:red;">You Are Not Free At This Time</h3>';
			}
			else if($break==4){
			echo '<h3 align="center" style="color:red;">Lab Theory Conflict</h3>';
			}
			else{
			$serverr = "Ashique-PC\SQLEXPRESS";
			$optionss = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

			$connn = sqlsrv_connect($serverr, $optionss);

			if ($conn === false) 
			die("<pre>".print_r(sqlsrv_errors(), true));

			echo '<h3 align="center" style="color:green;">Class Added</h3>';

			$sqll = "insert into Routine(UserName,SemesterDept,SemesterName,SemesterSec,CourseId,RoomId,Day,Time)
						values('$stf','$dept','$sem','$sec','$course','$room','$day','$time');";
			$queryy = sqlsrv_query($connn, $sqll);
			if ($queryy === false){  
			exit("<pre>".print_r(sqlsrv_errors(), true));}
			}
			}
			
	?>
	<form action="addclass.php" method="post">
	
		<select name="dept" class="signinfo">
				<?php
				$server3 = "Ashique-PC\SQLEXPRESS";
	$options3 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

$conn3= sqlsrv_connect($server3, $options3);
		$sql3 = "select distinct SemesterDept from Semester";
		$query3 = sqlsrv_query($conn3, $sql3);
		while($row2=sqlsrv_fetch_array($query3)){
		
		?>
		<option value="<?php echo "$row2[SemesterDept]"; ?>"><?php echo "$row2[SemesterDept]"; ?></option>
		
		<?php
		
		}
		
		?>
			
			</select>

		<select name="sem" class="signinfo">
									<?php
		$server4 = "Ashique-PC\SQLEXPRESS";
		$options4 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

		$conn4= sqlsrv_connect($server4, $options4);
		$sql4 = "select distinct SemesterName from Semester";
		$query4 = sqlsrv_query($conn4, $sql4);
		while($row4=sqlsrv_fetch_array($query4)){
		
		?>
		<option value="<?php echo "$row4[SemesterName]"; ?>"><?php echo "$row4[SemesterName]"; ?></option>
		
		<?php
		
		}
		
		?>
			
			</select>
		<select name="sec" class="signinfo">
												<?php
		$server5 = "Ashique-PC\SQLEXPRESS";
		$options5 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

		$conn5= sqlsrv_connect($server5, $options5);
		$sql5 = "select distinct SemesterSec from Semester";
		$query5 = sqlsrv_query($conn5, $sql5);
		while($row5=sqlsrv_fetch_array($query5)){
		
		?>
		<option value="<?php echo "$row5[SemesterSec]"; ?>"><?php echo "$row5[SemesterSec]"; ?></option>
		
		<?php
		
		}
		
		?>
			
			</select>
		
		<select name="course" class="signinfo">
		<?php
				$server2 = "Ashique-PC\SQLEXPRESS";
	$options2 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

$conn2= sqlsrv_connect($server2, $options2);
		$sql2 = "select CourseId from Course";
		$query2 = sqlsrv_query($conn2, $sql2);
		while($row1=sqlsrv_fetch_array($query2)){
		echo '$row1[CourseId]';
		?>
		<option value="<?php echo "$row1[CourseId]"; ?>"><?php echo "$row1[CourseId]"; ?></option>
		
		<?php
		
		}
		
		?>
		</select>
		
		<select name="room" class="signinfo">
														<?php
		$server6 = "Ashique-PC\SQLEXPRESS";
		$options6 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

		$conn6= sqlsrv_connect($server6, $options6);
		$sql6 = "select RoomId from Room";
		$query6 = sqlsrv_query($conn6, $sql6);
		while($row6=sqlsrv_fetch_array($query6)){
		
		?>
		<option value="<?php echo "$row6[RoomId]"; ?>"><?php echo "$row6[RoomId]"; ?></option>
		
		<?php
		
		}
		
		?>
			</select>
		
		<select name="day" class="signinfo">
																	<?php
		$server6 = "Ashique-PC\SQLEXPRESS";
		$options6 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

		$conn6= sqlsrv_connect($server6, $options6);
		$sql6 = "select distinct Day  from DayTime";
		$query6 = sqlsrv_query($conn6, $sql6);
		while($row6=sqlsrv_fetch_array($query6)){
		
		?>
		<option value="<?php echo "$row6[Day]"; ?>"><?php echo "$row6[Day]"; ?></option>
		
		<?php
		
		}
		
		?>
			</select>
			
				<select name="time" class="signinfo">
																	<?php
		$server6 = "Ashique-PC\SQLEXPRESS";
		$options6 = array(  "UID" => "sa",  "PWD" => "1234",  "Database" => "Routine");

		$conn6= sqlsrv_connect($server6, $options6);
		$sql6 = "select distinct Time from DayTime";
		$query6 = sqlsrv_query($conn6, $sql6);
		while($row6=sqlsrv_fetch_array($query6)){
		
		?>
		<option value="<?php echo "$row6[Time]"; ?>"><?php echo "$row6[Time]"; ?></option>
		
		<?php
		
		}
		
		?>
			</select>
		
		<input type="submit" name="usersubmit"value="Add" class="signinfo"></input>
				
			</form>
	
	
    </div>
</div>

<div class="wrapper row2"">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a href="Routine.php">Routine</a></li> 
        <li><a href="Result.php">Result</a></li>       
        		<?php
 if(strcmp($std,'')!=0){
 echo '<a style="margin:0 20px 0 20px;"href="MyResult.php">My Result</a>';
 echo '<a style="margin:0 20px 0 20px;"href="stdlogout.php">Student log out</a>';
 }elseif(strcmp($stf,'')!=0){
	if(strcmp($stf,'admin')==0){
	echo '<a style="margin:0 20px 0 20px;"href="email.php">Email</a>';
	echo '<a style="margin:0 20px 0 20px;"href="NewsUp.php">News Update</a>';
	echo '<a style="margin:0 20px 0 20px;"href="Upload.php">Upload</a>';
	echo '<a style="margin:0 20px 0 20px;"href="seemail.php">See Mail</a>';
	echo '<a style="margin:0 20px 0 20px;"href="teareg.php">Teacher</a>';
	}else{
	echo '<a style="margin:0 20px 0 20px;"href="EntResult.php">Enter Result</a>';
	echo '<a style="margin:0 20px 0 20px;"href="Upload.php">Upload</a>';
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