@include('componets.login_navbar')

<div class="web-content">
    <div class="left" id="different">
        <div class="left-content" id="different-content">
            <h1>Sign Up</h1>
            <form action="{{ route('savelogin') }}" method="post">
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
                <input type="text" id="name" placeholder="Enter your name" name="name"
                    value="{{ old('name') }}" />
                <span class="text-danger" style="color: red;">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="text" id="email" placeholder="Enter Your Email" name="email"
                    value="{{ old('email') }}" />
                <span class="text-danger" style="color: red;">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="text" id="telNo" placeholder="Enter Phone Number name" name="telNo"
                    value="{{ old('telNo') }}" />
                <span class="text-danger" style="color: red;">
                    @error('telNo')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="text" id="userName" placeholder="Enter user name" name="userName"
                    value="{{ old('userName') }}" />
                <span class="text-danger" style="color: red;">
                    @error('userName')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="password" id="password" placeholder="Enter your password" name="password"
                    value="{{ old('password') }}" />
                <span class="text-danger" style="color: red;">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input type="password" id="password2" placeholder="Re-Enter your password" name="password2"
                    value="{{ old('password2') }}" />
                <span class="text-danger" style="color: red;">
                    @error('password2')
                        {{ $message }}
                    @enderror
                </span>
                <br>
                <input id="submit" type="submit" value="Sign Up" />
                <div class="loginnav">
                    <a href="{{ asset('/login') }}"> Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
