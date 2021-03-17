<x-layout>
    <x-flash type="warning">
        You are logged now!
    </x-flash>

    <x-flash type="error" class="mt-10">
        Whops, Sorry about that!
    </x-flash>

    <x-modal title="Deactivate Account?" submit-label="Delete">
        <x-slot name="trigger"><button x-on:click="on = true">Show Modal</button></x-slot>
        Are you sure deactivate your account? all of your data will be permanently removed. This action cannot be undone.
    </x-modal>
</x-layout>
