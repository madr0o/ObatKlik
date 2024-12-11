@if (Request::is('login'))
    <!-- Display logo for the login page -->
    <img src="{{ asset('images/obatkliklogo2.png') }}" alt="Logo" {{ $attributes }} class="w-16 h-16">
@elseif (Request::is('register'))
    <!-- Display logo for the register page with margin-top of 5px -->
    <img src="{{ asset('images/obatkliklogo2.png') }}" alt="Logo" {{ $attributes }} class="w-16 h-16" style="margin-top: 15px;">
@elseif (Request::is('forgot-password'))
    <!-- Display logo for the register page with margin-top of 5px -->
    <img src="{{ asset('images/obatkliklogo2.png') }}" alt="Logo" {{ $attributes }} class="w-16 h-16" style="margin-top: 15px;">
@else
    <!-- Default logo for other pages -->
    <img src="{{ asset('images/obatkliklogo.png') }}" alt="Logo" {{ $attributes }} class="w-16 h-16">
@endif
