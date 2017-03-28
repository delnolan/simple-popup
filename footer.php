<div class="developmentmode">
	<div class="close-pop-up close-notice-box">x</div>
	<h5>This College is funded by:</h5>
</div>
<?php 
if(!isset($_SESSION['logos'])){?>
	<script type="text/javascript">	
		/* If $_SESSION is not set make the popup appear after seven seconds*/
		setTimeout(function(){
			jQuery(".developmentmode").removeClass('hide');
			jQuery(".developmentmode").addClass('show');
		}, 7000);
	</script>
<?php }else{ ?>
	<script type="text/javascript">
		/* If it is set make sure it doesn't appear */
		jQuery(".developmentmode").removeClass('show');
		jQuery(".developmentmode").addClass('hide');
	</script>
	<?php } ?>
	<script type="text/javascript">	
		/* Remeove the popup once the close button has been clicked */
		jQuery('.close-notice-box').on('click', function() {
			jQuery(".developmentmode").removeClass('show');
			jQuery(".developmentmode").addClass('hide');
		});
		

	</script>  
<?php 
$_SESSION['logos'] = "popup";
?>
