<section class="relative">
    <!-- Illustration behind hero content -->
    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-0 pointer-events-none" aria-hidden="true">
        <svg width="1360" height="578" viewBox="0 0 1360 578" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="illustration-01">
                    <stop stop-color="#FFF" offset="0%" />
                    <stop stop-color="#EAEAEA" offset="77.402%" />
                    <stop stop-color="#DFDFDF" offset="100%" />
                </linearGradient>
            </defs>
            <g fill="url(#illustration-01)" fill-rule="evenodd">
                <circle cx="1232" cy="128" r="128" />
                <circle cx="155" cy="443" r="64" />
            </g>
        </svg>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <!-- Hero content -->
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
            <!-- Section header -->
            <div class="text-center pb-12 md:pb-16">
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tighter tracking-tighter mb-4">
                    Watch The Goverment <br />
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-black">
                        Or The Government Watching You
                    </span>
                </h1>
                <div class="max-w-3xl mx-auto">
                    <p class="text-xl text-gray-600 mb-8">
                        Be cautious. Our surveillance-resistant landing
                        page template adapts seamlessly to all devices,
                        ensuring your security is paramount at all
                        times.
                    </p>
                    <div class="max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center">
                        <div>
                            <a href="{{ route('register') }}" class="btn text-white bg-red-800 hover:bg-red-900 border border-red-900 px-4 py-2 rounded-full w-full mb-4 sm:w-auto sm:mb-0">Register</a>
                        </div>
                        <div>
                            <a href="#0" class="btn text-white bg-black hover:bg-gray-900 border border-gray-900 px-4 py-2 rounded-full w-full sm:w-auto sm:ml-4">Learn more!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero image -->
            <div>
                <div class="relative flex justify-center mb-8">
                    <div class="flex flex-col justify-center">
                        <img class="mx-auto" src="{{ asset('images/hero-image.png') }}" width="768" height="432" alt="Hero" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
