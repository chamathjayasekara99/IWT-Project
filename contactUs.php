<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$comment = $_POST['comment'];
		
		$servername = "localhost";
        $username = "root";
		$password = "";
		$dbname = "wedding_planning";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
		if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO contactUs(name,email,mobile,comment) VALUES('$name','$email','$mobile','$comment')");
		
		// Show message when user added
		
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Ranhuya - contactUs</title>
    <link rel="stylesheet" href="./assets/css/contactUs.css">
	
</head>
<body>
    <!-- <?php include("header.html"); ?> -->


<div class="main">
 <div class="slider">
     
    <br><h1 class="main-title" id="mtitle">Reach Our Team </h1>
	<h2 class="sub-title" id="stitle">We love questions and feedback .we're always happy to help!<br>Here are some ways to contact us.</h2></div>
	
	
	
<div class="groupbox1">
	<h3>Contact Customer Support</h3>
	<h4>We are waiting to help you........<br><br>Talk with our team to discover how our service can work best for you.</h4>
	<button class="btn" id ="btn1"  type="button" > <img src="./assets/img/search/phone.png" class="icon" > CALL +9477 46567937 </button> 
	</div>
	          


<fieldset class="groupbox2" id="gbox2">

<legend>Head Branch</legend>

<ul type ="none" class ="info">
<li>
<span><img src="./assets/img/search/locate.png" class="icon" ></span>
<span>No 177, Kandy Road,Malabe,<br>Colombo,Sri Lanka</br></span>
</li>
<br>
<li><span><img src="./assets/img/search/mail.png" class="icon" ></span> 
<span>mywedding@company.lk</span><br>
</li>
<br><button class="btn" id ="btn1"  type="button" >  <img src="./assets/img/search/phone.png" class="icon" > CALL +9477 46567937 </button> 
</fieldset>
	          

<fieldset class="groupbox3" id="gbox3">

<legend>Connect With</legend><br>
<img src="./assets/img/search/facebook.png" class="icon ">
<a href="www.facebook.com"> www.facebook.com/Mywedding.lk</a><br><br>
<img src= "./assets/img/search/viber.png" class="icon2" alt="">
+9477 4656793<br><br>
<img src ="./assets/img/search/app.png" class="icon" >+9477 46567937
</fieldset>


  
  <form class ="form"  method="post" action="" onsubmit ="return validate()" >
    
    <label for="name">*Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your name" ><br><br>

    <label for="Email">*Email</label><br>
    <input type="text" id="email" name="email" placeholder="Your Email" ><br><br>

	<label for="phone">*Mobile Number</label> <br>
	<input type="text"  id="mobile" name="mobile" placeholder="Your phone number"  pattern="[0-9]{10}" ><br><br>
    
    <label for="subject">*Messege</label><br>
    <textarea id="comment" name="comment" placeholder="Type your Messege here..." style="height:300px" ></textarea><br>

    <input type="submit" class="btn" name="Submit" value="SUBMIT">
	
	

  </form>


<script >
	


function validate()
{

 if (name.value == "" || email.value == "" || mobile.value=="" || subject.value=="")
{
	alert("no blanks values are allowed");
	return false;
}

else
{
alert("form is submitted");
}
}






</script>

    <!-- <?php include("footer.html"); ?> -->

    
</body>
</html>






