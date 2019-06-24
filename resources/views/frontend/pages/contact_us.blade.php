@extends('index')
@section('content')
<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Contact PAge</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Contact-us</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<div class="page-top-info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				
					<form action="">

						<p><label> Your Name <span style="color:red;">*</span><br />
						    <span class=""><input type="text" name="your-name" value="" size="40" class="" aria-required="true" aria-invalid="false" /></span> </label></p>
						<p><label> Your Email <span style="color:red;">*</span><br />
						    <span class=""><input type="email" name="your-email" value="" size="40" class="" aria-required="true" aria-invalid="false" /></span> </label></p>
						<p><label> Subject<br />
						    <span class=""><input type="text" name="your-subject" value="" size="40" class="" aria-invalid="false" /></span> </label></p>
						<p><label> Your Message<br />
						    <span class=""><textarea name="your-message" cols="40" rows="10" class="" aria-invalid="false"></textarea></span> </label></p>
						<p><input type="submit" value="Send" class="" /></p>
						<div class=""></div>
					</form>
				</div>

				<div class="col-md-6">
					<ul><li class="has-label"><strong>Email</strong><br><div><a href="mailto:info@crystalmusic.co.uk">info@crystalmusic.co.uk</a></div></li><li class="has-label"><strong>Phone</strong><br><div>02035700101</div></li><li class="has-label"><strong>Address</strong><br><div> Campshill Road, London, SE13 6QS</div></li><li class="has-map"><iframe src="https://www.google.com/maps?q=Campshill%20Road%2C%20London%2C%20SE13%206QS&amp;output=embed&amp;hl=en&amp;z=14" frameborder="0" class="wpcw-widget-contact-map"></iframe></li></ul>
				</div>
			</div>

	</div>
	<!-- Page info end -->


	



	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</section>
	<!-- Category section end -->
@endsection

