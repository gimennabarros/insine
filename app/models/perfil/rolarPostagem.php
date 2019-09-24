<?php  

	if (isset($_GET['post'])) {
		echo "
		<script>
	    	$(document).ready(function() { 
		        window.location.href='#foo';
		    });
		</script>
	";
	}