<x-layout>
        <form action="/ideas/{{$idea->id}}" method="POST" class="mx-auto">
            <x-head class="font-extrabold ">
                Change idea
            </x-head>
            @csrf
            @method('PATCH')
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 ">
                <legend class="fieldset-legend ">You`re idea</legend>

                <textarea id="description" name="description" rows="5" class="block w-full   rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{$idea->description}}</textarea>
                <x-forms.error name="description"/>

                <button type="submit" class="btn btn-neutral mt-4 bg-violet-800">Update</button>
            </fieldset>
        </form>
</x-layout>
