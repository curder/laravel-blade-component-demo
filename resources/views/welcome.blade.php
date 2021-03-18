<x-layout>

    <x-section>
        <x-dropdown alignment="left">
            <x-slot name="trigger">
                <button>Click Me</button>
            </x-slot>

            <x-dropdown-link href="/">One</x-dropdown-link>
            <x-dropdown-link href="/">Two</x-dropdown-link>
            <x-dropdown-link href="/">Three</x-dropdown-link>
        </x-dropdown>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi aperiam culpa delectus dolor dolore incidunt ipsam laudantium modi nam neque numquam odio possimus repellendus sapiente sequi, soluta suscipit temporibus.
        </p>
    </x-section>

    <x-flash type="warning">
        You are logged now!
    </x-flash>

    <x-flash type="error" class="mt-10">
        Whops, Sorry about that!
    </x-flash>

    <x-modal title="Deactivate Account?" submit-label="Delete">
        <x-slot name="trigger">
            <x-section>
                <button x-on:click="on = true">Show Modal</button>
            </x-section>
        </x-slot>
        Are you sure deactivate your account? all of your data will be permanently removed. This action cannot be
        undone.
    </x-modal>
</x-layout>
