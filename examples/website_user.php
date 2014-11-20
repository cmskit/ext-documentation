<?php exit; //prevent executing this File


/*
 * Now, let’s assume you already have a web registration form width 6 inputs:

    username
    password1
    password2
    firstname
    lastname
    emailaddress

All we need to do now is process the data that’s submitted from the form, create a USER object and Save it to the database.

This is the simplified code to process the data when the form is submitted:
*/

$user = new project\user();
$user->username = $_POST['username'];
if ($_POST['password1'] == $_POST['$password2']) {
    $user->password = $_POST['password1'];
}
$user->firstname = $_POST['firstname'];
$user->lastnme = $_POST['lastname'];
$user->emailaddress = $_POST['emailaddress'];
if ($user->Save()) {
    echo "user successfully saved";
}

////////////////////////////////////////////////

/*
* We need to create a simple login page (login.php) 
* which will have a username field, a password field 
* and a submit button. Information entered on this page 
* by the user will them be used to verify whether or not 
* the username/password combination is valid. 
* If the information is valid, then we’ll simply set 
* a status flag to “true” to indicate that the user is logged in.

The code should look something like this:
*/

$user = new user();
$userList = $user->GetList("username", "=", $_POST['username']);
if (count($userList) > 0) {
    $user = $userList [0];
}
if ($user->password == $_POST['password']) {
    $_SESSION['userId'] = $user->id;
    $_SESSION['loggedIn'] = true;
    echo "user is logged in!";
} else {
    echo "user is not logged in";
}

?>
