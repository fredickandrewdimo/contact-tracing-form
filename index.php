<?php

// FORM VALIDATION
include('config/secure_input.php');

$errors = array('fullname' => '', 'phone_number' => '', 'address' => '', 'diagnose' => '', 'show_symphtoms' => '',);

$fullname = $phone_number = $address = "";
$diagnose = $show_symphtoms = 'No';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // check fullname
    if (empty($_POST["fullname"])) {
        $errors['fullname'] = 'Fullname is required';
    } else {
        $fullname = $_POST["fullname"];
        if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $errors['fullname'] = 'Title must be letters and spaces only';
        }
    }

    // check phone number
    if (empty($_POST["phone_number"])) {
        $errors['phone_number'] = 'Phone number is required';
    } else {
        $phone_number = $_POST["phone_number"];
        if (!preg_match('/^09\d{9}$/', $phone_number)) {
            $errors['phone_number'] = 'Must be 11 digits starting with 09 and contain only numbers.';
        }
    }

    // check address
    if (empty($_POST["address"])) {
        $errors['address'] = 'Address is required';
    } else {
        $address = $_POST["address"];
        if (!preg_match('/^[a-zA-Z\s]+$/', $address)) {
            $errors['address'] = 'Address must only have letters, commas, periods, and spaces.';
        }
    }

    // check diagnose
    if (isset($_POST['diagnose'])) {
        $diagnose = 'Yes';
    }

    // check show symptoms
    if (isset($_POST['show_symphtoms'])) {
        $show_symphtoms = 'Yes';
    }
}

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
    <?php include('templates/header.php') ?>
    <!-- main container -->
    <div class="container w-11/12 lg:w-9/12 mx-auto">


        <!-- form -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="p-10 bg-white rounded lg:w-6/12 mx-auto">
            <h1 class="text-center font-bold text-2xl text-gray-700">CONTACT TRACING FORM</h1>

            <hr class="my-5">

            <div class="w-full mt-4 mb-2">
                <label for="" class="text-gray-600">FULLNAME
                    <span class="text-gray-500">(ex. Juan Dela Cruz)</span>
                </label><br />
                <!-- fullname -->
                <input name="fullname" value="<?php echo $fullname; ?>" type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
                <!-- error message -->
                <span class="text-sm text-red-500"><?php echo $errors['fullname']; ?></span>
            </div>

            <div class="w-full mt-4 mb-2">
                <label for="" class="text-gray-600">PHONE NUMBER
                    <span class="text-gray-500">(ex. 09123456789)</span>
                </label><br />
                <!-- phone number -->
                <input value="<?php echo $phone_number; ?>" name="phone_number" type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
                <!-- error message -->
                <span class="text-sm text-red-500"><?php echo $errors['phone_number']; ?></span>
            </div>

            <div class="w-full mt-4 mb-2">
                <label for="" class="text-gray-600">ADDRESS
                    <span class="text-gray-500">(brgy/city/province/country)</span>
                </label><br />
                <!-- address -->
                <input value="<?php echo $address; ?>" name="address" type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
                <!-- error message -->
                <span class="text-sm text-red-500"><?php echo $errors['address']; ?></span>
            </div>

            <div class="w-full my-4">
                <p class="mb-3 text-gray-700">Please select an option that applies to your situation</p>
                <!-- selection -->
                <div class="">
                    <div class="flex mr-4 text-gray-500 mb-2">
                        <!-- diagnose -->
                        <input value="<?php echo $diagnose; ?>" type="checkbox" name="diagnose" class="mr-2">
                        <p>Diagnose with corona virus</p>
                    </div>
                    <div class="flex text-gray-500">
                        <!-- show -->
                        <input value="<?php echo $show_symphtoms; ?>" type="checkbox" name="show_symphtoms" class="mr-2">
                        <p>Show corona virus symphtoms</p>
                    </div>
                </div>

            </div>

            <hr class="my-5">

            <p class="text-gray-600 mb-6 text-sm text-center">We won't share your personal info with anyone without your permission, except when required by law.</p>

            <!-- submit -->
            <button type="submit" name="submit" class="w-full bg-blue-500 py-3 text-white rounded">Submit</button>

        </form>

    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>