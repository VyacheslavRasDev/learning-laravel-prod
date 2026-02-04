<x-layout>
    <div class="flex flex-col justify-center items-center justify-items-center my-4 mx-auto">
        <x-head>
            Youre ideas
        </x-head>
        @if($ideas->count())
            <div class="flex flex-wrap justify-between px-24">
                @foreach($ideas as $idea)
                    <div class="card bg-neutral text-neutral-content w-96 mx-4 my-3">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">{{$idea->id}}</h2>
                            <a href="/ideas/{{ $idea->id }}" class="text-violet-400"> {{ $idea->description }}</a>
                            <div class="card-actions justify-end">
                                <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-primary">Edit</a>
                                <form id="delete-idea-form" action="/ideas/{{$idea->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-700 btn btn-ghost">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-5">
                <a href="/ideas/create" class="rounded-md bg-violet-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Create
                </a>
            </div>
        @else
            <div>
                <x-head>The is no ideas</x-head>
                <a href="/ideas/create" class="rounded-md bg-violet-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Create
                </a>
            </div>
        @endif
    </div>


</x-layout>
