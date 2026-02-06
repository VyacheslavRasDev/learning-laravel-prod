<x-layout>
    <div class="flex flex-col justify-center items-center justify-items-center my-4 mx-auto">
        @if($ideas->count())
            <x-head>
                Youre ideas
            </x-head>
            <div class="flex flex-wrap gap-6 max-w-[1000px] items-center justify-between px-24">
                @foreach($ideas as $idea)
                    <x-items.card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-items.card>
                @endforeach
            </div>
            <div class=" flex flex-col  my-5">
                <a href="/ideas/create" class="rounded-md bg-violet-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Create
                </a>
            </div>
        @else
            <x-head>We need you`re ideas! Create something awesome</x-head>
            <div class="flex flex-col ">
                <a href="/ideas/create" class="rounded-md text-center bg-violet-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Create
                </a>
            </div>
        @endif
    </div>
</x-layout>
