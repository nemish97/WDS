<?php require 'connection.php';?>
<?php


	
	if ((isset($_POST['submit'])) ){
	
	$Email=$_POST["Email"];
	
	$sql = "INSERT INTO `newsletter`(`emailid`) VALUES ('$Email')";

	if ($conn->query($sql) === TRUE) {

	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
	}
	
	
?>
<script type="text/javascript"> 
	alert('Thank you for Subscribing to our Newsletter. <br> We will keep you updated with all the things going on at WDS '); 
	location="index.html#newsletter";
</script> 