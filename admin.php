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
    <nav class="flex items-center justify-between py-4 mb-2 bg-white px-44">
        <div class="">
            <a class="font-bold text-xl text-gray-700" href="">TraceKeeper</a>
        </div>
        <div class="">
            <h1 class="font-bold text-xl text-gray-700">CONTACT TRACING DATABASE</h1>
        </div>
        <div class="">
            <a class="text-base text-gray-500" href="login.php">LOGOUT</a>
        </div>
    </nav>

    <!-- main container -->
    <div class="container w-11/12 lg:w-9/12 mx-auto min-h-screen">

        <div class="p-8 bg-white my-10">
            <table class="table-auto w-full text-center border">
                <thead>
                    <tr class="border text-gray-600">
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
                    <tr class="text-gray-500">
                        <td class="py-2 border">1</td>
                        <td class="py-2 border">Juan Dela Cruz</td>
                        <td class="py-2 border">New York City</td>
                        <td class="py-2 border">09123456789</td>
                        <td class="py-2 border">No</td>
                        <td class="py-2 border">No</td>
                        <td class="py-2 border">01/01/2022</td>
                    </tr>

                    <tr class="text-gray-600 bg-gray-100">
                        <td class="py-2 border">2</td>
                        <td class="py-2 border">Juan Dela Cruz</td>
                        <td class="py-2 border">New York City</td>
                        <td class="py-2 border">09123456789</td>
                        <td class="py-2 border">No</td>
                        <td class="py-2 border">No</td>
                        <td class="py-2 border">01/01/2022</td>
                    </tr>

                </tbody>
            </table>

        </div>



    </div>

    <!-- footer -->
    <?php include('templates/footer.php') ?>

</body>

</html>