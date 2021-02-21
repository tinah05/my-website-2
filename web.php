<?php
session_start();

// initializing variables
$id ="";
$email = "";
$password    = "";
$repeat_password ="";
$remember_me = array(); 

// connect to the database
$client = mysqli_connect('localhost', 'root', '', '');

//Create Table
$create_table = "CREATE TABLE 'client' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'email' varchar(100) NOT NULL,
  'password' varchar(100) NOT NULL,
  'repeat_password' varchar(100) NOT NULL,
  PRIMARY KEY ('id')
)"; //ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

$client->exec($create_table);
  echo "Clients table created successfully";


// signup USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($client, $_POST['id']);
  $email = mysqli_real_escape_string($client, $_POST['email']);
  $password = mysqli_real_escape_string($client, $_POST['password']);
  $repeat_password = mysqli_real_escape_string($client, $_POST['repeat password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $repeat_password) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($client, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, signup user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (id, email, password) 
  			  VALUES('$id', '$email', '$password')";
  	mysqli_query($client, $query);
  	$_SESSION['id'] = $id;
  	$_SESSION['success'] = "You are now signed up";
  	header('location: web.php');
  }
}

// ... 