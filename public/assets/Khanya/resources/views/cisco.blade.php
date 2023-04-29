@extends('layout')
@section('title', 'cisco')
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Pan African Information Communication Technology Association</title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/favicon.png"/>
<style>

.container {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 5px;
  background-color: #fff;
}

.image {
  width: 15%;
  margin-right: 10px;
}

.description {
  width: 80%;
}

.description h2 {
  font-size: 25px;
  margin-bottom: 5px;
}

.description p {
  font-size: 16px;
  line-height: 1.5;
}

</style>
</head>

<body>
<h5><p>Cisco Systems, Inc., commonly known as Cisco, is an American-based multinational digital communications
    technology conglomerate corporation headquartered in San Jose, California. Cisco develops, manufactures, and sells networking hardware, software, telecommunications equipment and other high-technology services and products. Cisco specializes in specific tech markets, 
    such as the Internet of Things (IoT), domain security, videoconferencing, and energy management with leading products including Webex, OpenDNS, Jabber, Duo Security, and Jasper. Cisco is one of the largest technology companies in the world ranking 74 on the Fortune 100 with 
    over $51 billion in revenue and nearly 80,000 employees</p></h5>


        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/cyber.jpg">
                <font>Cybersecurity</font>
                <p>A single breach can have huge consequences for a company, hurting the bottom line and causing disruption in the daily lives of millions of people.
                That is why the demand for security professionals continues to grow. Get onboard—and develop an understanding of cybercrime, security principles,
                technologies, and procedures used to defend networks.</p>
                <!--btn--------->
                <a href="https://www.netacad.com/courses/cybersecurity/cybersecurity-essentials">Apply Now</a>
            </div>
        
            <!--box-2-------->
            <div class="box">
                <img src="images/IoT.ppm"">
                <font>Internet of Things</font>
                <p>Invest in learning IoT (Internet of Things) skills and you can transform any business in any industry, from manufacturing to saving endangered species.
                 Imagine 26 billion people, systems, and physical objects
                connecting and sharing data seamlessly over the internet. This isn't a what-if scenario,
                it's real-life and it’s coming together all around us right now.</p>
                <!--btn--------->
                <a href="#">Apply Now</a>
            </div>
        
            <!--box-3-------->
            <div class="box">
                <img src="images/python.webp">
                <font>Python</font>
                <p>Python is a great first programming language to learn.Programming skills open you up to careers in almost any industry and are required if you want to continue
                to more advanced and higher paying software development and engineering roles.
                This course is a great place to start learning Python</p>
                <!--btn--------->
                <a href="https://www.netacad.com/courses/programming/pcap-programming-essentials-python">Apply Now</a>
            </div>
        </div>
  </div>
</div>
</body>