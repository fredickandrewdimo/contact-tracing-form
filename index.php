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
    <link href="style.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contact Tracing Form</title>
</head>

<body class="font-sans bg-lightGray">
    <!-- main container -->
    <div class="container w-11/12 lg:w-9/12 mx-auto">

        <!-- navigation bar -->
        <?php include('templates/header.php') ?>

        <!-- form -->
        <form action="" method="" class="p-10 bg-white rounded">
            <h1 class="text-center font-bold text-2xl text-darkGray">CONTACT TRACING FORM</h1>

            <hr class="my-5 text-lightGray bg-lightGray">

            <div class="w-full my-4">
                <label for="" class="my-4">FULLNAME
                    <span>(ex. Juan Dela Cruz)</span>
                </label><br />
                <input type="text" class="border w-full">
            </div>

            <div class="w-full my-4">
                <label for="">PHONE NUMBER
                    <span>(ex. 09123456789)</span>
                </label><br />
                <input type="text" class="border border-gray w-full">
            </div>

            <div class="w-full my-4">
                <label for="">ADDRESS
                    <span>(brgy/city/province/country)</span>
                </label><br />
                <input type="text" class="border border-gray w-full">
            </div>

            <div class="w-full my-4">
                <p>Please select an option that applies to your situation</p>
                <div class="">
                    <input type="radio" name="diagnose">
                    <p>Diagnose with corona virus</p>
                </div>
                <div class="">
                    <input type="radio" name="">
                    <p>Show corona virus symphtoms</p>
                </div>
            </div>

            <hr class="my-5">

            <p>We won't share your personal info with anyone without your permission, except when required by law.</p>

            <button type="submit" name="submit" class="">Submit</button>

        </form>

        <!-- footer -->
        <?php include('templates/footer.php') ?>
    </div>

</body>

</html>