<?php
require "model/model.php";
function addUser($firstname, $lastname, $email) {
$user = insertUser($firstname, $lastname, $email);


if ($user === false) {
    die('Impossible d\'ajouter le chakal !');
}
else {
    header('Location: index.php?action=home');
}
};


function getError($email){
    $email_check = checkEmail($email);

    if ($email_check == true){
        header("Location: index.php?action=signup&error=alruse");
    }
}


?>