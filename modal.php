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
          <h4 class="modal-title">VENUS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
  <h2>Facts About Venus</h2>
  <p>Fun Facts, data, and stats about Venus.</p> 
  
<div class="table-responsive">
		
		<table class="table table-dark table-striped table-bordered">
		    <tr>
			    <th>Planet Name</th>
				<td><?php echo $planet_name; ?></td>
			</tr>
			<tr>
				<th>Discovery Date</th>
				<td><?php echo $discovered; ?></td>
			</tr>
			<tr>
				<th>Named For</th>
				<td><?php echo $namedFor; ?></td>
			</tr>
			<tr>
				<th>Diameter</th>
				<td><?php echo $diameter; ?></td>
			</tr>
			<tr>
				<th>Orbit Distance</th>
				<td><?php echo $orbitDistance; ?></td>
			</tr>
            <tr>
				<th>Length of Day</th>
				<td><?php echo $dayLength; ?></td>
			</tr>
            <tr>
				<th>Size as Compared to Earth</th>
				<td><?php echo $sizeCompare; ?></td>
			</tr>
           
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
</html>
