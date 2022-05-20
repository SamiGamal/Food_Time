<?php 
 


require '../autoload.inc.php';



if (isset($_POST['order'])) {
	
     $food = $_POST['order'];

     $db = new data();
	 $db->insertdb($food);	
	 
}
else
{
	echo "error";
}
