
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="contactstyle.css">
        <div class="container1">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            We appreciate your time and strive to quickly and accurately provide answers to your questions.
                <br>
            You may fill up this form here and our support team will email you the relevant documents within 5 business days.
          </p>

          <div class="info">
            <div class="information">
            <span><i class = "fas fa-map-marker-alt"></i>&nbsp;&nbsp;G. Del Pilar St, Marikina City</span>
            </div>
            <div class="information">
              <span><i class = "fas fa-envelope"></i>&nbsp;&nbsp;solecartel@gmail.com</span>
              
            </div>
            <div class="information">
              <span><i class = "fas fa-phone"></i>&nbsp;&nbsp;(02) 8532 5021</span>
            </div>
          </div>

          

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <label class="labels" for="">Username</label>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <span></span>
            </div>
            <label class="labels" for="">Email</label>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <span>Email</span>
            </div>
            <label class="labels" for="">Phone</label>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <span>Phone</span>
            </div>
            <label class="labels" for="">Message</label>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>


    <div class="col-sm-3">
	        		
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
      <style>
            .title{
                color: #D9C9FF;
                font-size: 16px;
                font-weight: bold;
            }

            .text{
                color: #D9C9FF;
            }

            .information {
                color: #D9C9FF;
                font-size: 14px;
            }

            .labels {
                color: #D9C9FF;
            }

          

          </style>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>