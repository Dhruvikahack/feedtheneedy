
<html>
<head>
<link href="pmms.css" rel="stylesheet">
</head>
<body>

<nav>
 <div id="navbar">
<a href="home.html">Log Out</a>
</div>
 
 <div class="dropdown">
    <button class="dropbtn">Profile
    </button>
    <div class="dropdown-content">
      <a href="profile.html">Edit Profile</a>
      <a href="#">Notification</a>
    </div>
  </div>

	<div class="dropdown">
		<button class="dropbtn">Volunteer
		</button>
		<div class="dropdown-content">
		  <a href="volunteer.php">Add Event</a>
		  <a href="history.html">My Event</a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn">Donate
		</button>
		<div class="dropdown-content">
		  <a href="addDonation.php">Add Donation</a>
		  <a href="history.html">My Donation</a>
		</div>
	</div>
  
  <div id="b"><a href="#"><img src="logo.png" style="width:60px"></a></div>
  <div id="name">Feed The Needy</div>
  <div id="navbar">
  <a href="dashboard.html">Home</a>
  </div>
</nav>

<div id="content">
	<form name="myform" method="post" action ="donate.php" id="myDonation">
	<center>
	<p style="font-size:20px;text-decoration:underline">Donation Details</p><br/><br/>
	<table >
		<tr>
			<td>Donation Date</td>
			<td><input  name="donationDate" type="date"></td>
		</tr>
	<tr  >
	<td >Food Details</td>
			
		</tr>
	</tr>
	<tr>
		
		<td colspan='2' ><input id='text' style="width:450px; height:40px" name="fooddetails" type="text"></td>
	</tr>
		<tr>
			<td>Type of Food</td><td >No of People can be Served</td>
			
		</tr>
		<tr>
			<td><input id='text' name="typeOfFood" type="text"></td>
			<td ><input id='text' name="NumOFpeople" type="text"></td>
		</tr>
	
		<tr>
			<td>Expiration time</td><td>Pick up time</td>
			
		</tr>
		<tr>
			<td><input id='text' name="expiration" type="time"></td>
			<td ><input id='text' name="pickupTime" type="time"/></td>
		</tr>
		<tr>
			<td>Pickup Location</td>
					
		</tr>
		<tr>
		<td colspan='2' ><input style="width:450px; height:40px" id='text' style='' type="text" name="pickupLocation"></td>
		</tr>
		<tr>
			<td >Donation Location</td>
		</tr>	
		<tr>
		<td colspan='2'><input style="width:450px; height:40px" id='text'type="text" name="donationLocation"></td>
		</tr>
	</table></center>
	<br/><br/>
	<center><input id="submit" type="submit" value="submit" name="submit" />
	<input id="submit" type="button" value="Cancel" name="cancel" onclick="window.location.href = 'dashboard.html';"/></center>
	</form>

</div>

<div id="f">
		<div id="finfo">
		<div id="ffirst">
		<a href="#" style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Contact Us</a>
		</div>
		<div id="fsecond">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Terms & Conditions</a>
		</div>

		<div id="fthird"  >
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">FAQs</a>
		</div>
		<div id="ffourth">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">How it Works</a>
		</div>
		<div id="ffifth">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Find Us:&nbsp;&nbsp;&nbsp;</a>
		<a href="#"> <img src="facebook.png" style="width:25px;height:25px;"></a>
		<a href="#"> <img src="instagram.png" style="width:30px;height:25px;"></a>
		<a href="#"> <img src="twitter.png" style="width:30px;height:25px;"></a>
		</div>
		<div id="fselect">
		<form>
		  <select name="language" style="width:225px;height:35px;font-size:15px;font-family:Comic Sans MS, cursive, sans-serif;">
			<option >English</option>
			<option >Hindi</option>
			<option >Gujarati</option>
		 
		  </select>
		</form>
		</div>
		</div>
		
		<div id="line">
		<hr>
		<p align="center" style="font-size:13px;">&#169; Copyright All Rights Reserved</p>
		</div>
	</div>	
</body>
</html>