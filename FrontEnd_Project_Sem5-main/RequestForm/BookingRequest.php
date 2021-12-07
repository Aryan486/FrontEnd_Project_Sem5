<!DOCTYPE html>
<html>
<head>
	<title>Booking Form</title>
	<link rel="stylesheet" href="request.css">
</head> 
<body>
<style>
	 body
	 {
		background-image: url("https://th.bing.com/th/id/Rc7f8f0025f585bbf8abebfeae1a50cfe?rik=PVQ2choBn6BRQA&riu=http%3a%2f%2fimg.collegepravesh.com%2f2014%2f12%2fThapar-University.jpg&ehk=CCOy468fwERBONZm5Dhv%2fG8BdT6U5ansGCbgjFc4dEQ%3d&risl=&pid=ImgRaw");
		background-repeat:no-repeat;
		background-attachment: fixed;
  		background-size: cover;
	 }
	</style>
	<div class="support">
		<p><?php
			session_start() ;
			if(isset($_SESSION['username']))
			{
			 echo '<h3>Welcome ' .$_SESSION['username'].'</h3><br>';                            
			// echo '<h3>Welcome ' .$_SESSION['usid'].'</h3><br>';  
			
			}
			else
			{
				header("location:index.php") ;
			}
			?></p>
		<a href="D:\Documents\ARMS\contactUS\contact.html" class="link1">Contact Us</a>
		<a href="D:\Documents\ARMS\Feedback\feedback.html" class="link1">Feedback</a>
		<br>
		<a href="#" class="link2">Sign Out</a>
		<a href="D:\Documents\ARMS\HomePage\Home.html" class="link1">Back to Booking Page</a>
	</div>
	<div class="promote">
		<h2><b>Thapar ARMS<br>Auditorium and Room Management System</b></h2>
		<a href="../LogOut/logOut.html">Log<br>Out</a>
		<a href="../ChangePassword/ChangePass.html">Change<br>Password</a>
		<a href="#">My<br>Requests</a>
		<a href="../ChangeInfo/ChangeInfo.html">Edit<br>Info</a>
		<a href="../Personal_Info/Deatils.html">Personal<br>Info</a>
		<br><br>
	</div>
	<div class="requestForm">
		<h1><b>Booking Request for Room1</b></h1>
		<br>
		<form id="ReqBook" name="form"> 
			<label>Name</label>
			<il1><input type="text" id="getName" name="Name" placeholder="Enter Name"></il1>
			<br><br>
			<label1 for="branch">Select Branch</label1>
			<il2><select id="branch">
				<option value="CSE">CSE</option>
				<option value="COE">COE</option>
				<option value="Mechanical">Mechanical</option>
				<option value="Civil">Civil</option>
				<option value="Chemical">Chemical</option>
				<option value="BT">Bio Technology</option>
    		</select></il2>
			<label2 for="year">Select Year</label2>
			<il3><select id="year">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
    		</select></il3>
			<br><br>
			<label>Mobile Number</label>
			<il4><input type="number" id="getMobile" name="mobile" placeholder="Enter Mobile Number"></il4>
			<br><br>
			<label for="society">Society</label>
			<il5><select id="society">
				<option value="S1">Society 1</option>
				<option value="S2">Society 2</option>
				<option value="S3">Society 3</option>
				<option value="S4">Society 4</option>
    		</select></il5>
			<br><br>
			<label>Event Name</label>
			<il6><input type="text" id="getEvent" name="event" placeholder="Event Name (Max 30 words)" maxlength=30></il6>
			<br><br>
			<label>Purpose</label>
			<il7><input type="text" id="getPurpose" name="purpose" placeholder="Purpose (Max 100 words)" maxlength=100></il7>
			<br><br>
			<label for id="eventDate">Date Of Event</label>
			<il8><input type="date" id="eventDate" name="eventDate"></il8>
			<br><br>
			<label5 for id="eventTime">Event Time</label5>
			<il9><input type="time" id="eventTime" name="eventTime"></il9>
			<label3> to </label3>
			<il10><input type="time" id="eventTime1" name="eventTime1"></il10>
			<br><br>
			<label4 for="people">Total Strength<br>(Approx.)</label4>
			<il11><input type="number" id="people" name="people" min=5 max=3000 placeholder="5 to 3000"></il11>
			<br><br><br>
			<label6><strong>Additional Facilities:</strong></label6>
			<br>
			<label>Whether AC required?</label>
			<br>
			<il12><input type="radio" id="yesAC" name="AC" value="YesAC"></il12>
			<label7 for="yesAC">Yes</label7>
			<il12><input type="radio" id="noAC" name="AC" value="NoAC"></il12>
			<label7 for="noAC">No</label7>
			<br><br>
			<label>Whether Speaker System required?</label>
			<br>
			<il12><input type="radio" id="yesSS" name="SS" value="YesSS"></il12>
			<label7 for="yesSS">Yes</label7>
			<il12><input type="radio" id="noSS" name="SS" value="NoSS"></il12>
			<label7 for="noSS">No</label7>
			<br><br><br>
			<R1><input type="reset" value="Reset"></R1>
			<input type=submit style="margin-left: 150px;" onmousedown="validate()">
		</form>
	</div>
	<script src="validate.js"></script>
</body>
</html>