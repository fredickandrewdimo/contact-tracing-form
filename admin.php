<?php

// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {

    // User is not logged in, redirect to login form
    header('Location: login.php');
    exit;
}

// Database Connection
include('config/db_connect.php');

// Make SQL query
$query = 'SELECT user_id, fullname, complete_address, phone_number, diagnose, show_symphtoms, created_at FROM tracing_records ORDER BY created_at';

// store results
$result = mysqli_query($conn, $query);

// fetch the resulting
$records = mysqli_fetch_all($result, MYSQLI_ASSOC);

// sanitize results
mysqli_free_result($result);

// close connection
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- styles -->
    <link href="styles/output.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contact Tracing Form</title>
</head>

<body class="font-sans bg-gray-100">

    <!-- navigation bar -->
    <?php include('templates/header_admin.php') ?>

    <!-- main container -->
    <div class="container w-11/12 lg:w-9/12 mx-auto min-h-screen">

        <div class="p-8 bg-white my-10 rounded">
            <table class="table-auto w-full text-center border rounded">
                <thead>
                    <tr class="border text-white bg-blue-500">
                        <th class="border">ID</th>
                        <th class="border py-2">FULLNAME</th>
                        <th class="border py-2">ADDRESS</th>
                        <th class="border py-2">PHONE NUMBER</th>
                        <th class="border py-2">DIAGNOSE...</th>
                        <th class="border py-2">SHOW...</th>
                        <th class="border py-2">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- loop through each record -->
                    <?php foreach ($records as $record) : ?>
                        <tr class="text-gray-500 text-sm">
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['user_id']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['fullname']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['complete_address']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['phone_number']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['diagnose']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['show_symphtoms']); ?>
                            </td>
                            <td class="py-2 border">
                                <?php echo htmlspecialchars($record['created_at']); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>



    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>