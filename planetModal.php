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

<style>
* {
    box-sizing: border-box;
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
        <td>58.6 Earth days</td>
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
        <td>117 Earth days</td>
        <td></td>
        <td>Close to Equal</td>
      </tr>
    </tbody>
    </span>
  </table>
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
 <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
  <p>Add Line Here:</p>     
  <table class="table table-dark table-responsive-lg">
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
 <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
  <p>Add Line Here:</p>             
   <table class="table table-dark table-responsive-lg">
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
 <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
  <p>Add Line Here:</p>         
  <table class="table table-dark table-responsive-lg">
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
 <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
  <p>Add Line Here:</p>           
   <table class="table table-dark table-responsive-lg">
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
     <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
  <p>Add Line Here:</p>            
  <table class="table table-dark table-responsive-lg">
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    </span>
  </table>
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
</html>



</body>
</html>