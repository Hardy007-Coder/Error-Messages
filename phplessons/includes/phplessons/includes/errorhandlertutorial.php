<?php
 //We then check if the user has clicked the signup button
 if (isset($_POST['submit'])) {

    //Then we include the database connection
    include_once '\xampp\xampp\htdocs\phplessons\includes\connect.php';

//And we get the data from the signup form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

//Check if inputs are empty
if (empty($name) || empty($email) || empty($password) || empty($userlevel)) {
    header("Location: ../errorhandlertutorialform.php?errorhandler=empty");
    exit();
}

else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
        header("Location: ../errorhandlertutorialform.php?errorhandler=char"); 
    }
}

/*else {
    //Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../errorhandlertutorialform.php?errorhandler=invalidemail");
        exit(); 
    }
}
    else {
        header("Location: ../errorhandlertutorialform.php?errorhandler=success");
        exit();
    }



 
else {
    header("Location: ../errorhandlertutorialform.php?errorhandler=error");
}*/

 }

?>