
<?php
 
    $Firstname = $data->FirstName;
    $Lastname = $data->LastName;
    $Username = $data->Username;
    $Password =  password_hash($data ->Password,PASSWORD_DEFAULT);
    $Role = $data->Role;

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