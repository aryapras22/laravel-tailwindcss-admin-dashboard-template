<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body class="font-sans antialiased">
    <header class="fixed w-full z-30 bg-white bg-opacity-90 transition duration-300 ease-in-out">
        <div class="max-w-6xl mx-auto px-5 sm:px-6">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Site branding -->
                <div class="flex-shrink-0 mr-4 flex items-center p-3">
                    <i class="text-xl text-gray-900 fas fa-eye"></i>
                    <div>
                        <h1 class="ml-3 font-bold text-gray-900">
                            Open Regulation
                        </h1>
                    </div>
                </div>

                <!-- Site navigation -->
                <nav class="flex flex-grow">
                    <div class="flex flex-grow justify-end flex-wrap items-center">
                        @auth
                            <a href="{{ route('dashboard') }}" class="font-semibold text-white rounded-xl border px-3 py-2 bg-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-white rounded-xl border px-3 py-2 bg-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Log in
                            </a>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="flex-grow">
        <!-- Page sections -->
        @include('shared.welcome.partials.herohome')
        @include('shared.welcome.partials.features')
        @include('shared.welcome.partials.features-blocks')
        @include('shared.welcome.partials.testimonials')
        @include('shared.welcome.partials.newsletter')
    </main>

    <!-- Site footer -->
    @include('shared.welcome.partials.footer')
</body>
</html>
