<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>

    <style>
        body
        {
            height: 94vh;
            width: 100vw;
            margin: 0px;
            
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
        #map
        {
            height: 100%;
            width:100%;
            z-index: 2;
            margin-top:34px;
        }
    </style>
</head>
<body>
    <div class="menubar">
        <img src="logo.png" height="42px">
        <ul class="nav">
            <li id="curr"><a href="navigate.html">Home</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="aboutus.html">AboutUs</a></li>
			<li><a href="welcome.html">Logout</a></li>
        </ul>
    </div>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([23.0000, 72.540], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker1 = L.marker([23.005, 72.540]).addTo(map);
        var marker2 = L.marker([23.025, 72.520]).addTo(map);
        var marker3 = L.marker([23.045, 72.500]).addTo(map);
        var marker4 = L.marker([23.000, 72.620]).addTo(map);
        var marker5 = L.marker([22.990, 72.500]).addTo(map);
        var marker6 = L.marker([23.025, 72.400]).addTo(map);
        marker1.bindPopup("<b>TATA POWER head branch</b><br>Do you want to book a slot here?").openPopup();
        marker2.bindPopup("<b>IOCL POWER head branch</b><br>Do you want to book a slot here?").openPopup();
        marker3.bindPopup("<b>GMRDS lab Charging Station POWER head branch</b><br>Do you want to book a slot here?").openPopup();
        marker4.bindPopup("<b>IOCL Kailash Petrolium Charging Station</b><br>Do you want to book a slot here?").openPopup();
        marker5.bindPopup("<b>Narayani Hotels and Resorts Charging Station</b><br>Do you want to book a slot here?").openPopup();
        marker6.bindPopup("<b>TATA POWER</b><br>Do you want to book a slot here?").openPopup();

        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("No charging station available here. Look at other nearby locations. The location you clicked is " + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);
            
    </script>
</body>
</html>