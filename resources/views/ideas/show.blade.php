<x-layout>
    <div class="flex flex-col justify-center items-center justify-items-center my-4 mx-auto">
        <div>
            <x-head>
                Idea
            </x-head>
            <p class="text-violet-400">
                {{ $idea->description }}
            </p>
        </div>
        <form action="/ideas/{{$idea->id}}/edit" method="GET" class="flex gap-5">
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
        <form id="delete-idea-form" action="/ideas/{{$idea->id}}" method="POST">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
