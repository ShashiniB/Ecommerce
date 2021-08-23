<?php

$active='Contact';
include("includes/header.php");

?>
	   
<div id="content"><!-- content Bigin -->
	<div class="container"><!-- container Bigin -->
		<div class="col-md-12"><!-- col-md-12 Bigin -->
			<ul class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="index.php">Contact Us</a>
				</li>
			</ul>
		
		</div><!-- col-md-12 Finish -->
	


<div class="col-md-9">
	<div class="box">
		<div class="box-header">
			<center>
			<h2>Feel free to contact us</h2>
			<p class="text-muted">
			If you have any questions, feel free to contact us. Our customer service work 24/7
			</p>
			</center>
			
			<form action="contact.php" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" required>
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" required>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required>
				</div>
				
				<div class="form-group">
					<label>Message</label>
					<textarea name="message" class="form-control"></textarea>
				</div>
				
				
				
				<div class="text-center">
					<button type="submit" name="submit" class="btn btn-primary">
					<i class="fa fa-user-md"></i> Send Message</button>
				</div>
			</form>

			<?php 
			
			if(isset($_POST['submit'])){

				$sender_name = $_POST['name'];
				$sender_email = $_POST['email'];
				$sender_subject = $_POST['subject'];
				$sender_message = $_POST['message'];

				$receiver_email = "sha617922@gmail.com";
				mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

				///reply msg ///

				$email = $_POST['email'];
				$subject = "Welcome to our e-shop";
				$msg = "Thanks for sending us message. we will reply your message";
				$from = "sha617922@gmail.com";

				mail($email,$subject,$msg,$from);

				echo "<h2 align='center'> Your message has sent successfully </h2>";

			}

			?>

		</div>
	</div>
</div>

</div><!-- content Bigin -->
</div><!-- container Bigin -->

 <?php
   
   include("includes/footer.php");
   
   ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>