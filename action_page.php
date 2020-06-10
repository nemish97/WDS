<?php require 'connection.php';?>
<?php


	
	if ((isset($_POST['submit'])) ){
		if(!empty($_POST['online'])){
    	$online=$_POST["online"];
	}
	else
	{
		$online="none";
	}

	if(!empty($_POST['Service'])){
    	
	$checkbox1[] = $_POST['Service'];
    $chk="";  
    $i=0;
      foreach ($checkbox1[$i] as $check)
      {
      	 $chk .= $check. ",";
      	 $i++;
      }
	}
	else
	{
		$chk="";
	}

	$BusinessName=$_POST["BusinessName"];
	$BusinessDescription=$_POST["BusinessDescription"];
	$URL=$_POST["URL"];

	if(!empty($_POST['extraInfo'])){
    	$extraInfo=$_POST["extraInfo"];
	}
	else
	{
		$extraInfo="none";
	}

	$name=$_POST["Name"];
	$Email=$_POST["Email"];
	$Contact=$_POST["Contact"];


	$sql = "INSERT INTO `modaldata`( `Online`, `Services`, `BusinessName`, `BusinessDescription`, `URL`, `Comment`, `Name`, `Email`, `Contact`) 
	VALUES ('$online','$chk','$BusinessName','$BusinessDescription','$URL','$extraInfo','$name','$Email','$Contact')";

	if ($conn->query($sql) === TRUE) {

	echo '<script type="text/javascript">
	location="formsuccess.php";
	</script>';


	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
	}
	
	




?>