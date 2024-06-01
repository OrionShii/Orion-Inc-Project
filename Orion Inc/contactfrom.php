<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="save.css">
</head>
<body>
			<div class="container">
				<div class="header">
					<div class="logo">
					</div>
					<div class="navigation">
						<h1 ><i class="fa-solid fa-globe"></i> Orion Inc.</h1>
						<ul>
						<li><a href="index.html" class="button-1">HOME<i class="fa-solid fa-house"></i></a></li>
						<li><a href="profile.html" class="button-1">PROFILE<i class="fa-solid fa-building"></i></a></li>
						<li><a href="service.html" class="button-1">SERVICE<i class="fa-solid fa-code"></i></a></li>
						<li><a href="client.html" class="button-1">CLIENT<i class="fa-solid fa-network-wired"></i></a></li>
						<li><a href="about.html" class="button-1">ABOUT<i class="fa-sharp fa-solid fa-users"></i></a></li>
						<li><a href="contactfrom.php" class="button-1">CONTACT<i class="fa-solid fa-address-book"></i></a></li>
						<li><a href="indexdata.html" class="button-1">LOGIN<i class="fa-solid fa-right-to-bracket"></i></a></li>
						</ul>
					</div>
					<div class="content">
					</div>
				</div>
    <div class="contact-form">
        <h1>Contact Me</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
</body>
</html>