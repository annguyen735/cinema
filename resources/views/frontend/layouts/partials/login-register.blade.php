<div class="login-register pull-right">
    @guest
        <a href="{{route('login')}}">{{__("Login")}}</a> /
        <a href="{{route('register')}}">{{__("Register")}}</a>
    @else
        <p>Hello, <a href="">{{\Auth::user()->fullname}}</a></p>
    @endguest
</div>
