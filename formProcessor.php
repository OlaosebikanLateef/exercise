
<?php
//var_dump($_POST);
global $errors;
$errors  = array();

validateName($_POST['first_name'], "First name must be valid", "first_name");
validateName($_POST['last_name'], "Last name must be valid", "last_name");
validateEmailAddress($_POST['email'], "Email address must be valid", "email");
issFilled($_POST['gender'], "Please select one", "gender");

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$selectedOption = $_POST['selected_option'];
$multipleOption = $_POST['multiple_selection'];
$comment = $_POST['comment'];
$language = $_POST['language'];

global $errors;
if(empty($errors)){
    displayMessage($firstName, $lastName, $email,  $gender, $selectedOption, $multipleOption, $comment, $language);
} else{
   // $error;
    //header("location: http://localhost/exercise/index.php");
}

function displayErrorMessage($key){
    global $errors;
    if(array_key_exists($key, $errors)){
        echo $errors[$key];
    }
}


function displayMessage($firstName, $lastName, $email,  $gender, $selectedOption, $multipleOption, $comment, $language){
 echo 'The email is ' . $firstName . $lastName. '  and the name is '. $email . ' and the gender is '. $gender. " ,and ". $selectedOption. " and ".$comment. "</br>";
 displayArrayInfo($multipleOption)."</br>";
 displayArrayInfo($language);
}

function validateName($name, $error, $key){
    if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        global $errors;
        $errors[$key] = $error;
        //header("location: http://localhost/exercise/index.php");
 }
}

function issFilled($value, $error, $key){
    if(!isset($value)){
        global $errors;
        $errors[$key] = $error;
       // header("location: http://localhost/exercise/index.php");
    }
}   

function validateEmailAddress($email, $error, $key){
    if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        global $errors;
        $errors[$key] = $error;
        // header("location: http://localhost/exercise/index.php");
      }
 }


function displayArrayInfo($selection){
    if(is_array($selection))
    foreach($selection as $value){
            echo $value."</br>";
    }
}
?>
