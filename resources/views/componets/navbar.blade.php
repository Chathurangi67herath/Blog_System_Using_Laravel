@include('componets.head')
<nav>
    <label class="logo"><a id="logo" href="{{ asset('/home') }}"><img src="{{ asset('img/wavenetLogo.jpg') }}"
                alt=""
                style="border-radius:50px; width:50px; vertical-align: middle; margin-right:20px"></a></label>
    <ul>
        <li><a href="{{ asset('/home') }}">Home</a></li>
        <li><a href="{{ asset('/postdetails') }}">Post Details</a></li>
        <li><a href="{{ asset('/allpost') }}">All Posts</a></li>
        <li><a href="{{ asset('/category') }}">Category</a></li>
        <li><a href="{{ asset('/tag') }}">Tag</a></li>
        <li><a href="{{ asset('/logout') }}">Log Out</a></li>
    </ul>
    <label id="icon">
        <i class="fas fa-bars"></i>
    </label>
</nav>
