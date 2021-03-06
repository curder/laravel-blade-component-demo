<x-layout>
    <x-section>
        <x-form method="PATCH" action="/comments/{{ $comment->id }}" class="bg-red-500">

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>

                <textarea name="body" id="body" required class="border border-gray-400 p-2 w-full">{{ $comment->body }}</textarea>

                @error('body')
                <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
            </div>
        </x-form>
        <x-form-button
                method="DELETE"
                action="/comments/{{ $comment->id }}"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        >Delete</x-form-button>
    </x-section>
</x-layout>
