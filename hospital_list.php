<!DOCTYPE html>
<html>
<head>
	<title>Choose Your Place</title>
	<style type="text/css">
		.first{
			position: relative;
			background: #FFFFFF;
			padding: 45px;
			text-align: center;
		}
		button{
			background: #007bff;
			cursor: pointer;
			color: #FFFFFF;
			transition: all 0.3 ease;
		}
	</style>
</head>
<body>
	<center>
	<div class="fisrt">
		<form method="post">
				<label for="place">Choose Your Place:</label>
			<select name="place" required="place">
					 <option value="none">choose</option>
				    <option value="westbengal">westbengal</option>
				    <option value="telangana">telangana</option>
				    <option value="andhra-pradesh">andhra-pradesh</option>
				    <option value="rajasthan">rajasthan</option>
				    <option value="kashmir">kashmir</option>
				    <option value="assam">assam</option>
				    <option value="uttarpradesh">uttarpradesh</option>
				    <option value="tamilnadu">tamilnadu</option>
				    <option value="karnataka">karnataka</option>
				    <option value="maharashtra">maharashtra</option>
				    <option value="madhyapradesh">madhyapradesh</option>
			</select><br>
						<button name="submit" type="submit">submit</button>
		</form>
	</div>
<?php

		if(isset($_POST["submit"])){
						$user=$_POST["place"];
								switch($user)
									{
										case 'madhyapradesh':
											header("location:madhyapradesh.html");
											break;
										case 'telangana':
											header("location:telangana.html");
											break;
										case 'westbengal':
											header("location:westbengal.html");
											break;
										case 'andhra-pradesh':
											header("location:andhra-pradesh.html");
											break;
										case 'rajasthan':
											header("location:rajasthan.html");
											break;
										case 'kashmir':
											header("location:kashmir.html");
											break;
										case 'assam':
											header("location:assam.html");
											break;
										case 'uttarpradesh':
											header("location:uttarpradesh.html");
											break;
										case 'tamilnadu':
											header("location:tamilnadu.html");
											break;
										case 'karnataka':
											header("location:karnataka.html");
											break;
										case 'maharashtra':
											header("location:maharashtra.html");
											break;

									}
					}
?>
</center>
</body>
</html>