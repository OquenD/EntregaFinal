<?php
// Include config file
require_once "test_config.php";
 
// Define variables and initialize with empty values
$name = $lastname= $phonenumber = $email = $password = $birthdate = "";
$name_err = $lastname_err = $phonenumber_err = $email_err = $password_err = $birthdate_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate lastname
    $input_lastname = trim($_POST["lastname"]);
    if(empty($input_lastname)){
        $lastname_err = "Please enter a lastname.";
    } elseif(!filter_var($input_lastname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $lastname_err = "Please enter a valid lastname.";
    } else{
        $lastname = $input_lastname;
    }

    // Validate phonenumber
    $input_phonenumber = trim($_POST["phonenumber"]);
    if(empty($input_phonenumber)){
        $phonenumber_Err = "Please enter an phonenumber.";     
    } else{
        $phonenumber = $input_phonenumber;
    }

    // Validate Email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }

    // Validate Passowrd
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter an password.";     
    } else{
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }
    
    // Validate birthdate
    $input_birthdate = trim($_POST["birthdate"]);
    if(empty($input_birthdate)){
        $birthdate_err = "Please enter an birthdate.";     
    } else{
        $birthdate = $input_birthdate;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($lastname_err) && empty($phonenumber_err) && empty($email_err) && empty($password_err) && empty($birthdate_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (name, lastname, phonenumber, email, password, birthdate) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_lastname, $param_phonenumber, $param_email, $param_password, $param_birthdate);
            
            // Set parameters
            $param_name = $name;
            $param_lastname = $lastname;
            $param_phonenumber = $phonenumber;
            $param_email = $email;
            $param_password = $password;
            $param_birthdate = $birthdate;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: home.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 