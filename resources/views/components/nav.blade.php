<header class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <a href="/ideas" class="btn btn-ghost text-xl">Idea</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li>
                <a href="/ideas">Home</a>
            </li>
            <li>
                <a href="/ideas/create">New idea</a>
            </li>
            @can('view-admin')
                <li>
                    <a href="/admin">Admin</a>
                </li>
            @endcan
        </ul>
    </div>
    <div class="navbar-end gap-2">
        @auth
            <form action="/sessions" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn bg-violet-800">Log Out</button>
            </form>
        @else
            <a href="/register" class="btn bg-violet-800">Register</a>
            <a href="/sessions" class="btn bg-violet-800">Log In</a>
        @endauth
    </div>
</header>
