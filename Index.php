<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];

    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name\nMessage: $message\n\n");
    fclose($file);
}
?>
