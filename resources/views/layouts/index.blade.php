<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gigiku Dental Clinic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/js/tailwindConfig.js"></script>
    <script src="/js/corousel.js"></script>

</head>

<body class="font-sans">

    <!-- Navbar -->
    <header class="  bg-gradient-to-r from-soft to-accent p-6 rounded drop-shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2 text-4xl font-bold text-T2">
                <img src="poto/Screenshot_2025-07-21_215132-removebg-preview.png" alt=""> GIGIKU
            </div>
            <nav class="space-x-6 text-lg font-medium text-T1 ">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Treatment</a>
                <a href="#">Navigation</a>
            </nav>
            <div class="bg-white">
                <a href="#">login</a>
            </div>
        </div>
    </header>


    @yield('konten')

    <!-- Footer -->
    <footer class="bg-T1 text-white text-center py-4">
        <p>&copy; 2025 by <span class="font-bold"> Gigiku Dental Clinic </span></p>
    </footer>

</body>

</html>