<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<div class="login-register pull-right dropdown">
    @guest
        <a href="{{route('login')}}">{{__("Đăng nhập")}}</a> /
        <a href="{{route('register')}}">{{__("Đăng ký")}}</a>
    @else
        <p>Hello, <a href="">{{\Auth::user()->fullname}}</a></p>
        <div class="dropdown-content">
            <div class="pull-left">
                <a href="{{ route('users.show', Auth::user()->access_token) }}" class="btn btn-default btn-flat">{{__('Thông tin')}}</a>
            </div>
            <div class="pull-right">
                <form action="{{ route('logout') }}" method="POST">
                    {{csrf_field()}}
                    <button type="submit" name="logout" class="btn btn-default btn-flat">
                    {{__('Đăng xuất')}}
                    </button>
                </form>
            </div>
        </div>
    @endguest
</div>
