<x-layout>
    <form action="/register" method="POST" class="mx-auto">
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 ">
            @csrf
            <legend class="fieldset-legend ">Register</legend>

            <label class="label">Name</label>
            <input name="name" class="input" placeholder="You`re name" required/>

            <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required/>

            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required/>

            <button type="submit" class="btn btn-neutral mt-4 bg-violet-800">Create account</button>
        </fieldset>
    </form>
</x-layout>
