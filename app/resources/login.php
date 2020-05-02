<?php

include('conn_database.php');

session_start();

$receiving_data = json_decode(file_get_contents("php://input"));

$not_valid = '';

if (empty($receiving_data->username)) {
    $error[] = 'Please enter your username';
} else {
    $data[':username'] = $receiving_data->username;
}

if (empty($receiving_data->password)) {
    $error[] = 'Please enter your password';
}

if (empty($error)) {

    //---------------    SHOULD BE LARAVEL CODE FOR AUTHENTICATE THE USER FROM DATABASE

    $query = "SELECT * FROM register WHERE username=:username";
    $statement = $connect->prepare($query);
    if ($statement->execute($data)) {
        $result = $statement->fetchAll();
        if ($statement->rowCount() > 0) {
            foreach ($result as $row) {
                if (password_verify($receiving_data->password, $row["password"])) {
                    $_SESSION["name"] = $row["name"];
                } else {
                    $not_valid = 'Wrong password';
                }
            }
        } else {
            $not_valid = 'Wrong username';
        }
    }

    //----------------   END OF AUTHENTICATION

} else {
    $not_valid = implode(", ", $error);
}

$for_angularjs = array(
    'error' => $not_valid
);

echo json_encode($for_angularjs);

?>
