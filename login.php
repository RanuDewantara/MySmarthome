<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Smarthome</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="SMKN3Smarthome.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
</head>
<body class="bg-contentcolour" style="font-family: 'Philosopher', sans-serif;">
    <div class="p-6 sm:p-8">
        <h1 class="text-xl mt-16 mb-5 font-bold leading-tight text-center tracking-tight md:text-3xl text-white">
            Login to Smarthome
        </h1>
        <form class="mx-auto max-w-lg md:px-24" action="verlog.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-md font-medium text-white">Username</label>
                <div class="flex">
                    <img src="SVG/person.svg" alt="" class="mx-auto h-10 w-10 bg-gray-400 rounded-l-lg px-2">
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 h-10  sm:text-sm rounded-r-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="user4309">
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-md font-medium text-white">Password</label>
                <div class="flex">
                    <img src="SVG/key.svg" alt="" class="mx-auto h-10 w-10 bg-gray-400 rounded-l-lg p-2">
                    <input type="password" name="password" id="password" placeholder="Input Password" class="bg-gray-50 border border-gray-300 h-10 sm:text-sm rounded-r-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                </div>
            </div>
            <div class="h-35"></div>
            <div class="mx-auto w-fit my-5">
                <button type="submit" class="p-[10px] px-8 text-white bg-blue-700 hover:bg-blue-800 active:bg-blue-900 focus:ring-4 font-medium rounded-lg text-sm text-center">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
