<?php
require_once "../vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $validator = new GUMP();

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $_POST = array(
        'username' => $user_name,
        'password' => $user_password);

    $_POST = $validator->sanitize($_POST); // You don't have to sanitize, but it safest to do so.

// Let define the rules and filters
    $rules = array(
        'username' => 'required|alpha_numeric|max_len,100|min_len,6',
        'password' => 'required|max_len,100|min_len,6');

    $filters = array(
        'username'    => 'trim|sanitize_string',
        'password'    => 'trim|base64_encode');

    $_POST = $validator->filter($_POST, $filters);

// You can run filter() or validate() first
    $validated = $validator->validate($_POST, $rules);

// Check if validation was successful
}
    if($validated === TRUE)
    {
        echo $user_name;
        echo $user_password;

        exit;
    }else{
        // You should know what form fields to expect, so you can reference them here for custom messages
        echo "There were errors with the data you provided:\n";
        // Or you can simply use the built in helper to generate the error messages for you
        // Passing a boolean true to is returns the errors as html, otherwise it returns an array
        echo $validator->get_readable_errors(true);
    }
    ?>