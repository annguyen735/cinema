@extends('frontend.layouts.main')

@section('title', __('HomePage'))

@section('content')
<div class="full">
	<!-- <div class="main"> -->
		<div class="review-content">
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
			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
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
									<div class="rtm text-center">
										<a href="{{ route('videos.show', 1) }}">REVIEW THIS MOVIE</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="{{ asset('fe_images/r6.jpg') }}" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div class="rtm text-center">
										<a href="#">REVIEW THIS MOVIE</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="{{ asset('fe_images/r5.jpg') }}" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div class="rtm text-center">
										<a href="#">REVIEW THIS MOVIE</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="{{ asset('fe_images/r1.jpg') }}" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div class="rtm text-center">
										<a href="#">REVIEW THIS MOVIE</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="{{ asset('fe_images/r3.jpg') }}" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								<p class="dirctr"><a href="">Reagan Gavin Rasquinha, </a>TNN, Mar 12, 2015, 12.47PM IST</p>
								<div class="clearfix"></div>
								<div class="yrw">
									<div class="rtm text-center">
										<a href="#">REVIEW THIS MOVIE</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="info">CAST:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crime</p>
								<p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hour 45 minutes</p>
							</div>
							<div class="clearfix"></div>
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
                    </div>
				<div class="might pull-right">
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
    <!-- </div>		 -->
</div>
@endsection
@section("script")
<script type="text/javascript" src="{{asset('fe_js/jquery.flexisel.js')}}"></script>	
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
                visibleItems: 2
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 3
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
});
</script>
@endsection
