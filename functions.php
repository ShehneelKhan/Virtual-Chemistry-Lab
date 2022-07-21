<?php 
session_start();

// connect to database

$db = mysqli_connect('localhost', 'root', '', 'vcl');


// variable declaration
$username = "";

$password_1="";
$password_2="";
$age="";
$studentorteacher="";
$email    ="";
$errors   = array();
$schoolname="";

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email,$password_1,$password_2,$age,$studentorteacher,$schoolname;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	if(isset($username) || isset($email) || isset($password_1) || isset($password_2) || isset($schoolname) ||isset($age) || isset($studentorteacher)){
		$username    =  e($_POST['name']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password1']);
		$password_2  =  e($_POST['password2']);
		$schoolname  =  e($_POST['school']);
		$age  =  e($_POST['age']);
		$studentorteacher  =  e($_POST['studentorteacher']);
	}


	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Name is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['studentorteacher'])) {
			$studentorteacher = e($_POST['studentorteacher']);
			$query = "INSERT INTO student (name, email, school, age,studentorteacher, password) 
					  VALUES('$username', '$email','$schoolname','$age', '$studentorteacher', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: index.php');
		}else{
			$query = "INSERT INTO student (name, email, school, age,studentorteacher, password) 
					  VALUES('$username', '$email','$schoolname','$age', '$studentorteacher', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM student WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors,$password;

	// grap form values
	if(isset($username) || isset($password)){
		$username = e($_POST['name']);
		$password = e($_POST['password']);
	}


	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM student WHERE name='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['studentorteacher'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: labs.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}