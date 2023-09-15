<?php
$conn = mysqli_connect("localhost", "root", "", "verscon");

function proses_reg($data){
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $konfirmpass = htmlspecialchars($data["konfirmpass"]);

    $query = "INSERT INTO registrasi VALUES('$username', '$email', '$password', '$konfirmpass')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
