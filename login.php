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

    <title>Login Page</title>
</head>

<body class="font-sans bg-gray-100">

    <!-- navigation bar -->
    <nav class="w-11/12 lg:w-4/12 mx-auto flex items-center justify-between py-4 mb-2">
        <div class="">
            <a class="font-bold text-xl text-gray-700" href="">TraceKeeper</a>
        </div>
        <div class="">
            <a class="text-lg text-gray-600" href="">Back</a>
        </div>
    </nav>

    <!-- main container -->
    <div class="container w-11/12 lg:w-4/12 mx-auto min-h-full flex items-center justify-center">

        <!-- form -->
        <form action="" method="" class="p-10 bg-white rounded mx-auto mt-20 mb-8">
            <h1 class="text-center font-bold text-2xl text-gray-700 mb-4">Welcome back, Admin!</h1>
            <p class="text-gray-600 mb-4 text-center text-sm ">We recommend checking ad managing your database frequently to ensure the best performance for your site.</p>

            <hr class="my-5">

            <div class="w-full mb-2">
                <label for="" class="text-gray-600">EMAIL
                    <span class="text-gray-500 text-sm">(ex. you@gmail.com)</span>
                </label><br />
                <input type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
                <!-- error message -->
                <!-- <span class="text-sm text-red-500">Email is required</span> -->
            </div>

            <div class="w-full mb-2">
                <label for="" class="text-gray-600">PASSWORD
                    <span class="text-gray-500 text-sm">(At least 8 characters)</span>
                </label><br />
                <input type="text" class="border-2 w-full mt-2 rounded py-2 px-2 border-gray-200">
                <!-- error message -->
                <!-- <span class="text-sm text-red-500">Email is required</span> -->
            </div>

            <!-- error message -->
            <!-- <p class="text-sm text-center text-red-500">Invalid email and password. Please try Again</p> -->

            <button type="submit" name="submit" class="w-full bg-blue-500 py-3 text-white rounded font-bold mt-4">LOGIN</button>

        </form>

    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>