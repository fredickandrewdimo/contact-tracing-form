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
        <form action="" method="" class="p-10 bg-white rounded lg:w-6/12 mx-auto">
            <h1 class="text-center font-bold text-2xl text-gray-700">CONTACT TRACING FORM</h1>

            <hr class="my-5">

            <div class="w-full my-5">
                <label for="" class="text-gray-600">FULLNAME
                    <span class="text-gray-500">(ex. Juan Dela Cruz)</span>
                </label><br />
                <input type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
            </div>

            <div class="w-full my-5">
                <label for="" class="text-gray-600">PHONE NUMBER
                    <span class="text-gray-500">(ex. 09123456789)</span>
                </label><br />
                <input type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
            </div>

            <div class="w-full my-5">
                <label for="" class="text-gray-600">ADDRESS
                    <span class="text-gray-500">(brgy/city/province/country)</span>
                </label><br />
                <input type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
            </div>

            <div class="w-full my-4">
                <p class="mb-3 text-gray-700">Please select an option that applies to your situation</p>
                <div class="">
                    <div class="flex mr-4 text-gray-500 mb-2">
                        <input type="checkbox" name="diagnose" class="mr-2">
                        <p>Diagnose with corona virus</p>
                    </div>
                    <div class="flex text-gray-500">
                        <input type="checkbox" name="show" class="mr-2">
                        <p>Show corona virus symphtoms</p>
                    </div>
                </div>

            </div>

            <hr class="my-5">

            <p class="text-gray-600 mb-6 text-sm text-center">We won't share your personal info with anyone without your permission, except when required by law.</p>

            <button type="submit" name="submit" class="w-full bg-blue-500 py-3 text-white rounded">Submit</button>

        </form>

    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>