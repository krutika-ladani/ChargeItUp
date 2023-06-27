<?php
	session_start();
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined 
        {
          font-variation-settings:
          'FILL' 50,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48;
          font-size: 120px;
          color: rgb(163, 210, 248);
          line-height: 70px;
        }
    </style>
    <style>
        body
        {
            height: 100vh;
            width: 100vw;
            margin: 0px;
            background-color: white;
            overflow: hidden;
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
        table
        {
            margin: auto;
            font-size: 25px;
            border: 3px solid rgb(10, 20, 109);
            border-right: 6px solid rgb(4, 37, 56);
            border-bottom: 6px solid rgb(6, 47, 71);
            background-color: rgb(255, 255, 255);
            padding:30px;
          
        }
        input
        {
            margin: 6px 0px;
            width:200px;
            border:3px solid rgb(10, 150, 109, 0.3);
            padding: 4px 10px;
            border-radius:20px;
        }
        button
        {
            display: inline-block;
            padding: 6px 30px;
            background-color: rgb(4, 4, 80);
            color: white;
            font-size: 17px;
            border-radius: 15px;
            margin-top: 5px;
        }
        #update
        {
            text-align: center;
            font-size: 25px;
            color: black;
            height:30px;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="menubar">
        <img src="logo.png" height="42px">
        <ul class="nav">
            <li id="curr"><a href="navigate.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="aboutus.php">AboutUs</a></li>
			<li><a href="index.php">Logout</a></li>
        </ul>
    </div>
    <form method="get">
    <img src="book.jpg" height="170px" style="display:block; margin:auto; margin-top:50px;">
    <div style="text-align: center; margin-top: 0px;">
        <div id="update"></div>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="" id="" placeholder=<?php echo "'".$_SESSION["name"]."'";?>></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="" id="" placeholder=<?php echo "'".$_SESSION["email"]."'";?>></td>
            </tr>
            <tr>
                <td>Date:</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>Start time:</td>
                <td><input type="time" name="" id=""></td>
            </tr>
            <tr>
                <td>End-time:</td>
                <td><input type="time" name="" id=""></td>
            </tr>
        </table>
        <div style="text-align:center; margin-top: 8px;"><button onclick="book()">Book</button></div>
    </form>
    <script>
        function book()
        {
            alert("Your booking is confirmed!");
            var txt=document.getElementById("update");
            txt.innertext = "Your booking is confirmed!";
        }
    </script>
</body>
</php>