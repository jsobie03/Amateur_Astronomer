<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<title>Amateur Astronomer - Home</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/mobile.css">
<script src="js/mobile.js" type="text/javascript"></script>
</head>

<body>
<div id="page">
<?php include 'header.php';?>
<div id="body" class="home">
<audio controls style="visibility:hidden" autoplay="true">
  <source src="audio/01. Main Title (aired Version).mp3" type="audio/mpeg">
</audio> 
  <div class="header">
    <div><img src="images/satellite.png" alt="" class="satellite">
	<h1>THE AMATEUR</h1>
    <h2>ASTRONOMER</h2>
      <a href="blog.php" class="more">Read More</a>
      <h3>OUR FEATURED PAGES</h3>
      <ul>
        <li><a href="3dorbit.php" target="_blank"><img src="images/3D-Solar-System.jpeg" alt="3D Model of the Solar System"></a></li>
        <li><a href="planets.php" target="_blank"><img src="images/planetsAndDwarfs.jpg" alt="All the planets and dwarf planets in our Solar System"></a></li>
        <li><a href="links.php" target="_blank"><img src="images/links/nasaSM.png" width="238" height="auto" alt="NASA Logo for Links Page"></a></li>
        <li><a href="underconstruction.php" target="_blank"><img src="images/project-image4.jpg" alt=""></a></li>
      </ul>
    </div>
  </div>
  <div class="body">
    <div>
      <h1>OUR MISSION</h1>
      <p>To supply the curious minds of the world with as much knowledge about the stars, moons and planets as we possibly can. To inspire the future generations and current generations of the world to always stay curious about Space and what it can teach us. To help others Boldly Go Where No Human Has Gone Before! Welcome Amateur Astronomers and Have Fun!!!</p>
    </div>
  </div>
  <div class="footer">
    <div>
      <ul>
        <li>
          <h1>FEATURED VIDEO</h1>
          <video width="460" height="258" controls>
    <source src="videos/earth_from_space.mp4" type="video/mp4" /><span></span></li>
        <li>
          <h1>LATEST BLOG</h1>
          <ul>
            	<li>
            	<a href="blog.php"><img src="images/kellytwins.jpeg" alt="the kelly twins after an alarming discovery"></a>
              	<h1>THE KELLY BROTHERS - TWINS NO MORE??</h1>
              	<span>MARCH 12,2018</span>
              	<a href="blog.php" class="more">Read More</a>
                </li>
              
            	<li>
                <a href="blog.php"><img src="images/asteroidEarth.jpeg" alt="artist rendering of asteroid about to collide with Earth"></a>
              	<h1>THE SPACE FLEET - A SHIP FOR EARTH'S SAFETY</h1>
              	<span>MARCH 9,2018</span>
              	<a href="blog.php" class="more">Read More</a>
                </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
    
</div>
<?php include 'footer.php';?>
</body>
</html>