<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taylor Tetreau</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstraptest/test.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  	<div id="header" class="container">
	  <h2 class="text-center" id="name">Taylor Tetreau</h2>
  		<h4 class="text-center">Writer</h4>
		<div class="container" id="menu">
			<div>
				<table class="table text-center">
					<tr id="menuTable">
						<td class="menuOp" id="about">About</td>
						<td id="contact" class="menuOp">Contact</td>
					</tr>
				</table>
			</div>
		</div>
  	</div>
  	<div class="container jumbotron" id="content">
  		<form action="contactconfirm.php" method="post">
  			<div class="row">
  				<textarea id="userInput" name= "message" placeholder="Type your message here..."></textarea>
  			</div>
  			<div class="row">
  				<div class="col-lg-5 col-md-5 col-sm-4 col-xs-3 col-md-offset-7 col-sm-offset-6 col-xs-offset-4 col-lg-offset-6 text-nowrap">
  					Your email:<input type="email" id="userEmail" name="email" placeholder="example@taylortetreau.com">
  					<input type="submit" class="submit btn btn-sm btn-info" id="submit">
  				</div>
  			</div>	
  		</form>
	</div>
  	</div>
  	
  	<div class="row" id="spacer"></div>
  	
  	<footer class="footer">
      <div class="container">
        <p class="text-muted text-center">
        	<a class="social" href="http://www.facebook.com/taylor.tetreau">facebook</a>
        	<a class="social" href="http://www.twitter.com/taylortetreau">twitter</a>
        	<a class="social" href="http://www.tumblr.com/youvegotbeauty">tumblr</a>
        </p>
      </div>
    </footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
	<script src="Taylor/taylor.js"></script>
  </body>
</html>