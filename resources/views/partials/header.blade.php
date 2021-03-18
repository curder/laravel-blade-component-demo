<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="font-bold tracking-widest uppercase">Laravel</h1>

    <nav>
        <x-nav-link route="home">Home</x-nav-link>
        <x-nav-link route="about" title="About Page">About</x-nav-link>
        <x-nav-link route="testimonials">Testimonials</x-nav-link>
        <x-nav-link route="contact">Contact</x-nav-link>
    </nav>

    <x-dropdown alignment="right">
        <x-slot name="trigger">
            <img src="https://www.placecage.com/30/30" class="rounded-full border border-white" alt="">
        </x-slot>

        <x-dropdown-link href="/">Home</x-dropdown-link>
        <x-dropdown-link href="/about">About</x-dropdown-link>
        <x-dropdown-link href="/testimonials">Testimonials</x-dropdown-link>
        <x-dropdown-link href="/contact">Contact</x-dropdown-link>
    </x-dropdown>

</header>
