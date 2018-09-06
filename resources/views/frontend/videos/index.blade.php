@extends('frontend.layouts.main')

@section('title', __('Videos'))

@section('css')
<link href="{{asset('fe_css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
<div class="header">
	<div class="top-header">
		<div class="logo">
			<a href="index.html"><img src="{{ asset('fe_images/logo.png') }}" alt="" /></a>
			<p>Movie Theater</p>
		</div>
		@include("frontend.layouts.partials.login-register")
		<div class="search">
			<form>
				<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<br> <br>
<div class="content-grids">
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum1.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div id="small-dialog" class="mfp-hide">
		<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum2.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum3.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid last-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum4.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum5.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum6.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum7.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid last-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum8.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum9.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum10.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum11.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="content-grid last-grid">
		<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="{{ asset('fe_images/gridallbum1.jpg') }}" title="allbum-name" /></a>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
		<ul>
			<li><a href="#"><img src="{{ asset('fe_images/likes.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/views.png') }}" title="image-name" /></a></li>
			<li><a href="#"><img src="{{ asset('fe_images/link.png') }}" title="image-name" /></a></li>
		</ul>
		<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
	</div>
	<div class="clearfix"> </div>
	<div class="pagenation">
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
@endsection
@section("script")
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('fe_js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
</script>		
@endsection