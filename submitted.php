<!-- PHP CODE -->

<?php



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

    <!-- Title -->
    <title>Login Page</title>

</head>

<body class="font-sans bg-gray-100">

    <!-- navigation bar -->
    <?php include('templates/header_login.php'); ?>

    <!-- main container -->
    <div class="container w-11/12 lg:w-4/12 mx-auto min-h-full flex items-center justify-center">


        <!-- form -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="p-10 bg-white rounded mx-auto mt-20 mb-8">
            <h1 class="text-center font-bold text-2xl text-gray-700">CONTACT TRACING FORM</h1>
            <hr class="my-5">

            <div class="my-10 px-3">
                <h1 class="text-center font-bold text-3xl text-gray-700 mb-4">Thank you!</h1>
                <p class="text-gray-600 mb-4 text-center text-sm ">
                    Thank you for submitting the form. Your information has been successfully received. We appreciate your time and will get back to you as soon as possible. You may now close this page.
                </p>
                <button type="submit" name="submit" class="w-full bg-blue-500 py-3 text-white rounded font-bold mt-4 hover:bg-blue-700" onclick="window.close()">Close</button>
            </div>

        </form>

    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>