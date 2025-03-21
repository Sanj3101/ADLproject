 <?php session_start();
    include 'connection.php';  
    include 'navbar.html';
    ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Details</title>

</head>
<style>
        html, body {
            background-color: #4a8e77; /* Green color - match your header */
            margin: 0;
            padding: 0;
            min-height: 100%;
        }
    </style>
<body>
<div style="background-image: url('images/main2.jpg');">
<?php

    $sql = "SELECT * FROM moviedetails";
	$result = mysqli_query($conn, $sql);
	$mid = $_GET["movieid"];
	if (mysqli_num_rows($result) > 0) 
	{
		echo '<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">';
    while($row = mysqli_fetch_assoc($result)) 
	{
		if($row["mid"]==$mid)
		{	
			$mname = $row["moviename"];
			echo "<br><br>";
			$location1=$row["image"];
			
				echo "<br>";
				print"<p style='float:left;'><img src=\"$location1\" width=\"400\" height=\"650\"\/></p>";
                echo "<b><p style='font-family:Verdana; font-size:64px; margin-left:7em; color:rgb(47, 27, 21);'>" .$row["moviename"] . "</b>";
                echo "</p><br><br><p style='font-family:Verdana; font-size:24px; margin-left:18em; color:white;'>";
				echo "Year of Release:".$row["year"];
				echo "<br><br>";
				echo "Language: ".$row["language"];
				echo "<br><br>";
				echo  "Duration: ".$row["duration"];
				echo "<br><br>";
				echo "Genre:".$row["genre"];
				echo "<br><br>";
				echo "Director/s: ".$row["director"];
				echo "<br><br>";
				echo "Stars: ".$row["stars"];
				echo "<br><br></p><p style='font-family:Verdana; font-size:24px; color:white;'>";
				echo "Summary: ".$row["summary"];
				$avg = "SELECT avg(rating) as avg from rating where moviename='$mname'";
				$answer = mysqli_fetch_assoc(mysqli_query($conn,$avg));
				echo "</p><br><br>";
				echo "<p style='text-align:center; font-family:Verdana; font-size:24px; color:white;'>Rating: ".round($answer["avg"],2)." <img src=\"images/star.png\" width=\"25\" height=\"30\"\/>" ;
				echo "";
				if(isset($_SESSION["username"])){
             echo '<form method="POST" class="form-group" action="rating.php?id='.$row["moviename"].'&uname='.$_SESSION["username"].'">
                <select name="rating" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
         <input type="submit" name="rate" value="Rate" class="btn btn-sm "/>
         </form>';
       }
				else
				{
					echo "<br><br>";
					echo '<a href="login.php" style="color:red; font-weight:bold;">LOGIN TO RATE</a></p><br><br><br>';
				}
			break;
		}	
	}
    echo '</div><div class="col-sm-2"></div></div>';
	   
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
</div>
</body>
</html>