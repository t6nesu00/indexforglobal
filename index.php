<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		index page
	</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">





</head>
	<body>
		<header>
			
			<nav class="navbar navbar-light">
			  <a class="navbar-brand" href="index.php">
			    <img src="https://static.wixstatic.com/media/84770f_cf7bc4687a4348be94b1315766e2693f.png/v1/fill/w_50,h_71,al_c,lg_1,q_80/84770f_cf7bc4687a4348be94b1315766e2693f.webp" style="width: 40px; height: 59px; object-fit: contain;">
			    <h1 style="float: right">LIFESADVENTURE</h1>
			  </a>

		<div class="loginL" style="float: right;">
				<a href="#">
					<h4><i class="fas fa-user-circle"></i>Log In</h4>	
				</a>		
		</div>
			</nav>

			
					
			<nav class="navbar navbar-expand-lg navbar-light">
			  
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">DISCOVER</a>
			      <!--<a class="nav-item nav-link" href="#">DESTINATIONS</a>-->
			      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          DESTINATIONS
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Destination 1</a>
				          <a class="dropdown-item" href="#">Destination2</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Your Own Selection</a>
				        </div>
				    </li>
			      <a class="nav-item nav-link" href="#">ADVENTURES</a>
			      <a class="nav-item nav-link" href="#">ACCOMMODATION</a>
			      <a class="nav-item nav-link" href="#">ABOUT</a>
			    </div>
			  </div>
			</nav>
			
		</header>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
	    <h5>Hello</h5>
	    <p>World one</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
	    <h5>Hello</h5>
	    <p>World two</p>
  </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>

<div class="registerLink">
	<a href="#"><h1>START YOUR ADVENTURE HERE <i class="far fa-arrow-alt-circle-right"></i></h1></a>
</div>
<br>

<h1>Our Recommends</h1>


<!--multi carousel starts here-->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div id="multi-carousel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#multi-carousel" data-slide-to="0" class="active"></li>
			    <li data-target="#multi-carousel" data-slide-to="1"></li>
			    
			  </ol>
  <div class="carousel-inner">
  	    		<div class="carousel-item active">
  	    			<div class="row">
  	    				<div class="col-lg-4">
  	    					<img class="d-block w-100" src="./images/one.jpeg" alt="First slide">
					      <div class="card-body">
		            		<h4 class="card-title">Card title</h4>
		            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
		              card's content.</p>
		            		<a class="btn btn-primary">Button</a>
          					</div>
  	    				</div>

	  	    		<div class="col-lg-4">
	  	    			<img class="d-block w-100" src="./images/two.jpeg" alt="First slide">
						      <div class="card-body">
				            		<h4 class="card-title">Card title</h4>
				            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
				              card's content.</p>
				            		<a class="btn btn-primary">Button</a>
			          		</div>
	  	    		</div>

	  	    		<div class="col-lg-4">
	  	    			<img class="d-block w-100" src="./images/three.jpeg" alt="First slide">
					      <div class="card-body">
				            <h4 class="card-title">Card title</h4>
				            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
				              card's content.</p>
				            <a class="btn btn-primary">Button</a>
				          </div>
	  	    		</div>
  	    				</div>
  	    			
  	    	</div>

    
    <div class="carousel-item">
    	<div class="row">
    		<div class="col-lg-4">
    			<img class="d-block w-100" src="./images/four.jpeg" alt="Second slide">
      		
	    		<div class="card-body">
            		<h4 class="card-title">Card title</h4>
            		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            		<a class="btn btn-primary">Button</a>
          		</div>
  			
    		</div>
    		<div class="col-lg-4">
    			<img class="d-block w-100" src="./images/five.jpeg" alt="Second slide">
      		
					<div class="card-body">
		            <h4 class="card-title">Card title</h4>
		            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
		              card's content.</p>
		            <a class="btn btn-primary">Button</a>
		          </div>
  			
    		</div>
    		    		<div class="col-lg-4">
    			<img class="d-block w-100" src="./images/six.jpeg" alt="Second slide">
					<div class="card-body">
			            <h4 class="card-title">Card title</h4>
			            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
			              card's content.</p>
			            <a class="btn btn-primary">Button</a>
			          </div>
  			
    		</div>
    	</div>	
   </div>
    	
      
    
  </div>
  <a class="carousel-control-prev" href="#multi-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#multi-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>
	</div>
	
</div>
<!--multi carousel ends here-->

		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>

					·
					<a href="#">About</a>
					·
					<a href="#">Contact</a>
					.
					<a href="partners.php">Our Partners</a>
				</p>

				<p class="footer-company-name">LIFESADVENTURE</p>

				<div class="footer-icons">

					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" />
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>






		
	
<script type="text/javascript" src="index.js"></script>
<!--Bootstrap Js file-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>