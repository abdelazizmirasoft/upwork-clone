<header class="flex justify-between item-center py-6">
    <div>Upwork Clone</div>
    <livewire:search />
    <nav>
        <a href="{{ route('jobs') }}" class="mr-5 hover:text-green-500">Our Jobs</a>
        @guest
            <a href="{{ route('login') }}" class="mr-5 hover:text-green-500">Login</a>
            <a href="{{ route('register') }}" class="mr-5 hover:text-green-500">Register</a>
        @else
            <a href="{{ route('home') }}" class="mr-5 hover:text-green-500">Dashboard</a>
            <a href="{{ route('logout') }}" class="mr-5 hover:text-green-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>
</header>