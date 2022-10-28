<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACE APP</title>
</head>
<body>
    
    <h3>Peys App</h3>
	
	<form method="get">
		<label for="txtVolume">Select Photo Size:</label>
		<input type="range" name="imgSize" id="imgSize" value="60%" min="0" max="100" step="10"><br>
		<label for="clrTheme">Pick a Color:</label>
		<input type="color" name="clrTheme" value="black" ><br>
		<input type="submit" name="process" value="Process">
	<hr>
		<?php 
	 	if(isset($_REQUEST['process'])){
	 		$imgSize = 60;
	 		$imgSize = $_REQUEST['imgSize'];
	 		$color = $_REQUEST['clrTheme'];	
	 	}
	    ?>
        <img src="" alt="">
	<img src="My_Picture.jpg" style="width: <?php echo $imgSize . '%'; ?>;border-color: <?php echo $color; ?>;border-width: 10px; border-style: solid;">
	</form>
    
</body>
</html>
