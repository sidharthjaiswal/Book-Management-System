
<?php

    $Firstname = $_POST["FirstName"];
    $Lastname =  $_POST["LastName"];
    $Username =  $_POST["UserName"];
    $Password =  password_hash( $_POST["Password"],PASSWORD_DEFAULT);
    $Role =  $_POST["Role"];

    $con = mysqli_connect("","root","");
	

	mysqli_select_db($con, "book-management-information-system");

    $sql = "INSERT INTO users (id,FirstName,LastName,UserName, Password, Role ) VALUES ('','$Firstname' , '$Lastname' , '$Username', '$Password', '$Role')";
    //to prevent redundancy
    $userData = mysqli_query($con,"SELECT * FROM users WHERE UserName='".$Username."'");
	
    if(mysqli_num_rows($userData) == 0)
    {
        alert("User already exists");
    }

    else {
        mysqli_query($con, $sql);
        alert("Username sucessfully added");
    }
	mysqli_close($con);  
    exit;

    ?>