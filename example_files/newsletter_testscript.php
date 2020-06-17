<?php
/**
 * This is just a simple script for demontsration of the pressmind IB3 newsletter handling
 * You can put this script on your server for testing the newsletter integration
 * DO NOT use in production in any case, there are a lot of security flaws in here
 */
$errors = [];

if (!file_put_contents(__DIR__ . '/newsletter_testscript_debug.txt', print_r($_POST, true))) {
    $errors[] = 'Failed to write file ' . __DIR__ . '/newsletter_testscript_debug.txt';
}

if ($_POST['api_key'] != 'my_api_key') {
    $errors[] = 'Wrong API Key';
    handleErrors();
} else {
    header('Content-Type: application/json');
    echo json_encode(
        [
            'success' => true,
            'message' => 'Testscript has successfully been called. POST data: ' . print_r($_POST, true)
        ]
    );

}

function handleErrors()
{
    global $errors;
    header('Content-Type: application/json');
    echo json_encode(
        [
            'success' => false,
            'message' => 'The following error occurred: ' . implode(', ', $errors)
        ]
    );
    die();
}
