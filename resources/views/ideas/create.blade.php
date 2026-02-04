<x-layout>
    <form action="/ideas" method="POST" class="mx-auto">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-16">
                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-white">Youre idea</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="5" class="block w-full   rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                            <x-forms.error name="description"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="rounded-md bg-violet-800 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                Create
            </button>
        </div>
    </form>
</x-layout>
