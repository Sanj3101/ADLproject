<?php 
session_start();
include 'connection.php';  
include 'navbar.html';
?>
<!DOCTYPE html>
<html>
<head>
    <title>ShowAll</title>
    <style>
        .movie-container {
            text-align: center;
            margin-top: 20px;
        }
        .movie-image {
            width: 200px;
            height: 300px;
            margin: 10px;
            transition: transform 0.4s ease-in-out;
            border-radius: 10px; /* Optional: Adds rounded corners */
        }
        .movie-image:hover {
            transform: scale(1.06); /* Slight zoom effect */
        }
    </style>
</head>
<body>
	
<div style="background-image: url('images/main2.jpg');">

	<br>
   <div class="movie-container">
   <?php
    $sql = "SELECT * FROM moviedetails";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    $count=0;
	    while($row = mysqli_fetch_assoc($result))
		{
			$location = $row["image"];
			echo '<a href="details.php?movieid='.$row["mid"].'">';
			echo '<img src="'.$location.'" class="movie-image">';
			echo '</a>'; 
			
			$count++;
			if($count == 5) {
				echo '<br><br>';
				$count = 0;
			}
		}
	} else {
	    echo "0 results";
	}
	mysqli_close($conn);
   ?>
   </div>

   <footer>
       <div class="container">
           <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; Studio Ghibli</h4>
       </div>
   </footer>

</body>
</html>
