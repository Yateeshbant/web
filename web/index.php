 
<?php
 $http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "https://yateeshbant.github.io/subs/" || $http_origin == "https://yateeshbant.github.io" )
{  
    header("Access-Control-Allow-Origin: $http_origin");
}
	 $conn = mysqli_connect("remotemysql.com", "Wox2VHeqfX", "9bcMKoUSKy", "Wox2VHeqfX");
		$result = mysqli_query($conn, "SELECT * FROM subs");
		$data = array();
		while ($row = mysqli_fetch_object($result))
		{
			array_push($data, $row);
		}
		echo json_encode($data);
		exit();

