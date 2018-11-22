@extends('frontend.layouts.main')

@section('title', __('Film Detail'))

@section('content')
<div class="header">
	<div class="top-header">
		<div class="logo">
			<a href="index.html"><img src="{{ asset('fe_images/logo.png')}}" alt="" /></a>
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
<div class="single-content">
		<div class="top-header span_top">
			<div class="logo">
				<a href="index.html"><img src="{{asset('fe_images/logo.png') }}" alt="" /></a>
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
			<div class="reviews-section">
				<h3 class="head">Movie</h3>
					<div class="col-md-9 reviews-grids">
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="{{ asset('fe_images/r4.jpg') }}" alt="" /></a>
							</div>
							<div class="review-info">
								<h3><b>{{$film->name}}</b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="border-radius:8px; background-color:red; color:white; padding:10px;">{{$film->year}}</i></h3>
								<div class="clearfix"></div>
								<div class="yrw">
									<div id="small-dialog" class="mfp-hide">
										<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen style="width:400px; height:300px"></iframe>
									</div>
									
									<!-- <div class="clearfix"></div> -->
								</div>
								<p class="info">Actor:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$film->actor}}</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;{{$film->author}}</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$film->genre}}</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; {{$film->time_limit}} minutes</p>
								<p class="info">Kind:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$film->kind}} </p>
								@include("frontend.details.partials.booking-ticket")
								@if (\Auth::check())
								<a href="#booking-ticket" class="book book-ticket" data-toggle="modal" style="width:35%"><i class="book book-ticket"></i>BOOK TICKET</a>
								@else 
								<a href="{{ route('login') }}" class="btn btn-danger">You must Login to Booking Ticket</a>
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
						<br> <br>
						<div class="story-review">
							<h4>DICRIPTION:</h4>
							<p>{{$film->content}}</p>
						</div>
							<!-- comments-section-starts -->
	    <div class="comments-section">
	        <div class="comments-section-head">
				<div class="comments-section-head-text">
					<h3>{{count($comments)}} Comments</h3>
				</div>
				<div class="clearfix"></div>
		    </div>
			<div class="comments-section-grids" id="comment-section">
				@foreach ($comments as $comment)
				<div class="comments-section-grid">
					<div class="col-md-2 comments-section-grid-image">
						<img src="{{ $comment->user->image ? '/fe_images/'.$comment->user->image : '/no-image.png' }}" class="img-responsive" alt="" />
					</div>
					<div class="col-md-10 comments-section-grid-text">
						<h4><a href="#">{{$comment->user->fullname}}</a></h4>
						<button type="button" class="pull-right comments-option"><span>...</span></button>
						<label>{{$comment->updated_at}}</label>
						<p>{{$comment->content}}</p>
					</div>
					<div class="clearfix"></div>
				</div>
				@endforeach
			</div>
			<!-- <div class="comments-section-grid">
				<a href="#"><span class="loading-more">Loading more</span></a>
			</div> -->
	    </div>
	  <!-- comments-section-ends -->
		  <div class="reply-section">
			  <div class="reply-section-head">
				  <div class="reply-section-head-text">
					  <h3>Comments</h3>
				  </div>
			  </div> 
			<div class="blog-form">
				<input type="text" class="create-comment" value="" placeholder="{{!\Auth::check() ? 'You must login to comment' : 'Enter your comment'}}" user-img="{{ \Auth::check() ? \Auth::user()->image ? \Auth::user()->image : 'no-image.png' : ''}}" fullname="{{ \Auth::check() ? \Auth::user()->fullname : ''}}" {{ \Auth::check() ? '' :'disabled'}} user-id="{{  \Auth::check() ? Auth::user()->id : ''}}">
			 </div>
		  </div>
		  </div>
					<div class="col-md-3 side-bar">
						<div class="featured">
							<h3>Featured Today in Movie Reviews</h3>
							<ul>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f1.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f2.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f3.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f4.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f5.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="single.html"><img src="{{ asset('fe_images/f6.jpg') }}" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						
						<div class="entertainment">
							<h3>Featured Today in Entertainment</h3>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f6.jpg') }}" alt="" /></a>
								</li>
								<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f5.jpg') }}" alt="" /></a>
								</li>
									<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
							
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f3.jpg') }}" alt="" /></a>
								</li>
								<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f4.jpg') }}" alt="" /></a>
								</li>
								<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f2.jpg') }}" alt="" /></a>
								</li>
								<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
							
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="single.html"><img src="{{ asset('fe_images/f1.jpg') }}" alt="" /></a>
								</li>
								<li>
									<a href="single.html">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						<div class="might">
				<h4>You might also like</h4>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="{{ asset('fe_images/mi.jpg') }}" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="{{ asset('fe_images/mi1.jpg') }}" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="{{ asset('fe_images/mi2.jpg') }}" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="single.html"><img src="{{ asset('fe_images/mi3.jpg') }}" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="single.html">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
			<!---->
			<div class="grid-top">
				<h4>Archives</h4>
				<ul>
					<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
					<li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
					<li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
					<li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
					<li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
					<li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
					<li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
				</ul>
				</div>
				<!---->

					</div>

					<div class="clearfix"></div>
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="{{ asset('fe_images/r1.jpg') }}" alt=""/></li>
			<li><img src="{{ asset('fe_images/r2.jpg') }}" alt=""/></li>
			<li><img src="{{ asset('fe_images/r3.jpg') }}" alt=""/></li>
			<li><img src="{{ asset('fe_images/r4.jpg') }}" alt=""/></li>
			<li><img src="{{ asset('fe_images/r5.jpg') }}" alt=""/></li>
			<li><img src="{{ asset('fe_images/r6.jpg') }}" alt=""/></li>
		</ul>
</div>	
@endsection

@section("script")
<script type="text/javascript">
    $(window).load(function() {
        
        $("#flexiselDemo1").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,    		
            pauseOnHover: false,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
        });
</script>
<script type="text/javascript" src="{{asset('fe_js/jquery.flexisel.js')}}"></script>	

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
<script src="{{ asset('fe_js/comment.js') }}"></script>	
@endsection

