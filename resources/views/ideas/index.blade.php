<x-layout>
    <div>
        <x-head class="font-extrabold ">
            Hello there!
        </x-head>
    </div>
    <div>
        <form action="/ideas" method="POST" class="form">
            @csrf
            <label for="description">Youre idea</label>
            <textarea name="description" id="description" cols="40" rows="10" class="textarea"></textarea>
            <div class="mt-6 flex items-center  gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Launch
                </button>
            </div>
        </form>
    </div>
    <div class="flex flex-col ">
        <x-head>
            Youre ideas
        </x-head>
        @if($ideas->count())
            <div class="flex flex-col">
                @foreach($ideas as $idea)
                    <li>
                        <a href="/ideas/{{ $idea->id }}" class="text-violet-400"> {{ $idea->description }}</a>
                    </li>
                @endforeach
            </div>
        @endif
    </div>

</x-layout>
