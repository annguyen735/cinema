@extends('frontend.layouts.main')

@section('title', __('HomePage'))

@section('content')
<div class="header">
		<div class="error-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="{{ asset('fe_images/logo.png') }}" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="error-404 text-center">
				<h2 style="font-family:fantasy">Please check your mail to confirm registation</h2>
            </div>
        </div>	
</div>
@endsection
