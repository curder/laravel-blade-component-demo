<header class="bg-gray-700 text-white px-6 py-4" x-data="{open: false}">
    <div class="flex justify-between items-center">
        <h1 class="font-bold tracking-widest uppercase">Laravel</h1>
        <nav class="hidden md:flex">
            <x-nav-link route="home">Home</x-nav-link>
            <x-nav-link route="about" title="About Page">About</x-nav-link>
            <x-nav-link route="testimonials">Testimonials</x-nav-link>
            <x-nav-link route="contact">Contact</x-nav-link>
        </nav>
        <div class="hidden md:block">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <img src="https://www.placecage.com/30/30" class="rounded-full border border-white" alt="">
                </x-slot>

                <x-dropdown-link href="/">Home</x-dropdown-link>
                <x-dropdown-link href="/about">About</x-dropdown-link>
                <x-dropdown-link href="/testimonials">Testimonials</x-dropdown-link>
                <x-dropdown-link href="/contact">Contact</x-dropdown-link>
            </x-dropdown>
        </div>
        <div class="md:hidden">
            <button @click="open = !open">
                <svg viewBox="0 0 20 20" width="20">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="white">
                            <path x-show="!open"
                                  d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"></path>
                            <polygon x-show="open"
                                     points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>

    {{--    mobile menu--}}
    <nav class="mt-3 block md:hidden" x-show="open">
        <x-mobile-nav-link route="home">Home</x-mobile-nav-link>
        <x-mobile-nav-link route="about" title="About Page">About</x-mobile-nav-link>
        <x-mobile-nav-link route="testimonials">Testimonials</x-mobile-nav-link>
        <x-mobile-nav-link route="contact">Contact</x-mobile-nav-link>
    </nav>

</header>
