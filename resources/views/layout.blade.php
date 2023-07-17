<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ['Roboto', 'sans-serif']
                    },
                    minHeight: {
                        'screen-half': '50vh',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-white min-w-full min-h-full font-roboto">
<div class="min-h-screen">
    <header class="bg-blue-300 py-6 px-6 border-b-2 border-blue-400">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold text-shadow">Monthly Planner</h1>
                <div>
                    <a class="px-3 font-bold" href="{{ route('monthly.plans.index') }}">Plans</a>
                    <a class="px-3 font-bold" href="{{ route('expenses.index') }}">Expenses</a>
                </div>
            </div>
        </div>
    </header>
    <main class="container border-x py-6 mx-auto min-h-screen-half">
        @yield('content')
    </main>
    <footer class="border-t py-6 px-6 text-center">
        <p>All right reserved by  &copy; Azim</p>
    </footer>
</div>
</body>
</html>
