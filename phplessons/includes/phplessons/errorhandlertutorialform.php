<?php

/*include_once '\xampp\xampp\htdocs\phplessons\includes\connect.php';

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);*/


?>

<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta charset="UTF-8">
</head>

<body>





<form action="includes\errorhandlertutorial.php" method="POST">
<?php

/*if (isset($_GET['name'])) {
    $name = $_GET['name']
    echo "<input type="text" name ="name" placeholder="Name" value ="'.$name.'">";
}
else {
    echo "<input type="text" name ="name" placeholder="Name">";
}

if (isset($_GET['userlevel'])) {
    $userlevel = $_GET['userlevel']
    echo "<input type="text" name ="userlevel" placeholder="User Level" value ="'.$userlevel.'">";
}
else {
    echo "<input type="text" name ="userlevel" placeholder="User Level">";
}*/


?>

<input type="text" name ="name" placeholder="Name">
<br>
<input type="email" name ="email" placeholder="Email Address">
<br>
<input type="password" name ="password" placeholder="Password">
<br>
<input type="text" name ="userlevel" placeholder="User Level">
<br>
<button type="submit" name="submit">Sign Up</button>

<?php

/*$fullUrl = "http: //$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "errorhandler=empty") == true) {
    echo "<p>You did not fill in all fields!</p>";
    exit();
}

elseif (strpos($fullUrl, "errorhandler=char") == true) {
    echo "<p>You used invalid characters!</p>";
    exit();
}

elseif (strpos($fullUrl, "errorhandler=email") == true) {
    echo "<p>You used an invalid email!</p>";
    exit();
}

elseif (strpos($fullUrl, "errorhandler=success") == true) {
    echo "<p>You successfully logged in!</p>";
    exit();
}*/



if (!isset($_GET['errorhandler'])) {
    exit();
}
else {
    $signupCheck = $_GET['errorhandler'];
}
    
    if ($signupCheck == "empty") {
        echo "<p>You did not fill in all fields!</p>";
        exit();
    }
    elseif ($signupCheck == "char") {
        echo "<p>You used invalid characters!</p>";
    exit();
}
elseif ($signupCheck == "email") {
    echo "<p>You used an invalid email!</p>";
    exit();
}
elseif ($signupCheck == "success") {
    echo "<p>You successfully logged in!</p>";
    exit();
}






?>


</form>








</body>

</html>