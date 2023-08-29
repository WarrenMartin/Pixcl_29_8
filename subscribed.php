<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    $csvData = "$email\n";

    $csvFilePath = "subscribed.csv";
    file_put_contents($csvFilePath, $csvData, FILE_APPEND);

    http_response_code(200); // OK status code
} else {
    http_response_code(400); // Bad Request status code
}
?>