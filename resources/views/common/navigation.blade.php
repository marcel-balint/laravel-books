<header>
    <nav>
        <nav>
            <a href="{{route('index')}}" class="{{ $current_page == 'home' ? 'active' : '' }}">Home</a>|
            <a href="{{route('about')}}" class="{{ $current_page == 'about-us' ? 'active' : '' }}">About us</a>|
            <a href="{{route('register')}}" class="{{ $current_page == 'register' ? 'active' : '' }}">Register</a>|
            <a href="{{route('login')}}" class="{{ $current_page == 'login' ? 'active' : '' }}">Login</a>|
        </nav>
    </nav>
</header>