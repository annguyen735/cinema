@extends('frontend.layouts.main')

@section('title', __('Register'))

@section('content')
<div class="header">
	<div class="top-header">
		<div class="logo">
			<a href="index.html"><img src="{{ asset('fe_images/logo.png')}}" alt="" /></a>
			<p>BestFilm</p>
        </div>
        @include("frontend.layouts.partials.login-register")
		<div class="clearfix"></div>
	</div>
	<div class="header-info-form">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required minlength="6">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" style="padding:0px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-md-6" id="sandbox-container">
                                <input id="birthday" type="date" class="form-control" name="birthday" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city_id" class="col-md-4 col-form-label text-md-right">{{ __('Cities') }}</label>
                            <div class="col-md-6" id="sandbox-container">
                                <select name="city_id" class="select" style="font-family:-webkit-pictographa; background-color: transparent; height:35px; margin-top:5px;font-size:20px;">
                                    @foreach ($cities as $city)
                                        <option value="{{$city->id}}" {{ (old('city_id') == $city->id) ? 'selected' : '' }}>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
