<!DOCTYPE html>
<html>
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
    <button id="planet" data-toggle="modal" data-target="#dwarf_1"><img src="images/planets/dwarfplanets/plutonobackground.png" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
   <button id="planet" data-toggle="modal" data-target="#dwarf_2"><img src="images/planets/dwarfplanets/ceres.jpg" style="width:320px; height:auto;"/></button>
  </div>
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#dwarf_3"><img src="images/planets/dwarfplanets/haumea_nasa_br.jpg" style="width:320px; height:auto;"/></button>
  </div>
  </div>
  <div class="row">
  <div class="column">
    <button id="planet" data-toggle="modal" data-target="#dwarf_4"><img src="images/planets/dwarfplanets/Makemake1.jpg" style="width:320px; height:auto;"/></button>
  </div>

  <div class="column">
   <button id="planet" data-toggle="modal" data-target="#dwarf_5"><img src="images/planets/dwarfplanets/erisillustration.jpg" style="width:320px; height:auto;"/></button>
  </div>
  </div>


  <!-- The Modal -->
  <div class="modal fade" id="dwarf_1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">PLUTO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<h2>Facts About Pluto</h2>
  <p>Fun Facts, data, and stats about Pluto.</p>           
  <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Period(in Earth Years)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Size Comparison</th>
        <th>Formation</th>
        <th>Moons</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>February 18, 1930 by Clyde W. Tombaugh (reclassified as a dwarf planet in 2006)</td>
        <td>Originally named Hades after the Greek god of the underworld by an 11-year-old schoolgirl from Oxford, England.</td>
        <td>1,474 miles</td>
        <td>248.0 Earth years</td>
        <td>154 Earth hours</td>
        <td>Pluto is 5.5x smaller than Earth</td>
        <td>Orbit is in a 'disc-like zone' beyond the orbit of the Planet Neptune. Pluto was
        	likely formed around 4.5 billion years ago since it is found in or near the Kuiper Belt.</td>
      	<td>Yes, there are <a href="moons.php" target="_blank">5 moons</a></td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/dwarfplanets/pluto.jpg" id="modalImg"/>
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
  <div class="modal fade" id="dwarf_2">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CERES</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Facts About Ceres</h2>
  <p>Fun Facts, data, and stats about Ceres.</p>            
  <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Diameter</th>
        <th>Orbit Period(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Size Comparison</th>
        <th>Formation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Jan 1st, 1801 by Giuseppe Piazzi</td>
        <td>Ceres is named for the Roman goddess of grain crops and harvests. The word cereal comes from the same name.</td>
        <td>1,859 miles</td>
        <td>1,680 Earth days (4.6 Earth years approximately)</td>
        <td>9 Earth hours</td>
        <td>13.4x smaller than the size of Earth</td>
        <td>Called an 'embryonic' planet since it began forming 4.5 billion years ago from dust and rock and gas but never finished its formation, leaving it mishaped and imperfect.</td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/dwarfplanets/ceres.png"id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/dwarfplanets/ceresgorgeous.jpg" id="modalImg"/>
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
  <div class="modal fade" id="dwarf_3">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">HAUMEA</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
    <h2>Facts About Haumea</h2>
  <p>Fun Facts, data, and stats about Haumea.</p>      
  <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Orbit Period(in Earth Years)</th>
        <th>Day Length(as compared to Earth)</th>
        <th>Formation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>March 7, 2003 by the Sierra Nevada Observatory</td>
        <td>Haumea was named after the Hawaiian goddess of fertility.</td>
        <td>285 Earth Years</td>
        <td>4 Earth hours</td>
        <td>Formed in the Kuiper Belt out of rock with a coating of ice.</td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/dwarfplanets/haumea_nasa_br.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/dwarfplanets/haumea_rings.jpg" id="modalImg"/>
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
  <div class="modal fade" id="dwarf_4">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">MAKEMAKE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
   <h2>Facts About Makemake</h2>
  <p>Fun Facts, data, and stats about Makemake.</p>        
  <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Orbit Period(in Earth Years)</th>
        <th>Day Length(as compared to Earth)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Makemake was discovered Mar. 31, 2005 by M.E. Brown, C.A. Trujillo, and D. Rabinowitz at the Palomar Observatory. </td>
        <td>305 Earth years</td>
        <td>22.5 Earth hours</td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/dwarfplanets/Makemake.jpg" id="modalImg"/>
  </div>
  <div class="column">
  <img src="images/planets/dwarfplanets/Makemake1.jpg" id="modalImg"/>
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
  <div class="modal fade" id="dwarf_5">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ERIS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<h2>Facts About Eris</h2>
  <p>Fun Facts, data, and stats about Eris.</p>                  
   <table class="table table-dark table-responsive-lg">
  <span>
  <thead>
      <tr>
        <th>Discovered</th>
        <th>Named For</th>
        <th>Orbit Period(in Earth Days)</th>
        <th>Day Length(as compared to Earth)</th>
</tr>
    </thead>
    <tbody>
      <tr>
        <td>Eris was discovered on Oct. 21, 2003 by M.E. Brown, C.A. Trujillo, and D. Rabinowitz at the Palomar Observatory.</td>
        <td>Eris is named for the ancient Greek goddess of discord and strife. The name fits since Eris remains at the center of a scientific debate about the definition of a planet.</td>
        <td>557 Earth years</td>
        <td>25.9 Earth hours</td>
      </tr>
    </tbody>
</span>
  </table>
  <div class="row">
  <div class="column">
  <img src="images/planets/dwarfplanets/erisillustration.jpg" id="modalImg"/>
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
</body>