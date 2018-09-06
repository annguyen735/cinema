<header class="main-header">
    <a href="{{ route('home.index') }}" class="logo">
      <span class="logo-mini"><b>A</b>dm</span>
      <span class="logo-lg"><b>{{__('Admin')}}</b>{{__('Management')}}</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img {{Auth::user()->image ? $url = Auth::user()->image : $url = config('image.default_image')}} src="{{ asset($url) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->fullname }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img {{Auth::user()->image ? $url = Auth::user()->image : $url = config('image.default_image')}} src="{{ asset($url) }}" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->fullname }} - {{__('Web Developer')}}
                  <small>{{__('Member')}} : {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y')}}</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('users.show', Auth::user()->access_token) }}" class="btn btn-default btn-flat">{{__('Profile')}}</a>
                </div>
                <div class="pull-right">
                  <form action="{{ route('logout') }}" method="POST">
                      {{csrf_field()}}
                      <button type="submit" name="logout" class="btn btn-default btn-flat">
                        {{__('Log out')}}
                      </button>
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>
