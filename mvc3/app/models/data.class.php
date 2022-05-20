<?php  

 
class data
{

	public function insertdb($food)
	 {
	 	
         $conn = new mysqli('localhost','root','','test2');
         $qr   = "INSERT INTO `ac` (`ID`, `food`) VALUES (NULL,'$food')";

         if ($conn->query($qr) === TRUE) {
         	
         	
         	echo "New record created successfully";
 
} else {

  echo "Error: " . $qr . "<br>" . $conn->error;
}

	 }


	 public function showingorder()
	 {
	 	     $conn = new mysqli('localhost','root','','test2');
         $qr = "SELECT * FROM `ac`";
          
          $result = $conn->query($qr);

          if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo  "id: " . $row["ID"]. " - Food: " . $row["food"] ."<br>";
  }


} else {
  echo "0 results";
}
$conn->close();


	 }
}


?>