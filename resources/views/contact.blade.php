@extends('layouts.frontLayout')
@section('body_parts')
	<div class="fh5co-parallax" style="background-image: url(public/assets/images/bg03.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Contact Us</h1>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-contact-section">
		<div class="row">
			<div class="col-md-6">
				<div id="map mapouter" class="fh5co-map">
                   <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=DubAI%20AL%20WASA&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>
			</div>
			<div class="col-md-6">
                <!-- Session Status -->
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li style="color: #1bac00;text-align: center;">{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
				<div class="col-md-12">
					<h3>Our Address</h3>
					<p>If you have any query, let us know.</p>
					<ul class="contact-info">
						<li><i class="ti-map"></i>198 West 21th Street, Suite 721 UAE NY 10016</li>
						<li><i class="ti-mobile"></i>+ 1235 2355 98</li>
						<li><i class="ti-envelope"></i><a href="#">info@ignite.com</a></li>
						<li><i class="ti-home"></i><a href="#">www.ignite.com</a></li>
					</ul>
				</div>

                <form action="{{url('messageSend')}}" method="POST">
                    @csrf
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="email"  placeholder="Email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" maxlength="500" name="message" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</div>
					</div>
				</div>
                </form>
			</div>
		</div>
	</div>
	@endsection

