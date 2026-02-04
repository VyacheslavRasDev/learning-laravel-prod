<x-layout>
    <form action="/sessions" method="POST" class="mx-auto">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 ">
            @csrf
            <legend class="fieldset-legend ">Login</legend>

            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required/>
            <x-forms.error name="email"/>

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required/>
            <x-forms.error name="password"/>

            <button type="submit" class="btn btn-neutral mt-4 bg-violet-800">Log In</button>
        </fieldset>
    </form>
</x-layout>
