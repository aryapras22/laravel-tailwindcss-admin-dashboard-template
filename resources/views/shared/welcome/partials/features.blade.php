
<section class="relative">
    <!-- Section background (needs .relative class on parent and next sibling elements) -->
    <div class="absolute inset-0 bg-gray-100 pointer-events-none mb-16" aria-hidden="true"></div>
    <div class="absolute left-0 right-0 m-auto w-px p-px h-20 bg-gray-200 transform -translate-y-1/2"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-12 md:pt-20">
            <!-- Section header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                <h1 class="h2 mb-4">Explore the solutions</h1>
                <p class="text-xl text-gray-600">
                    "Doublethink means the power of holding two contradictory beliefs in one's mind simultaneously, and accepting both of them."
                </p>
            </div>

            <!-- Section content -->
            <div class="md:grid md:grid-cols-12 md:gap-6">
                <!-- Content -->
                <div class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-7 lg:col-span-6 md:mt-6" data-aos="fade-right">
                    <div class="md:pr-4 lg:pr-12 xl:pr-16 mb-8">
                        <h3 class="h3 mb-3">Contributing To The Society</h3>
                        <p class="text-xl text-gray-600">
                            "Democracy... allows men to rule who are comparatively ignorant of political matters, because they are ‘the many.’"
                        </p>
                    </div>
                    <!-- Tabs buttons -->
                    <div class="mb-8 md:mb-0">
                        <a class="tab-button flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3" href="#0" data-tab="1">
                            <div>
                                <div class="font-bold leading-snug tracking-tight mb-1">Vote for Which Matters!</div>
                                <div class="text-gray-600">Take democracy to next level by promoting transparency and political education</div>
                            </div>
                            <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                            </div>
                        </a>
                        <a class="tab-button flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3" href="#0" data-tab="2">
                            <div>
                                <div class="font-bold leading-snug tracking-tight mb-1">Find What Affecting You!</div>
                                <div class="text-gray-600">The fall of states is due to those causes which destroy democracies and aristocracies.</div>
                            </div>
                            <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                <i class="fa fa-people-arrows"></i>
                            </div>
                        </a>
                        <a class="tab-button flex items-center text-lg p-5 rounded border transition duration-300 ease-in-out mb-3" href="#0" data-tab="3">
                            <div>
                                <div class="font-bold leading-snug tracking-tight mb-1">Resist with People with Power!</div>
                                <div class="text-gray-600">"The heaviest penalty for declining to rule is to be ruled by someone inferior to yourself."</div>
                            </div>
                            <div class="flex justify-center items-center w-8 h-8 bg-white rounded-full shadow flex-shrink-0 ml-3">
                                <i class="go go-law"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Tabs items -->
                <div class="max-w-xl md:max-w-none md:w-full mx-auto md:col-span-5 lg:col-span-6 mb-8 md:mb-0 md:order-1" data-aos="zoom-y-out" id="tabs">
                    <div class="relative flex flex-col text-center lg:text-right">
                        <!-- Item 1 -->
                        <div class="tab-content" id="tab-1">
                            <div class="relative inline-flex flex-col">
                                <img class="md:max-w-none mx-auto rounded" src="{{ asset('images/features-bg.png') }}" width="500" height="462" alt="Features bg" />
                                <img class="md:max-w-none absolute w-full left-0 transform animate-float" src="{{ asset('images/features-element.png') }}" width="500" height="44" alt="Element" style="top: 30%;" />
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="tab-content hidden" id="tab-2">
                            <div class="relative inline-flex flex-col">
                                <img class="md:max-w-none mx-auto rounded" src="{{ asset('images/features-bg.png') }}" width="500" height="462" alt="Features bg" />
                                <img class="md:max-w-none absolute w-full left-0 transform animate-float" src="{{ asset('images/features-element.png') }}" width="500" height="44" alt="Element" style="top: 30%;" />
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="tab-content hidden" id="tab-3">
                            <div class="relative inline-flex flex-col">
                                <img class="md:max-w-none mx-auto rounded" src="{{ asset('images/features-bg.png') }}" width="500" height="462" alt="Features bg" />
                                <img class="md:max-w-none absolute w-full left-0 transform animate-float" src="{{ asset('images/features-element.png') }}" width="500" height="44" alt="Element" style="top: 30%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                const targetTab = this.getAttribute('data-tab');

                tabs.forEach(t => t.classList.remove('bg-gray-200', 'border-transparent', 'shadow-lg'));
                this.classList.add('bg-gray-200', 'border-transparent');

                contents.forEach(content => content.class
                .add('hidden'));
                document.getElementById('tab-' + targetTab).classList.remove('hidden');
            });
        });

        // Trigger height adjustment on tab switch (optional, if needed)
        const adjustHeight = () => {
            const activeTab = document.querySelector('.tab-content:not(.hidden)');
            const tabsContainer = document.getElementById('tabs');
            if (activeTab) {
                tabsContainer.style.height = activeTab.offsetHeight + 'px';
            }
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', adjustHeight);
        });

        // Adjust height on initial load
        adjustHeight();
    });
</script>
