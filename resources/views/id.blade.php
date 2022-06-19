
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>CarForYou - Responsive Car Dealer HTML5 Template</title>
<!--Bootstrap -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/custom.css')}}" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/owl.transitions.css')}}" type="text/css">
<!--slick-slider -->
<link href="{{url('assets/css/slick.css')}}" rel="stylesheet">
<!--bootstrap-slider -->
<link href="{{url('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="{{url('assets/css/fontawesome.min.css')}}" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{url('assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/orange.css')}}" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/blue.css')}}" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/pink.css')}}" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/green.css')}}" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{url('assets/switcher/css/purple.css')}}" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('assets/images/favicon-icon/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{url('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
<link rel="shortcut icon" href="{{url('assets/images/favicon-icon/favicon.png')}}">
<!-- Google-Font-->
<link href="{{url('https://fonts.googleapis.com/css?family=Lato:300,400,700,900')}}" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
<style type="text/css">
		.price:hover{
          background: black;
          color: white;
		}
		.price {
		  border: 1px solid black;
		  height: 40px;
		  width: 40px;
		  border-radius: 50% 50% 50% 50%;

		}
		#tt{

		}
		#p1{
			padding: 20px;
			background: black;
			color: white;
		}
		#q1{
			padding: 20px;
			background: black;
			color: white;
		}
		#t1{
			padding: 20px;
			background: black;
			color: white;
		}
		#n1{
			padding: 20px;
			background: black;
			color: white;

		}
		#btn{
			width: 300px;
		}
		#bigimage{
			height: 400px;
		}
		img{
			margin: 6px;
		}
        p{
            color:red;
        }
	</style>
</head>
<body>
<!-- Start Switcher -->
<div class="switcher-wrapper">	
    <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <h4>Color</h4>
                            <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>
                            <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                            <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>
                            <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                            <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                            <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Switcher -->  

<!--Header-->
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.html"><img src="{{url('assets/images/logo.png')}}" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">info@example.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+61-1234-5678-9</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-bs-toggle="modal" data-bs-dismiss="modal">Login / Register</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-expand-lg">
    <div class="container">
	<div class="row header-row desktop">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          
              <li><a href="{{url('home2')}}">Home Page </a></li>
              
            
          <li><a href="{{url('about-us')}}">About Us</a></li>
          
              <li><a href="{{url('listing-grid')}}">Grid Style</a></li>
              
            
          
         
          
              <li><a href="{{url('blog-detail')}}">Blog Detail</a></li>
            
        </ul>
      </div>
	  <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Post vehicle<i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                
                <li><a class="dropdown-item" href="{{url('my-vehicles')}}">My Vehicles</a></li>
                <li><a class="dropdown-item" href="{{url('add-product')}}">Post a Vehicle</a></li>
               
              </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
	  </div>
	  <!-- mobile-view -->
	  
	  
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>
<!-- /Header --> 

<!--Page Header-->
<div class="container">

	<div class="row">

<div class="col-xl-6">
<img src="{{ asset('uploads/students/'.$student->upload1) }}" id="bigimage" width="400px" height="300px">
<!-- <div class="d-flex">
	<img src="{{ asset('uploads/students/'.$student->upload2) }}" height="100px" id="c1" onclick="showbigimage(this.id)">
	<img src="{{ asset('uploads/students/'.$student->upload3) }}" height="100px" id="c2" onclick="showbigimage(this.id)">
	<img src="{{ asset('uploads/students/'.$student->upload4) }}" height="100px" id="c3" onclick="showbigimage(this.id)">
</div> -->
</div>

<div class="col-xl-6">
  <h1>{{$student->vehicle_title}}</h1>
  <h4>{{$student->price}}</h4>
  <h4>{{$student->vehicle_desc}}</h4>
  <p style="margin-top:50px;margin-left:50px;">{{$student->brand}}<span style="margin-left:300px;">{{$student->model}}</span></p>
  <hr>
 
 <p style="margin-top:50px;margin-left:50px;">{{$student->km}}<span style="margin-left:300px;">{{$student->fuel_type}}</span></p>
 <hr>
  <p style="margin-top:50px;margin-left:50px;">{{$student->engine_type}}<span style="margin-left:300px;">{{$student->engine_desc}}</span></p>
  <hr>
  <p style="margin-top:50px;margin-left:50px;">{{$student->no_of_cylinder}}<span style="margin-left:300px;">{{$student->mileage_highway}}</span></p>
  <hr>
  <p style="margin-top:50px;margin-left:50px;">{{$student->fuel_tank}}<span style="margin-left:300px;">{{$student->seating_capacity}}</span></p>
 <hr>
	
</div>
</div>
<div class="row">
<div class="col-xl-6">
    <h3>{{$student->car}} by sale</h3>
	<h1>Car features</h1>
<p style="margin-top:50px;margin-left:50px;">{{$student->air_conditioner}}<span style="margin-left:300px;">{{$student->power_door}}</span></p>
  <hr>
 
 <p style="margin-top:50px;margin-left:50px;">{{$student->antilook}}<span style="margin-left:300px;">{{$student->brake}}</span></p>
 <hr>
  <p style="margin-top:50px;margin-left:50px;">{{$student->Steering}}<span style="margin-left:300px;">{{$student->Airbag}}</span></p>
  <hr>
  <p style="margin-top:50px;margin-left:50px;">{{$student->Player}}</p>
  
</div>
</div>
</div>

<!-- /Error-404--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="{{url('assets/images/brand-logo-1.png')}}" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="{{url('assets/images/brand-logo-2.png')}}" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="{{url('assets/images/brand-logo-3.png')}}" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="{{url('assets/images/brand-logo-4.png')}}" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="{{url('assets/images/brand-logo-5.png')}}" class="img-fluid" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

<!--Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h6>Top Categores</h6>
          <ul>
            <li><a href="#">Crossovers</a></li>
            <li><a href="#">Hybrids</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Hybrid SUVs</a></li>
            <li><a href="#">Concept Vehicles</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Request a Quote</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <p class="copy-right">Copyright &copy; 2022 CarForYou. All Rights Reserved</p>
        </div>
		<div class="col-md-6 text-right">
          <div class="footer_widget">
            <p>Download Our APP:</p>
            <ul>
              <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        
          <div class="login_wrap">
		  <div class="row">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username or Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
                  <label for="remember">Remember Me</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-bs-toggle="modal" data-bs-dismiss="modal">Signup Here</a></p></br>
        <p><a href="#forgotpassword" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Login-Form --> 

<!--Register-Form -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        
          <div class="signup_wrap">
		  <div class="row">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email address*">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-bs-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{url('assets/js/interface.js')}}"></script> 
<script src="{{url('assets/js/31f5977fdc.js')}}"></script> 
<!--Switcher-->
<script src="{{url('assets/switcher/js/switcher.js')}}"></script>
<!--bootstrap-slider-JS--> 
<script src="{{url('assets/js/bootstrap-slider.min.js')}}"></script> 
<!--Slider-JS--> 
<script src="{{url('assets/js/slick.min.js')}}"></script> 
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript">

	const text = document.getElementById('text1');
	const txt = document.getElementById('text2');
	var y = document.getElementById('quantity')
	let value;
	
	function price(event) {
	  
	  value = event.target.value.split(",");
	  text.innerHTML = value[0];
    txt.innerHTML = value[1];
	}
function qty(){

}
	function btn() {
	let y = document.getElementById('quantity').value
    const mytable = document.getElementById('tt');
    let x  = "<td>"+ value[0]  + "</td>" +
"<td>" + value[1] +"</td>" +
"<td>" +  y + "</td>" +
"<td>" +  value[0] * y + "</td>";
    
    mytable.innerHTML += x;
  
	}
	function showbigimage(cd){
dd = document.getElementById('bigimage')
if(cd == "c1"){
dd.src = c1.src

	}
	if(cd == "c2"){
dd.src = c2.src
	
	}
	if(cd == "c3"){
dd.src = c3.src
	
	}
}
</script>
</body>
</html>