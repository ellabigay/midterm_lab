<?php 
include "config.php";




//write the query to get data from users table


// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//write sql query

		$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New Record Added Successfully."; 
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}





?>

<!DOCTYPE html>
<html>
<body>
    <body style="background-color: #f8b195">
        <title>Fill-up Form</title>

<center><h2>Fill up Form</h2></center>

<form action="" method="POST">
  <center><fieldset>
   
    First name:<br>
    <input type="text" name="firstname">
    <br><br>
    Last name:<br>
    <input type="text" name="lastname">
    <br><br>
    Email:<br>
    <input type="email" name="email">
    <br><br>
    Password:<br>
    <input type="password" name="password">
    <br><br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <a href="view.php" > View Record </a>
  

  </fieldset></center>
</form>



</body>
</html>