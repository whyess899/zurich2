<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="thanks.php" method="post">
     	<h2>Enter Your Email Address</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email Address</label>
     	<input type="text" name="uname" placeholder="enter your email"><br>

     	
     	<button type="submit">Submit</button>
     </form>
</body>
</html>