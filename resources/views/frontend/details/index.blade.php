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
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div id="small-dialog" class="mfp-hide">
										<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen style="width:400px; height:300px"></iframe>
									</div>
									
									<!-- <div class="clearfix"></div> -->
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
								@include("frontend.details.partials.booking-ticket")
								@if (\Auth::check())
								<a href="#booking-ticket" class="book book-ticket" data-toggle="modal" style="width:35%"><i class="book book-ticket"></i>BOOK TICKET</a>
								@else 
								<a href="{{ route('login') }}" class="btn btn-danger">You must Login to Booking Ticket</a>
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="single">
							<h3>Lorem Ipsum IS A TENSE, TAUT, COMPELLING THRILLER</h3>
							<p>STORY:<i> Meera and Arjun drive down Lorem Ipsum - can they survive a highway from hell?</i></p>
						</div>
						<div class="best-review">
							<h4>Best Reader's Review</h4>
							<p>Excellent Movie and great performance by Lorem, one of the finest thriller of recent  like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p><span>Neeraj Upadhyay (Noida)</span> 16/03/2015 at 12:14 PM</p>
						</div>
						<div class="story-review">
							<h4>REVIEW:</h4>
							<p>So,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
							<!-- comments-section-starts -->
	    <div class="comments-section">
	        <div class="comments-section-head">
				<div class="comments-section-head-text">
					<h3>25 Comments</h3>
				</div>
				<div class="clearfix"></div>
		    </div>
			<div class="comments-section-grids" id="comment-section">
				<div class="comments-section-grid">
					<div class="col-md-2 comments-section-grid-image">
						<img src="{{ asset('fe_images/eye-brow.jpg') }}" class="img-responsive" alt="" />
					</div>
					<div class="col-md-10 comments-section-grid-text">
						<h4><a href="#">MARWA ELGENDY</a></h4>
						<label>5/4/2014 at 22:00   </label>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound but because those who do not know how to pursue pleasure rationally encounter consequences.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				
				<div class="comments-section-grid">
					<div class="col-md-2 comments-section-grid-image">
						<img src="{{ asset('fe_images/stylish.jpg') }}" class="img-responsive" alt="" />
					</div>
					<div class="col-md-10 comments-section-grid-text">
						<h4><a href="#">MARWA ELGENDY</a></h4>
						<label>5/4/2014 at 22:00   </label>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound but because those who do not know how to pursue pleasure rationally encounter consequences.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				
			</div>
			<div class="comments-section-grid">
				<a href="#"><span class="loading-more">Loading more</span></a>
			</div>
	    </div>
	  <!-- comments-section-ends -->
		  <div class="reply-section">
			  <div class="reply-section-head">
				  <div class="reply-section-head-text">
					  <h3>Comments</h3>
				  </div>
			  </div> 
			<div class="blog-form">
				
				<input type="text" class="create-comment" value="" placeholder="{{!\Auth::check() ? 'You must login to comment' : 'Enter your comment'}}" user-img="{{ asset('fe_images/eye-brow.jpg') }}" fullname="An Nguyen Q." {{ \Auth::check() ? '' :'disabled'}}>
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

