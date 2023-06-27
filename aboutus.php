<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            height: 100vh;
            width: 100vw;
            margin: 0px;
            background-color: azure;

        }
        .menubar
        {
            height:42px;
            width:100vw;
            background-color: rgb(9, 49, 95);
            padding:4px 0px ;
            position: absolute;
            top:0px;
            color:white;
            z-index: 10;
        }
        a
        {
            font-size: 30px;
            padding: 0px 28px;
            text-decoration: none;
            color:rgb(255, 255, 255);
            vertical-align:text-top;

        }
        img
        {
            margin-left: 40px;
        }
        .nav
        {
            position: absolute;
            right:100px;
            top:0px;
            height:100%;
            padding:0px;
            margin: 0px;
        }
        li
        {
            display: inline-block;
            margin: 0px;
            height: 88%;
            padding-top: 6px;
            vertical-align: middle;
        }
        #curr
        {

            background-color: rgb(9, 0, 58);
        }
        .text
        {
            font-size: 22px;
            margin:80px;
            margin-top: 90px;
            line-height: 32px;
            text-align: center;
        }
        .text::first-letter
        {
            font-size: 80px;
            color: rgb(9, 49, 95);
            letter-spacing: -10px;
        }
    </style>
</head>
<body>
    <div class="menubar">
        <img src="logo.jpeg" height="42px">
        <ul class="nav">
            <li><a href="navigate.html">Home</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li id="curr" ><a href="aboutus.html">AboutUs</a></li>
			<li><a href="welcome.html">Logout</a></li>
        </ul>
    </div>
    <div class="text">
        Welcome to Charge-it-Up!
         The go-to destination for all your electric vehicle charging needs! We are a passionate team dedicated to making your charging experience convenient, efficient, and eco-friendly.

 At our website, we understand the growing demand for electric vehicles and the need for reliable charging infrastructure. That's why we created this platform to connect EV owners with nearby charging stations and provide a seamless booking system.

<br> Our mission is simple: to promote sustainable transportation and contribute to a greener future. We believe that electric vehicles play a vital role in reducing carbon emissions and combating climate change. By facilitating easy access to charging stations, we aim to encourage the adoption of electric vehicles and make eco-friendly transportation more accessible for everyone.

<br> With our user-friendly interface, finding the nearest charging stations is just a few clicks away. You can easily explore the available options, view real-time availability, and book a charging slot that suits your schedule. No more uncertainty or wasted time searching for charging stations - we've got you covered!

 What sets us apart is our commitment to providing accurate and up-to-date information. Our dedicated team works tirelessly to ensure that our database is regularly updated with the latest charging station locations and availability, giving you peace of mind and a hassle-free charging experience.

<br> Join us in our mission to drive sustainability and embrace the electric revolution. Together, we can create a cleaner, greener, and brighter future for generations to come.

Thank you for choosing our website as your trusted companion in your electric vehicle charging journey. Get plugged in, charge up, and let's pave the way to a sustainable tomorrow!

<br> <span style="font-size:35px;"> Happy charging! </span>
    </div>
</body>
</html>