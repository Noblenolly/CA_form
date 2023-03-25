<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "myformdb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
		$nationality = $_REQUEST['nationality'];
        $comment = $_REQUEST['comment'];
		
		// Performing insert query execution
		// here our table name is tb1
		$sql = "INSERT INTO tb1(username,password,gender,nationality,comment) VALUES ('$username',
			'$password','$gender', '$nationality','$comment')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			/*echo nl2br("\n$username\n $nationality\n "
				. "$username\n $username\n $username");*/
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
