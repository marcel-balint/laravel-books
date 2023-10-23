<header>
    <nav>
        <a class="{{ $current_page == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a> |
        <a  class="{{ $current_page == 'about-us' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
    </nav>
</header>