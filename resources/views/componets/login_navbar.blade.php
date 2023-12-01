@include('componets.head')
<nav class="signup-screen-nav">

    <label class="logo"><a id="logo" href=""><img src="{{ asset('img/wavenetLogo.jpg') }}" alt=""
                style="border-radius:50px; width:50px; vertical-align: middle; margin-right:20px">Wavenet
            International - Blog System </a></label>
    <ul>
        <li><a href="{{ asset('/login') }}">Login</a></li>
        <li><a href="{{ asset('/signup') }}">Sign Up</a></li>
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
</nav>
