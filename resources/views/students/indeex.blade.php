@extends('layout')
@section('title', 'index')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>SECURE ACADEMY</title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>
<style>
    /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>
    
    <section class="main" style="background-image: url(images/hero-bg.png);">
        
        <nav>
            <a href="#" class="logo">
                <img src="images/paicta.jpg" width="320px" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="/index">Home</a></li>
                
                <li><a href="/grades">Grades</a></li>
                <li><a href="/schedule">Schedule</a></li>
                
            </ul>
        </nav>
       
        
        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">WELCOME TO SECURE ACADEMY</h3>
                <h1 style="color: white;"> Student Portal</h1>
                <p style="color: white;">Online courses can be a great way to study information technology because they allow you to learn from
                home and study at your own pace. In addition to providing you with new skills, some offer formal credentials
                that may be attractive to prospective employers.
                Whether you’re just starting in IT or want to level up your skills, you're in the right place.</p>
            <!--login-btn-->
            <a href="/login" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/OIP.JPG" width="600px" style="text-shadow: 40px 30px;"/>
            </div>
        </div>
        
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    
    <!--services----------------------->
    <section class="services">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR PROFESSIONAL COURSES</h2>
            <p>Secure Academy offers a variety of courses which can help an IT graduate with securing a
              job, by doing training, learning and gaining recognized certifates.</p>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Coursera</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Cisco</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="/cisco">Apply Now</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Splunk</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
        </div>
    </section>

        </script>
</body>

</html>
