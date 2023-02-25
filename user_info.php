
<!DOCTYPE html>
<html>
<head>
<title>Confirm Order</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="user_info.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="mail.php" method="post">
                    <h2>Place your order</h2>
					<input type="hidden" name="services"  value="<?php echo $services?>">
					<input class="text" type="text" name="name" placeholder="Name" required="">
					<input class="text phone" type="phone" name="phone" placeholder="Phone" required="">
					<input class="text" type="text" name="location" placeholder="Location" required="">
					<!-- <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> -->
                    
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SUBMIT">
				</form>
			</div>
		</div>
	
	</div>
</body>
</html>