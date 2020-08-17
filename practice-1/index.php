<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="assets/css/main.css" rel="stylesheet">

        <title>PHP7 - Book</title>
    </head>
    <body>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6 mb-20">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">PHP7 From Scratch</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <!-- More Links if Needed -->
                </div>
                <div>
                    <a href="index.php?page=home" class="inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Home</a>
                    <a href="index.php?page=about" class="inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">About</a>
                    <a href="index.php?page=contact" class="inline-block text-sm px-4 py-2 leading-none text-white hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Contact</a>
                </div>
            </div>
        </nav>
        <div class="flex align-center justify-center flex-wrap">
            <?php var_dump($_GET) ?>
        </div>
    </body>
</html>
