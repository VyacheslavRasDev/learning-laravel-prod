<x-layout>
    <form action="/ideas" method="POST" class="mx-auto">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 ">
            <legend class="fieldset-legend ">New idea</legend>

            <textarea id="description" name="description" rows="5" class="block w-full   rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            <x-forms.error name="description"/>

            <button type="submit" class="btn btn-neutral mt-4 bg-violet-800">Create</button>
        </fieldset>
    </form>
</x-layout>
