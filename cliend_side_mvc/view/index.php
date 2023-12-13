<?php
$conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());
  session_start();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-[#FEB600] p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-bold text-lg">Wlcome to Diet & Fitness</a>
            <ul class="flex space-x-4">  
                <li><a href="index.php" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">About</a></li>
                <li><a href="#" class="text-white">Contact</a></li>
                <li><a href="login.php" class="text-white">Log In</a></li>

            </ul>
        </div>
    </nav>

    <!--  Section -->
    <div class="bg-cover bg-center h-screen flex items-center" style="background-image: url('index.jpg');">
        <div class="container mx-auto text-center text-white">
            <h1 class="text-5xl text-yellow-500 font-bold  mb-4">Welcome to Your App</h1>
            <p class="text-lg  text-yellow-500">Start your healthy journey wiith us!</p>
            <a href="register.php"><button class="bg-[#FEB600] text-white px-6 py-2 mt-4 rounded-full hover:bg-[#FEB600]"> Get Started </button></a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Wlcome to Diet & Fitness. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
