<!-- Database Connection -->

<?php

$servername = 'localhost';
$username = 'shaun';
$password = 'test1234';
$dbname = 'contact_tracing_form';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection error: " . mysqli_connect_error();
} else {

    // Data Test
    // $sql = "SELECT * FROM users";
    // $result = mysqli_query($conn, $sql);

    // if ($result) {
    //     // fetch the data and print it
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         print_r($row);
    //     }
    // } else {
    //     // handle the error
    //     echo "Error executing query: " . mysqli_error($conn);
    // }

    // mysqli_free_result($result);
}

?>