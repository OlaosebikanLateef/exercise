<?php
//var_dump($_POST);

$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$selectedOption = $_POST['selected_option'];
$multipleOption = $_POST['multiple_option'];
$comment = $_POST['comment'];
$language = $_POST['language'];

displayMessage($email, $name, $gender, $selectedOption, $multipleOption, $comment, $language);

function displayMessage($email, $name, $gender, $selectedOption, $multipleOption, $comment, $language){
 echo 'The email is ' . $email . '  and the name is '. $name . ' and the gender is '. $gender. " ,and ". $selectedOption. " and ".$comment. "</br>";
 displayArrayInfo($multipleOption)."</br>";
 displayArrayInfo($language);
}
function displayArrayInfo(array $selection){
    foreach($selection as $value){
            echo $value."</br>";
    }
}



?>