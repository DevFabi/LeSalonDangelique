
<?php include("includes/header.php"); ?>
<?php include("includes/menu.php"); ?>
<?php include("includes/analytics.php"); ?>


	<div id="contact">
		<div class="sectioncontact">
			<div class="row">
				<div class="hidden-xs hidden-md col-lg-12">
					<h1>Contact</h1>
					<div class="col-lg-4">
					<br>
					</div>	
					<div class="col-lg-4">
						<div class="bulle1">

						<?php
							$TO = "contact@lesalondangelique.com";
							$subject = "Message du site Lesalondangelique";
							$message = "";

							foreach($_POST as $key => $val){
								$message .= "$key : $val\n";
							}
							
							mail($TO,$subject,$message);
							echo "L'email a été envoyé."; ?>


	   				</div>
	   			</div>
					<div class="col-lg-4">	
					</div>
				</div>	
			</div>
		</div>
	


<div class="row hidden-xs">
	<br><br><h1>Où nous trouver</h1><br><br>
	<div class="col-lg-3">
	</div>
	<div class="col-lg-6 hidden-xs">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41985.4049512392!2d2.2802927785083593!3d48.875602579289136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc9b50a7345%3A0x31d1917e18becb0!2sLe+Salon+d&#39;Ang%C3%A9lique!5e0!3m2!1sfr!2sfr!4v1485551767248" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><br>
	</div>
	<div class="col-lg-3">
	</div> 
</div>
</div>


<?php include("includes/footer.php"); ?>




 
 
 
 



 
						 

	   
 
