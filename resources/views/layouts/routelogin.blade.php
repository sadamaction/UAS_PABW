<div class="flex items-center hidden space-x-5 md:flex">
    <a href="">
      <img src="./assets/cart.svg" alt="">
    </a>
    <a href="">
      <img src="./assets/search.svg" alt="">
    </a>
    @if (Route::has('login'))
    @auth
    <a href="{{ url('/dashboard') }}" class="btn">Dasboard</a>
    @else
      <a href="{{ route('login') }}" class="btn">Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn">Registration</a>
        @endif
    @endauth
    @endif
  </div>