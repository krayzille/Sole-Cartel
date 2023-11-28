<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Sole Cartel</title>
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }

    </style>

</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>


    	<link rel="stylesheet" href="style10.css">
        <div class="row">
            <div class="col-2">
                <h1>Comfort and Classic <br>Quality and Style </h1>
                    <p> 
                        For each one of those shoe sweethearts out there, Sole Cartel <br>
						offer the one-stop goal to pick the correct match of footwear. <br>
						To satisfy the affection for shoes, we offer heaps of alternatives <br>
						from driving footwear marks, all under one rooftop. Gone are the days  <br>
						when you needed to go from store to store to locate the correct style and 
						size for yourself. <br>
						At Sole Cartel,, you can locate a vast accumulation of dashing footwear <br>
						in all sizes and styles, all inside a couple of snaps. <br>
						<br>
						Devoted to satisfying your shopping wants with no inconvenience, we ensure <br>
						that you encounter smooth web based requesting background. Our intriguing accumulation <br>
						of elegantly insightful footwear is accessible at astonishing costs that will really <br>
						shock you. So be a shoe-holic with Sole Cartel. <br>
                    </p>
					<div class="buttons">
					<button class="btn-hover color-3">Contact Us &#8594</button>
				</div>
            </div>
            <div class="col-2">
                    <img src="images/store1.jpg">
            </div>
        </div>
    
    
    
    


   
	
	<!-------------------Footer--------------------->
    <div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<a href="https://www.oppo.com/ph/"><img src="images/oppo%20logo.png"></a>
				</div>
				<div class="col-5">
					<a href="https://www.coca-colacompany.com/"><img src="images/colacola%20logo.png"></a>
				</div>
				<div class="col-5">
					<a href="https://www.paypal.com/ph/home"><img src="images/paypal.png"></a>
				</div>
				<div class="col-5">
					<a href="https://www.bdo.com.ph/personal"><img src="images/bdo.png"></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<p>Copyright Disclaimer: All images, videos and media used in this webpage are used for educational purposes only. No profit is made in making this webpage. All rights belong to their licensed owners.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li><a href="https://www.facebook.com">Facebook</a></li>
						<li><a href="https://www.twitter.com">Twitter</a></li>
						<li><a href="https://www.instagram.com">Instagram</a></li>
						<li><a href="https://www.youtube.com">Youtube</a></li>
					</ul>
				</div>
			</div>
		</div> 
    </div>


	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>