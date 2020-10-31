<?php

$host='localhost';
$user='root';
$password='';
$dbname='covid';

	$conn=mysqli_connect($host,$user,$password,$dbname);

	if(!$conn){
				die('could not connect:'.mysqli_connect_error());
	}	
	else{
					if(isset($_POST["submit"])){
							$user=$_POST["Patientname"];
							
							$gender=$_POST["gender"];
							
							$age=$_POST["Age"];
							
							$occupation=$_POST["occupation"];
							
							$email=$_POST["email"];
							
							$phone=$_POST["phone"];

							$address=$_POST["Address"];

							$medical=$_POST["Medical"];

							$symptoms=$_POST["symptoms"];


											$query="insert into book(patientname,age,gender,email,phone,address,occupation,medical,sysmpotms) values('$user','$age','$gender','$email','$phone','$address','$occupation','$medical','$symptoms')";
											
											$add=mysqli_query($conn,$query)or die(mysqli_error($conn));

											if($add)
												{echo "success";
											header("location:CoronavirusPortal.html");
										}

											else{echo "failed";}
											}
											else{
												echo "enter correct password";
											}
					}
						mysqli_close($conn);
?>
			