<!DOCTYPE html>
<html>

<head>
	<title>LOk Vikas</title>
  	<?php include"style.php" ?>
</head>

<body>
	<div class="bg-dark text-white"><marquee> LOK VIKAS NGO </marquee></div>
	<?php include"navbar.php" ?>

<div id="demo" class="carousel slide" data-ride="carousel py-1">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/rescue.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="css/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="css/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">About Us</h2>
  	</div>

<div class="container-fluid">
    <div class="row">
    	<div class="col-lg-6 col-md-6 col-12">
    		<img src="css/2.png" class="img-fluid" class="aboutimg">
    		
    	</div>
    	<div class="col-lg-6 col-md-6 col-12">
    		
    		<p class="py-1">Lok Vikas Foundation envisions to grow as an idea across regions, economies and countries using urban discard as a tool to alleviate poverty and enhance the dignity of the underprivileged people of the world. Address basic but neglected issues of the poor by involving them in evolving their own solutions with dignity and urban material as reward. Is an attempt to knock at the walls of everyone’s conscience so that each one steps ahead to help anyone in need, so that it becomes a culture, a rule, and not an exception. It’s an attempt to appeal to the inherent goodness in people!
</p>
<a href="about.php" class="btn btn-success">->  check out more about us here  <-</a>
    		
    		
    	</div>
    </div></div>
          	


 

 
      
  </section>

  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">Our Services</h2>
  	</div>
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-4 col-md-4 col-12">

  				<div class="card" style="">
  <img class="card-img-top" src="css/7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><a href="schooltoschool.php">School To School</a></h4>
    <p class="card-text">initiative is addressing the educational needs of thousands of remote & resource starved village/ slum schools by channelizing under-utilised material of city’s affluent schools not as a thing to distribute but as a tool to bring about comprehensive behaviour change in the recipients and the contributors!
Scores of children leave schools for unimaginably reasons like lack of note book, pencil, water bottle or inability of parents to pay the recurring expense of stationery, which are abundance in urban schools.
</p>
    
  </div>
</div>
  				
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">

  				<div class="card" style="">
  <img class="card-img-top" src="css/9.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mobile Clinics</h4>
    <p class="card-text">Five mobile clinics (vans) covering nearly 120 surrounding villages in rural areas in Haryana in a week provide free treatments on an average to 2000 patients per day. Among these mobile vans, one for dental and one for eye are exclusively meant for providing relief/treatment to patients suffering from dental and eye problems. These dedicated vans are fitted with required diagnostic equipment’s etc.

</p>
    
  </div>
</div>
  				
  			</div>
  			<div class="col-lg-4 col-md-4 col-12">

  				<div class="card" style="">
  <img class="card-img-top" src="css/8.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><a href="Rahat.php">Rahat</a></h4>
    <p class="card-text">For nearly 2 two decades, Lok Vikas Foundation  has been working on varied disasters from earthquakes to Tsunami, cyclones, floods, etc. Rahat as an initiative has evolved into an active, reliable and time-tested network of stakeholders in both rural & urban India ensuring our timely response for generating need based disaster relief & rehabilitation efforts.
We educate common masses about sensitivities of giving, creating a culture of mindful giving.
Lok Vikas Foundation also strives to bring attention to preventable disasters like winter to reduce deaths and suffering in this season primarily due to non-availability of clothing.
</p>
    
  </div>
</div>
  				
  			</div>
  			
  		</div>
  	</div>
  	<hr>

  <section class="my-5">
  	<div class="py-5">
  		<h2 class="text-center">Suggestion are always Appreciated</h2>
  	</div>
  	<div class="w-50 m-auto">
  		<form action="userinfo.php" method="post">
  			<div class="form-group">
  				<label>
  					Name
  				</label>
  				<input type="text" name="user" autocomplete="off " class="form-control">
  			</div>
  			<div class="form-group">
  				<label>
  					Mobile no
  				</label>
  				<input type="text" name="mobile" autocomplete="off " class="form-control">
  				
  			</div>
  			<div class="form-group">
  				<label>
  					Comment
  				</label>
  				<textarea class="form-control"  name="comment"></textarea>
  				
  			</div>
  			<button type="submit" class="btn btn-success">submit</button>
  		</form>
  	</div>


  </section>
<footer>
	<p class="p-3 bg-success text-white text-center ">LOK VIKAS NGO pvt ltd<br>
 know more about us by the navbar</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>        
</body>
</html>