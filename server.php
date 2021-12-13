<?php 

session_start();

include('config.php');
// include('header.php');



$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// registers user 

if(isset($_POST['reg_user'])){
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // want the user to fill all out, 
    // if it is empty... a new function array()push to an array of errors

    if (empty($first_name)) {
    array_push($errors, 'First Name is required');
    }

    if (empty($last_name)) {
    array_push($errors, 'Last Name is required');
    }

    if (empty($username)) {
        array_push($errors, 'Username is required');
    }

    if (empty($email)) {
    array_push($errors, 'Email is required');
    }

    if (empty($password_1)) {
    array_push($errors, 'Password is required');
                
    }
    if ($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match');
                    
    }

    // checking table to make sure that names and P/Ws against table THEN selecting it from  DBs table

    $user_check_query ="SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";

    $results = mysqli_query($iConn, $user_check_query);


$rows = mysqli_fetch_assoc($results);

if($rows)
 {

    if($rows['username'] == $username) {
        array_push($errors, 'Username is already used. Please select another.');
    }

    if($rows['email'] == $email) {
        array_push($errors, 'Email is already used. Please select another.');
    }

 }//closes big rows


//  then: if no errors, then yayayay!

if(count($errors) < 1) {
// new function: md5 will split out your DBS a 32 hex char value for password
$password = md5($password);
// now $password refers to both p/w 1 and 2.

// now this will insert the registration data into the table in the DBs. and this will happen by using INSERT

$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";


mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');

} // end count 

} // end if isset reg user


// have to communicate with the login password_get_info

if(isset($_POST['login_user'])) {
    $username= mysqli_real_escape_string($iConn, $_POST['username']);
    $password= mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username))  {
        array_push($errors, 'Username is required');
    }

    //!!!!!!!!!!!!KELLY --- you are missing if empty password!!!!!

if(empty($password)) {
   array_push($errors, 'Password is required!');  
}


    if(count($errors) == 0) {
        
        $password = md5($password_1);

  // !!!!!!!!!!!!!!KELLY -- YOU MISSED THE PASSWORD PORTION HERE - I COMMENTED OUT WHAT YOU HAD 
//$query = "SELECT * FROM users WHERE username = '$username'";

// !!!!!!!!!!below is correct!!!!!!!

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

$results = mysqli_query($iConn, $query);
// if username and password is = 1 yayayay!

if(mysqli_num_rows($results) == 1)  {


    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;
    // if successful we will be directed to index.php
    header('Location:index.php');

}else {
    array_push($errors, 'Wrong username and password combination');
}
    }
}



// end isset login