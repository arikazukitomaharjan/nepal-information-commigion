<div class="col-sm-9" id="page-main-content">


	<br>
	<br>
	<center>
		<h3>Useful Links</h3>
	</center>
	<br>
	<br>
	<h3>Ministries In NEPAL</h3>
	<ul class="latestnews" start="50">
		@foreach($importantLinks as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>
	<br>
	<br>
	<h3>Commissions In Nepal</h3>
	<ul class="latestnews" start="50">
		@foreach($aayog as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>

	<br>
	<br>
	<h3>Some Professional Institutions of Nepal</h3>
	<ul class="latestnews" start="50">
		@foreach($institutions as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>

	<br>
	<br>
	<h3>Non Government Organizations</h3>
	<ul class="latestnews" start="50">
		@foreach($nonorganizations as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>
	<br>
	<br>
	<h3>International Non Government Organizations</h3>
	<ul class="latestnews" start="50">
		@foreach($government as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>
	<br>
	<br>
	<h3>Some Government organizations related to Defence and Security in
		Nepal</h3>
	<ul class="latestnews" start="50">
		@foreach($security as $importantLink)
		<li>

			<div class="media-body">



				<h4 class="media-heading">
					<a href="http://{!! $importantLink->url !!}" target="_blank"> {!!
						$importantLink->name !!}</a>
				</h4>


			</div>

		</li> @endforeach
	</ul>
</div>