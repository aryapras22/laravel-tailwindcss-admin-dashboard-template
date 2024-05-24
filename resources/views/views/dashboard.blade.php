<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    <div class="container py-4">
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/4">
                                @include('shared.left-sidebar')
                            </div>
                
                            <div class="w-full sm:w-1/2">
                                @include('shared.success-message')
                                @include('shared.submit-regulation')
                                <hr class="my-4">
                                <div class="mt-3">
                                    @foreach ($regulations as $regulation)
                                        @include('shared.regulation-card')
                                    @endforeach
                                    <div class="mt-2">
                                        {{-- {{$regulations->links()}} --}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w-full sm:w-1/4">
                                @include('shared.search-bar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
