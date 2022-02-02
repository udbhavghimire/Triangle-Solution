<?php 

	include_once 'login.php';

 ?>
 <section class="main-container">
 	<div class="main-container">
 		<?php 
 			if(isset($_SESSION['u_id'])){
 				echo "You are logged In!";
 			}
 		 ?>
 	</div>
 </section>