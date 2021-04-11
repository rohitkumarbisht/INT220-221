<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    .home .carousel-item{
	min-height: 75vh;
	background-position: center;
	background-size: cover;
	position: relative;
	z-index: 1;
}
.home .carousel-item:before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.6);
	z-index: -1;
}
.home .carousel-item .container{
	position: absolute;
	left: 50%;
	top:50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.home .carousel-item h3{
	font-size: 80px;
	color: #ffffff;
	margin:0 0 10px;
	opacity: 0;
}
.home .carousel-item p{
	font-size: 30px;
	margin:0;
	color: #eeeeee;
	opacity:0;
}
.home .carousel-item.active h3{
	animation: fadeInLeft 0.5s ease forwards;
}
.home .carousel-item.active p{
	animation: fadeInRight 0.5s ease forwards;
}

@keyframes  fadeInLeft{
	0%{
		opacity: 0;
		transform: translateX(-30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}
@keyframes  fadeInRight{
	0%{
		opacity: 0;
		transform: translateX(30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}

.home .carousel-controls{
	position: absolute;
	left: 50%;
	bottom: 40px;
	z-index: 10;
	transform: translateX(-50%);
}

.home .carousel-indicators{
	position: relative;
	margin:0;
}

.home .carousel-indicators li{
	height: 70px;
	width: 70px;
	margin:0 5px;
	border-radius: 50%;
	background-position: center;
	background-size: cover;
	border:3px solid transparent;
	transition: all 0.3s ease;
}
.home .carousel-indicators li.active{
	border-color: #ffffff;
	transform: scale(1.2);
}

.home .carousel-control-next, 
.home .carousel-control-prev{
	height: 60px;
	width: 60px;
	opacity: 1;
	z-index: 3;
	top: 50%;
	transform: translateY(-50%);
	border-radius: 50%;
	transition: all 0.3s ease;
}
.home .carousel-control-next:hover, 
.home .carousel-control-prev:hover{
   box-shadow: 0 0 10px #ffffff;
}
.home .carousel-control-next img, 
.home .carousel-control-prev img{
   width: 30px;
}
.home .carousel-control-next{
	right: -90px;
}
.home .carousel-control-prev{
	left: -90px;
}

  
  /* Button Styles */
  
 .home .button {
	display: inline-flex;
	height: 40px;
	width: 150px;
	border: 2px solid #BFC0C0;
	margin: 20px 20px 20px 20px;
	color: #BFC0C0;
	text-transform: uppercase;
	text-decoration: none;
	font-size: .6em;
	letter-spacing: 1.5px;
	align-items: center;
	justify-content: center;
	overflow: hidden;
  }
  
  a {
	color: #BFC0C0;
	text-decoration: none;
	letter-spacing: 1px;
  }
  
  
  
  /* Sixth Button */
  
  #button-6 {
	position: relative;
	overflow: hidden;
	cursor: pointer;
  }
  
  #button-6 a {
	position: relative;
	transition: all .45s ease-Out;
  }
  
  #spin {
	width: 0;
	height: 0;
	opacity: 0;
	left: 70px;
	top: 20px;
	transform: rotate(0deg);
	background: none;
	position: absolute;
	transition: all .5s ease-Out;
  }
  
  #button-6:hover #spin {
	width: 200%;
	height: 500%;
	opacity: 1;
	left: -70px;
	top: -70px;
	background: #BFC0C0;
	transform: rotate(80deg);
  }
  
  #button-6:hover a {
	color: #2D3142;
  }
  
  
  @media  screen and (min-width:1000px) {
	h1 {
	  font-size: 2.2em;
	}
	#container {
	  width: 50%;
	}
  }

/*responsive*/
@media(max-width: 767px){
  .home .carousel-control-next, 
  .home .carousel-control-prev{
  	display: none;
  }
  .home .carousel-indicators li{
  	height: 60px;
  	width: 60px;
  }
  .home .carousel-item h3{
  	font-size: 45px;
  }
  .home .carousel-item p{
  	font-size: 22px;
  }
}
  </style>
  <!-- JavaScript Bundle with Popper -->
</head>
<body>

 <section class="home">
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-controls">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('https://images.pexels.com/photos/4451937/pexels-photo-4451937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')"></li>
      <li data-target="#carousel" data-slide-to="1" style="background-image:url('https://images.pexels.com/photos/5961025/pexels-photo-5961025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')"></li>
      <li data-target="#carousel" data-slide-to="2" style="background-image:url('https://images.pexels.com/photos/6140931/pexels-photo-6140931.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')"></li>
      
    </ol>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
     <img src="img/left-arrow.svg" alt="Prev"> 
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <img src="img/right-arrow.svg" alt="Next">
  </a>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url('https://images.pexels.com/photos/4451937/pexels-photo-4451937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
      <div class="container">
         <h3>PROPERTY MANAGEMENT EXPERTS</h3>
          <div class="button" id="button-6">
            <div id="spin"></div>
            <a href="#">Find Out More</a>
          </div>
        </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://images.pexels.com/photos/5961025/pexels-photo-5961025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
      <div class="container">
         <h3>EXPERTS IN CREATING HASSLE FREE LETTINGS</h3>
         <div class="button" id="button-6">
          <div id="spin"></div>
          <a href="#">Get in Touch</a>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://images.pexels.com/photos/6140931/pexels-photo-6140931.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')">
      <div class="container">
         <h3>YOUR STUDENT ACCOMMODATION COVERED</h3>
         <div class="button" id="button-6">
          <div id="spin"></div>
          <a href="#">Book Now</a>
        </div>
      </div>
    </div>
  </div>

 </section>

 
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\arkenterprise\resources\views/carousel.blade.php ENDPATH**/ ?>