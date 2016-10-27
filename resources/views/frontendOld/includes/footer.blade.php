<footer>
	<div class="main-footer">
		<div class="row">

			<div class="col-md-3 col-sm-6 menu-block">
				<ul class="footer-links">
					<li><a href="http://localhost:8083/nic-website/"><i class="fa fa-home  fa-2x"></i> Home</a></li>
					<li><a href="#"><i class="fa fa-group  fa-2x"></i>Who Are We</a></li>
					<li><a href="#"><i class="fa fa-archive  fa-2x"></i>What We Do</a></li>
					<li><a href="#"><i class="fa fa-search  fa-2x"></i>Procedure For
							Request</a></li>
					<li><a href="#"><i class="fa fa-info-circle  fa-2x"></i>Your Right
							to Know</a></li>
				</ul>
			</div>
			<!-- end Grid layout-->

			<div class="contact-block col-md-3 col-sm-6 address-block">

				<h4>Contact Us</h4>
				<h3 class="h3-without-margin">National Information Commission</h3>

				<i class="fa fa-phone"></i>+977-1-4602747; 4602920 +977-1-4601212 </br>
				<i class="fa fa-envelope"></i>info@nic.gov.np</br> <i
					class="fa fa-map-marker"></i>Paris Danda, Koteshwor, Kathmandu


			</div>
			<!-- end Grid layout-->

			<div class="col-md-3 col-sm-6 clearfix">
				<h4>Gallery</h4>
				<div class="images-gallery">

					 @foreach($photoIndexPage as $photo)


                        <a class="example-image-link" href="{!! url('public/uploads/images/'. $photo->image) !!}"  data-lightbox="example-set" data-title="{!! $photo->title !!}" >
                           <img class="example-image" src="{!! url('public/uploads/thumbnails/',$photo->image) !!}" width="85" height="85" >&nbsp;
                   
                            
                        </a>

                      @endforeach


				</div>

			</div>
			<!-- end Grid layout-->

			<div class="col-md-3 col-sm-6">
				<h4>Follow Us:</h4>
				<ul class="social-network social-circle">
					<li><a href="#" class="icoFacebook" title="Facebook"><i
							class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i
							class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoGoogle" title="Google +"><i
							class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i
							class="fa fa-linkedin"></i></a></li>
				</ul>

				<div class="visitors-block col-sm-12 col-md-12">
					<div class="label col-sm-4 col-md-4">Visitors:</div>

					<div class="visitors-number col-sm-6 col-md-6">
						{!!Visitor::clicks()!!}</div>

				</div>
			</div>
			<!-- end Grid layout-->

		</div>
		<!-- end .row -->
	</div>
	<!-- end .main-footer -->

	<div class="copyright">
		<div class="row">
			<p>
				Copyright 2015 &copy; National Information Commission. All rights
				reserved. Maintained by <a href="#">Robust IT Concepts Pvt. Ltd.</a>
			</p>

			<ul class="list-inline">
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Shortcodes</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- END .container -->
	</div>
	<!-- end .copyright-->
</footer>
<!-- end #footer -->
