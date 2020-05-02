<?php

include('conn_database.php');

$receiving_data = json_decode(file_get_contents("php://input"));

$message = '';
$not_valid = '';

if ((empty($receiving_data->name)) or (empty($receiving_data->username))) {
    $error[] = 'Names are required';
} else {
    $data[':firstname'] = $receiving_data->name;
    $data[':username'] = $receiving_data->username;
}


if (empty($receiving_data->email)) {
    $error[] = 'Email is required';
} else {
    if (!filter_var($receiving_data->email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Email format is invalid';
    } else {
        $data[':email'] = $receiving_data->email;
    }
}

if (empty($receiving_data->password)) {
    $error[] = 'Password is required';
} else {
    $data[':password'] = password_hash($receiving_data->password, PASSWORD_DEFAULT);
}

if (empty($error)) {

//-------------------    SHOULD BE LARAVEL CODE FOR INSERT USER TO DATABASE

    $query =
        'INSERT INTO register(firstname, username,email,password) VALUES (:firstname,:username,:email,password)';
    $statement = $connect->prepare($query);
    if ($statement->execute($data)) {
//-------------------        AFTER COMPLETE INSERTED THIS LINE MUST WORK IN ORDER TO SEND DATA TO ANGULARJS
        $message = 'Successfully registered';
    }

//-------------------   END OF INSERTING

} else {
    $not_valid = implode(", ", $error);
}

$for_angularjs = array(
    'error' => $not_valid,
    'message' => $message
);

echo json_encode($for_angularjs);

?>

