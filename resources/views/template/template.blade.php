<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Event in Surabaya</title>
</head>

<body class="bg-gray-200">
    <nav class="p-4" style="background-color: #18155e;">
        <div class="container flex justify-center items-center">
            <div class="relative me-10">
                <button id="masterDataButton" class="text-white text-lg font-bold hover:text-gray-300">
                    Master Data
                </button>
                <div id="dropdownMenu" class="absolute hidden bg-white shadow-lg mt-2 py-2 w-48 right-0 rounded-lg">
                    <a href="/eventCategoryList" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Master Event Category</a>
                    <a href="/organizerList" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Master Organizer</a>
                    <a href="/eventList" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Master Event</a>
                </div>
            </div>

            <div class="relative ms-10">
                <a href="/event" class="text-white text-lg font-bold hover:text-gray-300">Events</a>
            </div>
        </div>
    </nav>

    <hr>
        @yield('layout_content')
    </hr>

    <script>
        const masterDataButton = document.getElementById('masterDataButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        masterDataButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', function(e) {
            if (!masterDataButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>

