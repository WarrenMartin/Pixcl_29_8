<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $description = $_POST["description"];


    $csvData = "$name,$email,$age,$phone,$description\n";

    $csvFilePath = "form_data.csv";
    file_put_contents($csvFilePath, $csvData, FILE_APPEND);

    http_response_code(200); // OK status code
} else {
    http_response_code(400); // Bad Request status code
}
?>