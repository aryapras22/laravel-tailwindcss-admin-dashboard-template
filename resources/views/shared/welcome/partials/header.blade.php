<header class="fixed w-full z-30 md:bg-opacity-90 transition duration-300 ease-in-out">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">
        <div class="flex items-center justify-between h-16 md:h-20">
            {{-- Site branding --}}
            <div class="flex-shrink-0 mr-4 flex items-center p-3">
                <i class="fa fa-eye" style="font-size: 30px;"></i>
                <div>
                    <h1 class="ml-3 font-bold">Open Regulation</h1>
                </div>
            </div>

            {{-- Site navigation --}}
            <nav class="flex flex-grow">
                <div class="flex flex-grow justify-end flex-wrap items-center">
                    @if(auth()->user())
                        <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            {{ auth()->user()->name }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-sm text-gray-200 bg-gray-900 hover:bg-gray-800 ml-3 p-3 rounded-xl">
                            Log in
                        </a>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</header>
