 <?php session_start();
    include 'connection.php';  
    include 'navbar.html';
    ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>ShowAll</title>
</head>
<body>
	
<div style="background-image: url('images/main2.jpg');">

	<br>
   <?php
    $sql = "SELECT * FROM moviedetails";
	echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $count=0;
    while($row = mysqli_fetch_assoc($result))
	{
		$location=$row["image"];
		echo'<html><body><a href="details.php?movieid='.$row["mid"].'">';
		print"<img src=\"$location\" width=\"200\" height=\"300\"\/>";
		echo '</a>'; 
		$count++;
		if($count==5)
		{
			echo'<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			$count=0;
		}
		echo"&nbsp;&nbsp;&nbsp;&nbsp;";
		echo'</body></html>';
		
    }
		
} else {
    echo "0 results";
}
mysqli_close($conn);


?>
	
   <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; Studio Ghibli</h4>
       </div>
   </footer>

</body>
</html>