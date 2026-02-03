<x-layout>
    <div>
        <x-head>
            Idea there
        </x-head>
        <p class="text-violet-400">
            {{ $idea->description }}
        </p>
    </div>
    <form action="/ideas/{{$idea->id}}/edit" method="GET">
        @csrf
        <div class="mt-6 flex items-center  gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Edit
            </button>
        </div>
        <div class="mt-6 flex items-center  gap-x-6">
            <button form="delete-idea-form" type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Delete
            </button>
        </div>
    </form>
    <div class="mt-6 flex items-center  gap-x-6">
        <a href="/ideas" class="rounded-md bg-indigo-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Home
        </a>
    </div>
    <form id="delete-idea-form" action="/ideas/{{$idea->id}}" method="POST">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
