<!DOCTYPE html>
<html lang="en">
<head>
  <title>Planets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/mobile.css">
<script src="js/mobile.js" type="text/javascript"></script>

<style>
* {
    box-sizing: border-box;
}
h1.planetLink {
	color:rgba(153,0,102,1);
	font-size:18px;
	text-align:center;	
}
.container {
	background-color:rgba(0,0,0,0.7);
	color:rgba(255,255,255,1);
}
.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}

td {
font-size:0.7em;	
text-align:center;
}

th {
font-size:0.9em;
text-align:center;	
}

#modalImg {
	width:250px;
	margin-right:150px;
	height:auto;	
}

.modal-header {
	background-color:rgba(0,0,0,1);
	color:rgba(255,255,255,1);	
}
button#planet{	
background-color:transparent;
}

@media (max-width: 768px) {
.modal-dialog,
.modal-content {
	width:100%;
	height:auto;			
	}
}

</style>

</head>
<body>
<div class="container">
  <div class="row">
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal"><img src="images/planets/mercury-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
   <button id="planet" data-toggle="modal" data-target="#myModal2"><img src="images/planets/venus-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal3"><img src="images/planets/earth-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  </div>
  <div class="row">
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal4"><img src="images/planets/mars-transparent.png" style="width:320px; height:auto;"/></button>
  </div>

  <div class="column">
   <button id="planet" data-toggle="modal" data-target="#myModal5"><img src="images/planets/jupiter-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal6"><img src="images/planets/saturn-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  </div>
    <div class="row">
   <div class="column">
   <button id="planet" data-toggle="modal" data-target="#myModal7"><img src="images/planets/neptune-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal8"><img src="images/planets/uranus-transparent.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#myModal9"><img src="images/planets/sun.png" style="width:320px; height:auto;"/></button>
  </div>
  </div>
</div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">MERCURY</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Facts About Mercury</h2>
  <p>A few stats, some data, and then some fun facts about the planet closest to the Sun!</p>            
  <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Known to the ancients and visible to the naked eye!</td>
        <td>Messenger of the Roman Gods</td>
        <td>3,031 miles</td>
        <td>88 Earth days</td>
        <td>1,408 Earth hours</td>
        <td>Roughly 1 percent the strength of Earth's</td>
        <td>2.6x smaller than Earth</td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/mercury3.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/mercury_1.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">VENUS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Facts About Venus</h2>
  <p>Fun Facts, data, and stats about Venus.</p>            
  <table class="table table-dark table-responsive-lg">
 <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>In the 17th Century B.C. by Babylonian Astronomers</td>
        <td>The Roman Goddess of Love and Beauty</td>
        <td>7,521 miles</td>
        <td>225 Earth days</td>
        <td>5,832 Earth hours</td>
        <td>No internally generated protective magnetic field present at all.</td>
        <td>Close to Equal</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/venus525.jpg"id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/venus-transparent.png" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">EARTH</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Earth's Facts, Stats, and Fun Trivia</h2>
  <p>Get to know more about your home planet here:</p>            
  <table class="table table-dark table-responsive-lg">
   <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>We live here. It was never really discovered.</td>
        <td>Earth is derived from the 8th century word 'erda', meaning 'ground' or 'soil'.</td>
        <td>7,926 miles</td>
        <td>365 days</td>
        <td>24 hours</td>
        <td>Yes and it is very complex to explain.</td>
        <td>The size of Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/bluemarble_1.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/earth-globe-flickr.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">MARS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
    <h2>Facts, Stats, and Fun Trivia</h2>
  <p>Fun Facts, data, and stats about Mars.</p>     
  <table class="table table-dark table-responsive-lg">
   <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1659 by Christian Huygens(a Dutch astronomer)</td>
        <td>Roman God of War</td>
        <td>4,220 miles</td>
        <td>687 Earth days(1.9 years)</td>
        <td>25 Earth hours</td>
        <td>No magnetic field</td>
        <td>10.7% the size of Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/marsglobe3_viking_big.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/mars-transparent.png" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">JUPITER</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
   <h2>Facts, Stats, and Fun Trivia</h2>
  <p>Fun Facts, data, and stats about Jupiter.</p>             
   <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1610 by Galileo (after first discovering Jupiter's 4 large moons)</td>
        <td>The King of the Roman gods(represented Zeus, God of Thunder, for the Greeks)</td>
        <td>88,846 miles</td>
        <td>4,333 Earth days (11.9 years)</td>
        <td>10 Earth hours</td>
        <td>Has an extremely powerful magnetic field that acts like a giant magnet.</td>
        <td>318x the size of Earth.</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/jupiter525.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/jupiter-uranus-eubanks-photo-100923-02.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal6">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">SATURN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
     <h2>Facts, Stats, and Fun Trivia</h2>
  <p>Fun Facts, data, and stats about Saturn.</p>         
  <table class="table table-dark table-responsive-lg">
 <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Since ancient times but first seen by telescope in 1610 by Galileo</td>
        <td>Roman god named Saturnus(known to Greeks as Cronus)</td>
        <td>74,898 miles</td>
        <td>10,756 Earth days (29.5 years)</td>
        <td>11 Earth hours</td>
        <td>Flow of solar wind causes cavity called the magnetosphere which creates an internally generated magnetic field.</td>
        <td>95x the size of Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/saturn-transparent.png" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/SP_091102_saturn-VS.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal7">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">NEPTUNE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
    <h2>Facts, Stats, and Fun Trivia</h2>
  <p>Fun Facts, data, and stats about Neptune.</p>           
   <table class="table table-dark table-responsive-lg">
 <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>September 23, 1846 by Urbain Le Verrier and Johann Galle</td>
        <td>Roman God of the Sea</td>
        <td>30,775 miles</td>
        <td>60,190 days</td>
        <td>16 Earth hours</td>
        <td>Acts strangely and constantly rotating and changing.</td>
        <td>17x larger than Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/neptune-transparent.png" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/neptune525.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal8">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">URANUS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Facts, Stats, and Fun Trivia</h2>
  <p>Fun Facts, data, and stats about Uranus.</p>            
  <table class="table table-dark table-responsive-lg">
   <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Length(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Magnetic Field</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>March 13, 1781 by William Herschel</td>
        <td>Attempted to name it after King George III but Johann Bode suggested naming it after ancient Greek deity Ouranos.</td>
        <td>31,763 miles</td>
        <td>30,687 Earth days (84.0 years)</td>
        <td>17 Earth hours</td>
        <td>Magnetic field is tilted 59 degrees away from Uranus' spin axis while Earth's is only tilted 11 degrees.</td>
        <td>15x the size of Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/Uranus525.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/uranus.jpg" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

 <!-- The Modal -->
  <div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">THE SUN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>THE SUN</h2>
  <p>Facts about The Sun:</p>            
   <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Age</th>
        <th>Type of Star</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Surface Temperature</th>
        <th>Size Comparison</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Became the center of the Solar System in 16th Century after Nicolaus Copernicus challenged the long accepted "Earth-Centric" theory by declaring the Sun as center of the system of planets.</td>
        <td>Name has evolved many, many times through the years but the Sun was named for Apollo, the God of Enlightenment.</td>
        <td>865,374 miles</td>
        <td>4.6 Billion Years Old</td>
        <td>Yellow Dwarf (G2V)</td>
        <td>588 Earth hours - 816 Earth hours(depends on where you are on the Sun's surface.</td>
        <td>5,500 &deg;C</td>
        <td>333,060x the size of Earth</td>
      </tr>
    </tbody>
    </span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/sun.png" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/sun2.png" id="modalImg"/>
  </div>
  </div>
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>