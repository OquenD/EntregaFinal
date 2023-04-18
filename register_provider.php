<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['name'], $_POST['lastname'], $_POST['phonenumber'], $_POST['email'], $_POST['password'], $_POST['service'], $_POST['business_name'], $_POST['service_name'], $_POST['personal_description'], $_POST['business_description'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['name']) || empty($_POST['lastname']) ||empty($_POST['phonenumber']) || empty($_POST['email']) ||empty($_POST['password']) || empty($_POST['service_type']) || empty($_POST['business_name']) || empty($_POST['service_name']) || empty($_POST['personal_description']) || empty($_POST['business_description'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
// We need to check if the account with that username exists.
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['name']) == 0) {
    exit('name is not valid!');
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}
if ($stmt = $con->prepare('SELECT id, password FROM providers WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Usuario ya existe!';
	} else {
		// Insert new account
        // Username doesn't exists, insert new account
        if ($stmt = $con->prepare('INSERT INTO providers (name, lastname, phonenumber, email, password, service, business_name, service_name, personal_description, business_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['name'], $password, $_POST['email']);
            $stmt->execute();
            echo 'Se ha registrado exitosamente';
        } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
	}
	$stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>