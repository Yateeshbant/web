<?php

if($_SERVER['HTTP_ORIGIN'] == "https://yateeshbant.github.io/subs/") {
    header('Access-Control-Allow-Origin: https://yateeshbant.github.io/subs/');
    header('Content-type: application/xml'); 
	$conn = mysqli_connect("remotemysql.com", "Wox2VHeqfX", "9bcMKoUSKy", "Wox2VHeqfX");
	$result = mysqli_query($conn, "SELECT * FROM subs");
	$data = array();
	while ($row = mysqli_fetch_object($result))
	{
		array_push($data, $row);
	}
	echo json_encode($data);
	exit();

	
} else {    
  header('Content-Type: text/html');
  echo "<html>";
  echo "<head>";
  echo "   <title>Another Resource</title>";
  echo "</head>";
  echo "<body>",
       "<p>This resource behaves two-fold:";
  echo "<ul>",
         "<li>If accessed from <code>http://arunranga.com</code> it returns an XML document</li>";
  echo   "<li>If accessed from any other origin including from simply typing in the URL into the browser's address bar,";
  echo   "you get this HTML document</li>", 
       "</ul>",
     "</body>",
   "</html>";
} 
