<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!----------------------Bootstrap.css --------------->
	<link rel="stylesheet" type="text/css" href="css/style.css"></li>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<title>Banking System</title>
</head>
<style>
	.container-fluid h1 {
		color: #1a2460;
		-webkit-text-stroke: 0.3vh rgb(250 8 4);
	}
	.container-fluid h2 {
		color: #000000;
		-webkit-text-stroke: 0.3vh rgb(250 4 4);
	}
	h1{
		animation: type 30s infinite;
	}
	@keyframes type {
		0%{margin-left: 100px;}
		10%{margin-left: 50px;}
		20%{margin-right: 100px;}
		30%{margin-right: 50px;}
		40%{margin-left: 100px;}
		50%{margin-left: 50px;}
		60%{margin-right: 100px;}
		70%{margin-right: 50px;}
		80%{margin-left: 100px;}
		90%{margin-left: 50px;}
		100%{margin-right: 100px;}
	}
</style>
<body>
<?php
include 'navbar.php';
?>

<div class="container-fluid">
	<div class="row intro py-5 ">
		<div class="col-sm-12 col-md">
			<div class="heading text-center my-5">
		   <h2>Welcome To</h2>
		   <h1>THE BANK OF SPARK</h1>
		</div>
		</div>
		<div class="col-sm-12 col-md img text-center py">
			<img class="im" src="img/bank.jpeg" class="img-fluid py-10  zoom">
		</div>
	</div>
</div>

<br>

<h3 class="action">CHOOSE AN ACTION</h3><br>
  <div class="container px-4">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3 border bg-light">
          <div class="col">
            <img src="img/user.png" class="img-fluid zoom"><br>
          </div>
          <a href="viewalluser.php"><button>View User</button></a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light">
          <div class="col">
            <img src="img/transfer1.jpg" class="img-fluid zoom"><br>
          </div>
          <a href="transferMoney.php"><button>Make a Transaction</button></a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light">
          <div class="col">
            <img src="img/history.jpg" class="img-fluid zoom"><br>
            <a href="transaction.php"><button>Transaction History</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<br>

<!------------------------------footer------------------------------>

   <!-------Footer------>
  <div class="footer-dark">
    <footer>
      <div class="container-fluid bottom-fixed bg-dark ">
        
        <div class="text-center">
<p><a class=" text-white-50" href="https://internship.thesparksfoundation.info/">WEB DEVELOPEMENT & DESIGNING INTERN @THE SPARK FOUNDATION </a> </p>
        </div>
        <div class="col item social">
        	<p class="copyright text-white-50">Follow Link</p>
          <a href="https://www.facebook.com/profile.php?id=100008154486801"><i class="icon ion-social-facebook"></i></a>
          <a href="https://www.linkedin.com/in/satish-kumar-5a60b0146/"><i class="icon ion-social-linkedin"></i></a>
          <a href="https://www.youtube.com/watch?v=RXddGTqT_ig"><i class="icon ion-social-youtube"></i></a>
          <a href=""><i class="icon ion-social-github"></i></a>
          <a href="https://mobile.twitter.com/Satishmonu2"><i class="icon ion-social-twitter"></i></a>
        </div>
        <p class="copyright text-center text-white-50 py-3">© 2021 Copyright:
    Made with ❤️ by <b>Er Satish Kumar(UCET-IT)</b></p>
      </div>
       
  <!-- Copyright -->
    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>