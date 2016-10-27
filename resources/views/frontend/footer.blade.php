<footer>
	<div class="container">
		<div class="row">


			<div class="col-sm-4">
				<div class="contact">
					<h3>{{ trans('frontpage.Contact Address') }}</h3>

					<div class="text">
						<p>
							<strong>National Information Commission</strong>
						</p>
						<p>
							<i class="glyphicon glyphicon-phone"></i> +977-1-4602747; 4602920
							+977-1-4601212
						</p>
						<p>
							<i class="glyphicon glyphicon-envelope"></i> info@nic.gov.np
						</p>
						<p>
							<i class="glyphicon glyphicon-map-marker"></i> Paris Danda,
							Koteshwor, Kathmandu
						</p>
					</div>
					<!-- text -->
				</div>
			</div>
			<!-- col -->



			<div class="col-sm-4">
				<div class="gallery">
					<h3>{{ trans('frontpage.Gallery') }}</h3>

					<div class="text">


						@foreach($photoIndexPage as $photo)

						<dl class="footer-gallery">
							<dt>
								<a href="{!! url('public/uploads/images/'. $photo->image) !!}"><img
									src="{!! url('public/uploads/thumbnails/',$photo->image) !!}"
									class="img-responsive"></a>
							</dt>
						</dl>
						@endforeach

					</div>
					<!-- text -->
				</div>
			</div>
			<!-- col -->

			<div class="col-sm-4">
				<div class="follow">
					<h3>Follow Us</h3>

					<div class="text">
						<ul class="social-network social-circle">
							<li><a title="Facebook" class="icoFacebook" href="https://www.facebook.com/rtinepal"><i
									class="fa fa-facebook"></i></a></li>
							<li><a title="Twitter" class="icoTwitter" href="https://twitter.com/rtinepal"><i
									class="fa fa-twitter"></i></a></li>
							<li><a title="Google +" class="icoGoogle" href="https://plus.google.com/u/1/103321093174754023887/posts"><i
									class="fa fa-google-plus"></i></a></li>
							<li><a title="Linkedin" class="icoLinkedin" href="https://www.linkedin.com/profile/view?id=AAwAABqVKoEB27T24Phx9HrV-AthQsAmrRHNkq8&authType=name&authToken=tthk&invAcpt=28944236_I6048772985173610496_500&trk=eml-comm_invm-b-profile-newinvite&midToken=AQGHquZimoWsuA&fromEmail=fromEmail&ut=0g20c6p-JlMmU1"><i
									class="fa fa-linkedin"></i></a></li>
						</ul>

						<div class="visitors">
							<p>{!! Visitor::log(); !!}
                            								Visitors: <span> {!!str_pad(Visitor::clicks(),7,"0",STR_PAD_LEFT)!!}</span>
                            							</p>
						</div>
						<!-- visitors -->
					</div>
					<!-- text -->
				</div>
			</div>
			<!-- col -->

		</div>
		<!-- row -->
	</div>
	<!-- container -->
</footer>

<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p>
					Copyright 2015 &copy; National Information Commission. All rights
					reserved. Maintained by <a href="#">Robust IT Concepts Pvt. Ltd.</a>
				</p>
			</div>

			<div class="col-sm-4">
				<ul class="last-inline">
					<li><a href="http://www.robustitconcepts.com/nic-website/ne">{{ trans('frontpage.Home') }}</a></li>
					<li><a href="{{ url('dynamic-contents/1') }}">{{ trans('frontpage.About Us') }}</a></li>
					<li><a href="{{ url('importantLinks/getAll') }}">{{ trans('frontpage.Important Link') }}</a></li>
					<li><a href="{!! url('contactUs')!!}">{{ trans('frontpage.Contact') }}</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- copyright -->



<script src="{{ asset('public/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.tickerNews.min.js') }}"></script>
<script src="{{ asset('public/js/flexslider/flexslider.js') }}"></script>
<script src="{{ asset('public/js/scripts.js') }}"></script>
<script src="{{ asset('public/js/all.js') }}"></script>
<script src="{{ asset('public/js/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/dist/js/lightbox.js') }}" ></script>
</body>
</html>