<x-layout>
    <div>
        <x-head class="font-extrabold ">
            Hello there!
        </x-head>
    </div>
    <div>
        <form action="/ideas/{{$idea->id}}" method="POST" class="form">
            @csrf
            @method('PATCH')
            <label for="description">Youre idea</label>
            <textarea name="description" id="idea" cols="40" rows="10" class="textarea">{{ $idea->description }}</textarea>
            <div class="mt-6 flex items-center  gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-layout>
