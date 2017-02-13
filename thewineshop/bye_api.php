<?php  
	$db_servername = "localhost";
	$db_username = "root";
	$db_password = "1412";
	$db_name = "db_wine";
	$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);

		$name_wine=$_POST["namewine"];
		$born_wine=$_POST["bornwine"];
		$piece_wine=$_POST["piecewine"];

	if ($conn->connect_error) {
			exit();

	}else
	{

		$sql = "INSERT INTO wine_pr
		(wine_name,wine_born,wine_piece) 
		VALUES ('".$name_wine."','".$born_wine."','".$piece_wine."')";
		//echo $sql;
		//exit();
		if ($conn->query($sql)==TRUE)
		{
			header("location:product.php");
		}else{
			echo "error";
		}
		$conn->close();
	}
?>