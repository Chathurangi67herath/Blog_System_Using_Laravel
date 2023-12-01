@include('componets.login_navbar')

<div class="web-content">
    <div class="left" id="different">
        <div class="left-content" id="different-content">
            <h1>Login</h1>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            <form action="{{ route('checklogin') }}" method="post">
                {{ csrf_field() }}
                @if (Session::has('success'))
                    <div class="alert alert-success" style="color:green;">
                        <center>{{ Session::get('success') }}</center>
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger " style="color: red;">
                        <center>{{ Session::get('fail') }}</center>
                    </div>
                @endif
                <br />
                <input type="text" id="userInp" placeholder="Enter user name" name="userName"
                    value="{{ old('userName') }}" />
                <span class="text-danger">
                    @error('userName')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="password" id="passInp" placeholder="Enter password" name="password"
                    value="{{ old('password') }}" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input id="submit" type="submit" value="Login" />
                <div class="loginnav">
                    <a href="{{ asset('/signup') }}">Want to create a new account?</a>
                </div>
            </form>
        </div>
    </div>
