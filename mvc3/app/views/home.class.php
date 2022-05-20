<?php  
 require 'app/autoload.inc.php';

?>

<input type="text" id="txt"><br>
<button id="btn">Enter</button>

<div>
 <?php  

$db2 = new data();
 $db2->showingorder();

 ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function () {
	
	$('#btn').click(function(){

	var order = $('#txt').val();
     $.post('/mvc3/app/controller/insertorder.class.php',{order:order});
	});
});

</script>